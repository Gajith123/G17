<?php

    include "../php/config.php";

    $username = $_POST['username'];
    $nic = $_POST['nic'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $pwd = $_POST['password'];

    $sql = "UPDATE staff SET User_name='$username',nic='$nic',email='$email',password='$pwd' WHERE email='$email'";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Updated")</script>';
        header('Location: ../html/updateuserdetails.php'); 
      } else {
        echo "Error updating record: " . $conn->error;
      }
    $conn->close();
?>