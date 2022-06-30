<?php
    include "../php/config.php";

    $fname = $_POST['fname'];
    $lname =$_POST['lname'];
    $nic = $_POST['nic'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $pw=$_POST['pwd'];
    $type=$_POST['type'];
    
    $sql = "INSERT INTO staff (Staff_ID,User_name,NIC,Email,Phone_number,Password,Type) VALUES ('','$fname $lname','$nic','$email',$number,'$pw','$type')";
    $result = $conn->query($sql);

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Added")</script>'; 
      } else {
        echo "Error updating record: " . $conn->error;
      }
    $conn->close();
?>