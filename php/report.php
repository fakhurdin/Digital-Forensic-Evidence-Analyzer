<?php
// report.php

// Include database configuration
require_once '../config/database.php';

// Function to generate report
function generateReport($caseId) {
    global $conn;

    // Fetch case details
    $caseQuery = "SELECT * FROM cases WHERE id = ?";
    $stmt = $conn->prepare($caseQuery);
    $stmt->bind_param("i", $caseId);
    $stmt->execute();
    $caseResult = $stmt->get_result();
    $caseDetails = $caseResult->fetch_assoc();

    // Fetch evidence related to the case
    $evidenceQuery = "SELECT * FROM evidence WHERE case_id = ?";
    $stmt = $conn->prepare($evidenceQuery);
    $stmt->bind_param("i", $caseId);
    $stmt->execute();
    $evidenceResult = $stmt->get_result();

    // Prepare report content
    $reportContent = "<h1>Report for Case: " . htmlspecialchars($caseDetails['title']) . "</h1>";
    $reportContent .= "<h2>Evidence List:</h2><ul>";

    while ($evidence = $evidenceResult->fetch_assoc()) {
        $reportContent .= "<li>" . htmlspecialchars($evidence['description']) . " (Uploaded by: " . htmlspecialchars($evidence['uploaded_by']) . ")</li>";
    }

    $reportContent .= "</ul>";

    // Return the generated report content
    return $reportContent;
}

// Check if case ID is provided
if (isset($_GET['case_id'])) {
    $caseId = intval($_GET['case_id']);
    $report = generateReport($caseId);
    echo $report;
} else {
    echo "No case ID provided.";
}
?>