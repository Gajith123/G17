<?php
    session_start();

    include "../php/config.php";

    $itemId = $_POST['itemD'];
    $quantity = $_POST['qunatity'];
    $unitprice = $_POST['price'];
    $totalPrice = $unitprice*$quantity;

    $cid = $_SESSION['CID'];

    $addOrder = "INSERT INTO orders(OID,CID,TotalPrice,Status) VALUES ('','$cid','$totalPrice','Active')";
    $addOrderResult = $conn->query($addOrder);
    $oid= $conn->insert_id;

    $addOrderItem = "INSERT INTO orderitem(id,Item_number,OID,Quantity) VALUES ('','$itemId','$oid','$quantity')";
    $addOrderItemResult = $conn->query($addOrderItem);

    //echo "<script>alert('Purchased Succesfully')</script>";
    header('Location: ../html/home.php');
?>