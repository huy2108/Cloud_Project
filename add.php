<?php include 'templates/header.php'; ?>

<div class="aboutUsContainer">
    <h2 class='aboutUsTitle'>Add a book</h2>
    <div class="aboutUsContent">
        
        <form method="post" action="process_form.php">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>

            <label for="author">Author:</label>
            <input type="text" id="author" name="author" required><br><br>

            <label for="bookContent">Book Content:</label><br>
            <textarea id="bookContent" name="bookContent" rows="4" cols="50" required></textarea><br><br>
            
            <label for="bookCover">Book Cover</label>
            <input type="file" id="bookCover" name="bookCover" required><br><br>

            <input type="submit" class='submitButton' value="Submit">
        </form>
    </div>
</div>

<?php include 'templates/footer.php'; ?>
