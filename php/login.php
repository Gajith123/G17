<?php

    session_start();
    include "../php/config.php";

    $email = $_POST['email'];
    $pwd=$_POST['password'];


    $searchUser = "SELECT * FROM customer WHERE email='".$email."'";
    $searchUserResult = $conn->query($searchUser);

    $searchSeller = "SELECT * FROM seller WHERE email='".$email."'";
    $searchSellerResult = $conn->query($searchSeller);

    if(mysqli_num_rows($searchUserResult)==1){
        while($row = mysqli_fetch_array($searchUserResult)) {
            if($row['Password']==$pwd){
                $_SESSION['username']=$row['firstname'];
                $_SESSION['email']=$email;
                $_SESSION['CID']=$row['CID'];
                header('Location: ../html/home.php');
            }
            else{
                echo('<script>alert("Incorrect Credentials")</script>');
            }
        }
    }else if(mysqli_num_rows($searchSellerResult)==1){
        while($row = mysqli_fetch_array($searchSellerResult)) {
            if($row['Password']==$pwd){
                $_SESSION['username']=$row['FullName'];
                $_SESSION['email']=$email;
                $_SESSION['SID']=$row['SID'];
                header('Location: ../html/seller.php');
            }
            else{
                echo('<script>alert("Incorrect Credentials")</script>');
            }
        }
    }
    else{
        $searchStaff = "SELECT * FROM staff WHERE email='".$email."'";
        $searchStaffResult = $conn->query($searchStaff);

        if(mysqli_num_rows($searchStaffResult)==1){
            while($row = mysqli_fetch_array($searchStaffResult)) {
                if($row['Password']==$pwd){
                    if($row['Type']=='admin'){
    
                        $_SESSION['username']=$row['User_name'];
                        header('Location: ../html/adminpanel.php');
                    }
                    else if($row['Type']=='DeliveryM'){
    
                        $_SESSION['username']=$row['User_name'];
                        header('Location: ../html/deliveryhandling.php');
                    }
                    else if($row['Type']=='PaymentH'){
    
                        $_SESSION['username']=$row['User_name'];
                        $_SESSION['email']=$email;
                        header('Location: ../html/paymenthandling.php');
                    }
                    else if($row['Type']=='DeliveryP'){
    
                        $_SESSION['username']=$row['User_name'];
                        $_SESSION['email']=$email;
                        header('Location: ../html/deliveryperson.php');
                    }
                }else{
                    echo '<script>alert("Incorrect Credentials")</script>';
                    header('Location: ../html/login.html');
                }
            }
        }else{
            echo('<script>alert("Incorrect Credentials")</script>');
            header('Location: ../html/login.html');
        }
    }
    $conn->close();
?>


