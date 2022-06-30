<?php

    include "../php/config.php";
    
    session_start();
    
    $userType = $_GET['user'];
    $email = $_SESSION['email'];
    $pw=$_POST['newpwd'];

    $checkForUser = "SELECT * FROM ".$userType." where email='$email'";
    $checkForUserResult = $conn->query($checkForUser);

    if(mysqli_num_rows($checkForUserResult)==1){
      while($row = mysqli_fetch_array($checkForUserResult)) {
        if($pw == $row['Password']){
          $sql = "UPDATE ".$userType." SET password='$pw' WHERE email='$email'";
          if ($conn->query($sql) === TRUE) {
            if($userType=='seller'){
              header('Location: ../html/seller.php');
            }else{
              header('Location: ../html/customeraccount.php'); 
            }
          } else {  
            echo "Error updating record: " . $conn->error;
          }
        }
        else{
          echo '<script>alert("Updated Failed! Passwords do not match!")</script>'; 
          header('Location: ../html/edit_account.php');
        }
      }
    }
    $conn->close();
?>


