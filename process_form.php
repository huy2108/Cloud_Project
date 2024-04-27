<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission Result</title>
</head>
<body>

<?php
// Include the database connection file
include 'connectDB.php';

$dbname = "BookStore"; // Replace "BookStore" with the name of your database
$conn->select_db($dbname);

// Check if the form is submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $author = $_POST["author"];
    $bookContent = $_POST["bookContent"];

    // Handle image upload
    $targetDir = "images/";
    $targetFile = $targetDir . basename($_POST["bookCover"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if the file is an actual image
    
    // If image upload is successful, insert form data into the database
    if ($uploadOk == 1) {
        // SQL query to insert form data into the database
        $sql = "INSERT INTO Book (BookTitle, Author, Image, BookContent) VALUES ('$name', '$author', '$targetFile', '$bookContent')";

        // Execute the SQL query
        if ($conn->query($sql) === TRUE) {
            // If the query is successful, redirect to add.php
            header("Location: add.php");
            exit;
        } else {
            // If an error occurs, display an error message
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
} else {
    // If the form is not submitted via POST, display an error message
    echo "<h2>Error: Form not submitted!</h2>";
}

// Close the database connection
$conn->close();
?>


</body>
</html>
