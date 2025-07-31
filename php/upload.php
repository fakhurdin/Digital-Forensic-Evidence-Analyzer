<?php
// Database configuration
require_once '../config/database.php';

// Function to generate hash
function generateHash($filePath) {
    return [
        'md5' => md5_file($filePath),
        'sha256' => hash_file('sha256', $filePath)
    ];
}

// Handle file upload
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['evidence'])) {
        $file = $_FILES['evidence'];
        $uploadDir = '../uploads/'; // Ensure this directory exists and is writable
        $uploadFilePath = $uploadDir . basename($file['name']);

        // Check for upload errors
        if ($file['error'] === UPLOAD_ERR_OK) {
            // Move the uploaded file to the designated directory
            if (move_uploaded_file($file['tmp_name'], $uploadFilePath)) {
                // Generate hashes
                $hashes = generateHash($uploadFilePath);

                // Prepare SQL statement to insert evidence into the database
                $stmt = $pdo->prepare("INSERT INTO evidence (file_name, file_path, md5_hash, sha256_hash) VALUES (?, ?, ?, ?)");
                $stmt->execute([$file['name'], $uploadFilePath, $hashes['md5'], $hashes['sha256']]);

                echo json_encode(['status' => 'success', 'message' => 'File uploaded successfully.']);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Failed to move uploaded file.']);
            }
        } else {
            echo json_encode(['status' => 'error', 'message' => 'File upload error.']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'No file uploaded.']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
}
?>