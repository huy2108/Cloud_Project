<?php include 'templates/header.php'; ?>

<!-- Your page content here -->
<div class="aboutUsContainer">
    <h2 class='aboutUsTitle'>Bookcase</h2>
    <div class="aboutUsContent bookContainer">
        <?php
        // Include the database connection file
        include 'connectDB.php';

        $dbname = "BookStore"; // Replace "BookStore" with the name of your database
        $conn->select_db($dbname);

        // SQL query to retrieve all books
        $sql = "SELECT * FROM Book";
        $result = $conn->query($sql);

        // Check if there are any results
        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<div class='book'>";
                echo "<a href='book_details.php?book_title=" . $row["BookTitle"] . "' class='book-link'>";
                echo "<img src='" . $row["Image"] . "' alt=''>";
                echo "<p>" . $row["BookTitle"]. "</p>";
                echo "</a>";
                echo "</div>";
            }
        } else {
            echo "<p>No books found.</p>";
        }

        // Close the database connection
        $conn->close();
        ?>
    </div>
</div>

<?php include 'templates/footer.php'; ?>
