<?php
    include "../php/config.php";

    $oid=$_POST['oid'];
    $status = $_POST['Orderstatus'];


    $sql = "UPDATE orders SET status='$status' WHERE OID='$oid'";
    $result = $conn->query($sql);
    $conn->close();
    header('Location: ../html/Orderdetails.php');
?>