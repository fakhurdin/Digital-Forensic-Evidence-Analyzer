<?php
// Database connection
require_once '../config/database.php';

// Function to fetch all evidence items
function getAllEvidence($conn) {
    $sql = "SELECT * FROM evidence";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        return $result->fetch_all(MYSQLI_ASSOC);
    } else {
        return [];
    }
}

// Function to fetch evidence details by ID
function getEvidenceById($conn, $id) {
    $stmt = $conn->prepare("SELECT * FROM evidence WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    return $result->fetch_assoc();
}

// Function to add evidence notes
function addEvidenceNote($conn, $evidenceId, $note) {
    $stmt = $conn->prepare("INSERT INTO evidence_notes (evidence_id, note) VALUES (?, ?)");
    $stmt->bind_param("is", $evidenceId, $note);
    return $stmt->execute();
}

// Function to fetch evidence notes by evidence ID
function getEvidenceNotes($conn, $evidenceId) {
    $stmt = $conn->prepare("SELECT * FROM evidence_notes WHERE evidence_id = ?");
    $stmt->bind_param("i", $evidenceId);
    $stmt->execute();
    $result = $stmt->get_result();
    
    return $result->fetch_all(MYSQLI_ASSOC);
}

// Example usage
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $evidenceList = getAllEvidence($conn);
    echo json_encode($evidenceList);
}
?>