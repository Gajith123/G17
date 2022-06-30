<?php
    include "config.php";

    session_start();    

    $fname=$_SESSION['Regfname'];
    $lname=$_SESSION['Reglname'];
    $nic=$_SESSION['Regnic'];
    $email=$_SESSION['Regemail'];
    $phone=$_SESSION['Regnumber'];
    $pw=$_SESSION['Regpw'];

    $address1 = $_SESSION['address1'];
    $address2 = $_SESSION['address2'];
    $city = $_SESSION['city'];

    $cardType = $_POST['cardtype'];
    $cardNumber = $_POST['cardno'];
    $cardMonth = $_POST['expMonth'];
    $cardYear = $_POST['expYear'];
    $cvv = $_POST['cvv'];

    $sql = "INSERT INTO customer (CID,firstname,lastname,NIC,Email,Password,Phonenumber,Address,City,Cardtype,Cardno,Expirydate,CVV) 
    VALUES ('','$fname', '$lname','$nic','$email','$pw','$phone','$address1 $address2','$city','$cardType','$cardNumber','$cardYear-$cardMonth-01','$cvv')";

    $result = $conn->query($sql);
    echo $conn->error;
    $conn->close();

    header('Location: ../html/login.html');
?>