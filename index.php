<?php require_once "server.php";?>
<?php require_once ('header.php');?>
<?php
    // request and query
        $sql = "SELECT * FROM books";
        $results = mysqli_query($connexion,$sql); 
?>

<main>
        <h1>Book List</h1>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Author</th>
                <th scope="col">Title</th>
                <th scope="col">Publisher</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($results)) { ?>
                    <tr>
                        <th scope="row"><?php echo $row['id_book']; ?></th>
                        <td><?php echo $row['author']; ?></td>
                        <td><?php echo $row['book_title']; ?></td>
                        <td><?php echo $row['publisher']; ?></td>
                        <td>
                            <a href="update.php?update=<?php echo $row['id_book']; ?>">Update</a> |
                            <a href="delete.php?delete=<?php echo $row['id_book']; ?>" onclick="supprimer()">Delete</a>
                        </td>
                        
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>
</body>
</html>
