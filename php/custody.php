<?php
// custody.php

// Include database configuration
require_once '../config/database.php';

// Function to log chain of custody
function logCustody($evidenceId, $userId, $action) {
    global $conn; // Use the global database connection

    // Prepare SQL statement
    $stmt = $conn->prepare("INSERT INTO custody_logs (evidence_id, user_id, action, timestamp) VALUES (?, ?, ?, NOW())");
    $stmt->bind_param("iis", $evidenceId, $userId, $action);

    // Execute the statement
    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
}

// Function to retrieve custody logs for a specific evidence item
function getCustodyLogs($evidenceId) {
    global $conn; // Use the global database connection

    // Prepare SQL statement
    $stmt = $conn->prepare("SELECT * FROM custody_logs WHERE evidence_id = ? ORDER BY timestamp DESC");
    $stmt->bind_param("i", $evidenceId);
    $stmt->execute();

    // Get result
    $result = $stmt->get_result();
    $logs = $result->fetch_all(MYSQLI_ASSOC);

    return $logs;
}

// Example usage
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $evidenceId = $_POST['evidence_id'];
    $userId = $_POST['user_id'];
    $action = $_POST['action'];

    if (logCustody($evidenceId, $userId, $action)) {
        echo json_encode(['status' => 'success', 'message' => 'Custody log recorded.']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to record custody log.']);
    }
}
?>