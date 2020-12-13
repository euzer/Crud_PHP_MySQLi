<?php require_once "server.php"; ?>
<?php require_once ('header.php');?>
<?php 
    function AddConfirmationMessage()
    {
        $_SESSION['message'] = "Added with success!";

        if (isset($_SESSION['message'])):?>
        <div class="message">
            <?php
            echo $_SESSION['message'];
            //unset($_SESSION['message']);
            session_unset();
            ?>
        </div>
        <?php endif;
    }
?>

<h1>Insert book</h1>
<div class="form">
    <form action="" method="post">
        <label for="ftitle">Title</label><br>
        <input type="text" id="" name="title" required><br><br>
        <label for="lname">Author</label><br>
        <input type="text" id="" name="author" required><br><br>
        <label for="lpublisher">Publisher</label><br>
        <input type="text" id="" name="publisher" required><br><br>
        <input type="submit" value="Save" name="submit">
    </form>   
</div>

<?php
    // Initialization
    $title = "";
    $author = "";
    $publisher = "";

    // check if the SAVE button is pressed
    if (isset($_POST['submit'])) {

        $title = $_POST['title'];
        $author = $_POST['author'];
        $publisher = $_POST['publisher'];

        // SQL Request
        $sql = "INSERT INTO books (book_title, author, publisher) VALUES ('$title', '$author', '$publisher')";
        // Query to the DB
        $results = mysqli_query($connexion,$sql);
        
        AddConfirmationMessage();
        // Redirect to the index
        //header('location: index.php');
    }
?>

    
    