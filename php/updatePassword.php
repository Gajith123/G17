<?php

    include "../php/config.php";
    
    session_start();
    
    $email = $_SESSION['email'];
    $pw=$_POST['password'];


    $sql = "UPDATE customer SET password='$pw' WHERE email='$email'";
    $result = $conn->query($sql);
    $conn->close();
?>