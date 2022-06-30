<?php
    include "config.php";

    $id=$_POST['id'];

    $removeData = "DELETE FROM  deliveryperson where DP_ID=".$id."";
    $removeDataResult = $conn->query($removeData);

    $removeorder = "DELETE FROM  staff where Email=(SELECT Email FROM deliveryperson where DP_ID=".$id.")";
    $removeorderResult = $conn->query($removeorder);

    $removeAssignedDelivery = "DELETE FROM  assigneddelivery where DP_ID=".$id."";
    $removeDataResult = $conn->query($removeAssignedDelivery);

    echo "<script>alert('Done')</script>";
    header('Location: ../html/Deliverystaff.php');
?>