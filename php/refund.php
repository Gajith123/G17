<?php
    include "config.php";

    $oid=$_POST['oid'];

    $removeData = "DELETE FROM  Orders where OID=".$oid."";
    $removeDataResult = $conn->query($removeData);

    $removeorder = "DELETE FROM  orderitem where OID=".$oid."";
    $removeorderResult = $conn->query($removeorder);

    $removeAssignedDelivery = "DELETE FROM  assigneddelivery where OID=".$oid."";
    $removeDataResult = $conn->query($removeAssignedDelivery);

    echo "<script>alert('Done')</script>";
    header('Location: ../html/refundmoney.php');
?>