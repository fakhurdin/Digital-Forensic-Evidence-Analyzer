// JavaScript code for Digital Forensic Evidence Analyzer (DFEA)

// Function to show a specific section of the application
function showSection(sectionId) {
    const sections = document.querySelectorAll('.main > section');
    sections.forEach(section => {
        section.style.display = 'none'; // Hide all sections
    });
    document.getElementById(sectionId).style.display = 'block'; // Show the selected section
}

// Function to close a modal
function closeModal(modalId) {
    const modal = document.getElementById(modalId);
    modal.style.display = 'none'; // Hide the modal
}

// Function to open a modal
function openModal(modalId) {
    const modal = document.getElementById(modalId);
    modal.style.display = 'block'; // Show the modal
}

// Event listeners for opening modals
document.querySelector('.open-upload-modal').addEventListener('click', () => openModal('uploadModal'));
document.querySelector('.open-report-modal').addEventListener('click', () => openModal('reportModal'));

// Example AJAX function to upload evidence (to be implemented)
function uploadEvidence(formData) {
    fetch('php/upload.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert('Evidence uploaded successfully!');
            closeModal('uploadModal');
        } else {
            alert('Error uploading evidence: ' + data.message);
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
}