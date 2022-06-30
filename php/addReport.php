<?php

    session_start();
    include "../php/config.php";

    $cid=$_SESSION['CID'];
    $topic = $_POST['topic'];
    $description =$_POST['complaint'];


    
    $sql = "INSERT INTO feedback (FID,Topic,Description,CID) 
    VALUES ('','$topic','$description',$cid)";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Added")</script>'; 
        header('Location: ../html/customeraccount.php');
      } else {
        echo "Error updating record: " . $conn->error;
      }
    $conn->close();
?>