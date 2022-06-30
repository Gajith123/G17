<?php
    session_start();
    $_SESSION['Regfname'] = $_POST['fname'];
    $_SESSION['Reglname'] =$_POST['lname'];
    $_SESSION['Regnic'] = $_POST['nic'];
    $_SESSION['Regemail'] = $_POST['email'];
    $_SESSION['Regnumber'] = $_POST['pno'];
    $_SESSION['Regpw']=$_POST['pwd'];

    if($_POST['action']=='seller'){
        header('Location: ../html/sellerregistration.html');
    }
    else if($_POST['action']=='customer'){
        header('Location: ../html/customerregistration.html');
    }
    else{
        echo "error occured!";
    }
?>