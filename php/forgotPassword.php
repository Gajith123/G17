<?php

    include "../php/config.php";

    $email = $_POST['email'];
    $nic = $_POST['nic'];
    $telno= $_POST['telno'];

    $checkCustomer = "SELECT * FROM customer WHERE email='$email' and NIC='$nic' and phonenumber='$telno'";
    $checkSeller = "SELECT * FROM seller WHERE email='$email' and NIC='$nic' and phonenumber='$telno'";
    $checkCustomerResult = $conn->query($checkCustomer);
    $checkSellerResult = $conn->query($checkSeller);

    if((mysqli_num_rows($checkCustomerResult)==1) || (mysqli_num_rows($checkSellerResult)==1)){
        session_start();
        $_SESSION['email']=$email;
        header('Location: ../html/forgot_password2.html');
    }
    else{
        echo "<script>alert('Incorrect Details');</script>" ;
    }
    $conn->close();
?>
