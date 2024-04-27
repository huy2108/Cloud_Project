<?php include 'templates/header.php'; ?>

<!-- Your page content here -->
<div class="aboutUsContainer">
    <div class="aboutUsContent bookContainer bookContainer">
        <?php
        // Include the database connection file
        include 'connectDB.php';

        $dbname = "BookStore"; // Replace "BookStore" with the name of your database
        $conn->select_db($dbname);

        if(isset($_GET['book_title'])) {
            // Retrieve the book title from the URL parameter
            $bookTitle = $_GET['book_title'];
        
            // Prepare the SQL statement
            $sql = "SELECT * FROM Book WHERE BookTitle = ?";
            $stmt = $conn->prepare($sql);
        
            // Bind parameters
            $stmt->bind_param("s", $bookTitle);
        
            // Execute the prepared statement
            $stmt->execute();
        
            // Get the result
            $result = $stmt->get_result();
        
            // Check if the query returned any results
            if ($result->num_rows > 0) {
                // Fetch the book details
                $row = $result->fetch_assoc();
                $bookTitle = $row['BookTitle'];
                $author = $row['Author'];
                $image = $row['Image'];
                $bookContent = $row['BookContent'];
        
                // Display the book details
                echo "<h2 class='aboutUsTitle bookTitle'>$bookTitle</h2>";
                echo "<div class='bookDetails'>";
                echo "<img src='$image' alt='$bookTitle'>";
                echo "<p><strong>Author:</strong> $author</p>";
                echo "</div>";
                echo "<div class='bookPlot'>";
                echo "<h2>Book Content:</h2>";
                echo "<p>$bookContent</p>";
                echo "</div>";
            } else {
                echo "Book not found.";
            }
        } else {
            echo "Book title not provided.";
        }
        
        // Close the statement and database connection
        $stmt->close();
        $conn->close();
        ?>
    </div>
</div>

<?php include 'templates/footer.php'; ?>
