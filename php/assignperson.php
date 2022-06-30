<?php
    include "config.php";

    $id=$_POST['personid'];
    $oid=$_POST['oid'];

    $sql="INSERT INTO assigneddelivery(DP_ID,OID) VALUES ($id,$oid)";

    $result = $conn->query($sql);
    echo $conn->error;
    $conn->close();

    header('Location: ../html/Orderdetails.php');
?>
