<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collecting the form data
    $enrollmentId = $_POST['enrollmentId'];
    $classroom = $_POST['classroomSelect'];
    $category = $_POST['categorySelect'];
    $issueType = $_POST['issueType'];
    $description = $_POST['issueDescription'];

    // Basic validation (you can add more validation if necessary)
    if (!empty($enrollmentId) && !empty($classroom) && !empty($category) && !empty($issueType)) {
        // Handle the form data (store in database, send email, etc.)
        // For now, we will just output a success message
        echo "Form submitted successfully!<br>";
        echo "Enrollment ID: " . htmlspecialchars($enrollmentId) . "<br>";
        echo "Classroom: " . htmlspecialchars($classroom) . "<br>";
        echo "Category: " . htmlspecialchars($category) . "<br>";
        echo "Issue Type: " . htmlspecialchars($issueType) . "<br>";
        echo "Description: " . htmlspecialchars($description) . "<br>";
    } else {
        echo "Please fill out all required fields.";
    }
}
?>
