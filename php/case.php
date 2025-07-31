<?php
// case.php

// Include database configuration
require_once '../config/database.php';

// Class for Case Management
class CaseManager {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    // Create a new case
    public function createCase($caseName, $description) {
        $query = "INSERT INTO cases (case_name, description) VALUES (:case_name, :description)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':case_name', $caseName);
        $stmt->bindParam(':description', $description);
        return $stmt->execute();
    }

    // Get all cases
    public function getCases() {
        $query = "SELECT * FROM cases";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Get case by ID
    public function getCaseById($caseId) {
        $query = "SELECT * FROM cases WHERE id = :case_id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':case_id', $caseId);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Update case
    public function updateCase($caseId, $caseName, $description) {
        $query = "UPDATE cases SET case_name = :case_name, description = :description WHERE id = :case_id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':case_name', $caseName);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':case_id', $caseId);
        return $stmt->execute();
    }

    // Delete case
    public function deleteCase($caseId) {
        $query = "DELETE FROM cases WHERE id = :case_id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':case_id', $caseId);
        return $stmt->execute();
    }
}

// Usage example
$db = new Database();
$caseManager = new CaseManager($db->getConnection());

// Handle requests (e.g., create, update, delete cases)
// This part can be expanded based on the application's needs
?>