<?php
    session_start();
    
    # parameters for DBcONNECTIONS
    
    $servername = "";
    $username = "";
    $password = "";
    $dbname = "";

    # create connexion
    $connexion = mysqli_connect($servername, $username, $password, $dbname);
?>