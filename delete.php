<?php  require_once('server.php'); // require_once est mieux #DataBase connexion
    // Delete something
    if (isset($_GET['delete'])) { ?>

        <script type="text/javascript">
            function supprimer() {
                var confirmation = confirm("Do you really want to delete?");
                if (confirmation == true) {
                    <?php
                        $id = $_GET['delete'];
                        // SQL request
                        $sql = "DELETE FROM books WHERE id_book = '$id'";
                        // Sending Query to DB
                        mysqli_query($connexion, $sql);
                        // redirect to index
                        header('location: index.php');
                    ?>
                }
                else {
                    <?php header('location: index.php'); ?>
                }
            }
        </script>
        
    <?php } ?>