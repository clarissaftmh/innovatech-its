<?php
    
    $servername = "127.0.0.1:3307";
    $username = "root";
    $password = "";
    $db = "innovatech-its";

    $conn = mysqli_connect($servername,$username,$password,$db);

    if(!$conn){
        die("error bang");
    }

?>