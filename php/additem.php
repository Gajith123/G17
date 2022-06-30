<?php

    session_start();
    include "../php/config.php";

    $id=$_SESSION['SID'];
    $pname = $_POST['pname'];
    $description =$_POST['desc'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $discount = $_POST['discount'];
    $category = $_POST['category'];

    
    $sql = "INSERT INTO item (Item_number,SID,Item_Name,Description,Quantity,Unit_Price,Discount,Category) 
    VALUES ('','$id','$pname','$description',$quantity,$price,0,'$category')";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Added")</script>'; 
        header('Location: ../html/seller.php');
      } else {
        echo "Error updating record: " . $conn->error;
      }
    $conn->close();
?>