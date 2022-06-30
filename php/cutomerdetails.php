<?php
    session_start();
    $_SESSION['address1'] = $_POST['address1'];
    $_SESSION['address2'] =$_POST['address2'];
    $_SESSION['city'] = $_POST['city'];
    $_SESSION['state'] = $_POST['state'];
    $_SESSION['telno'] = $_POST['telno'];

    header('Location: ../html/customerregistration2.html');
?>