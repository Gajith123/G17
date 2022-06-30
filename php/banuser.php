<?php
    
  include "../php/config.php";

  $type=$_GET['type'];

  if($type=='customer'){
    $column = 'CID';
  }else if($type=='seller'){
    $column = 'SID';
  }else if($type=='staff'){
    $column = 'Staff_ID';
  }
  
  $id=$_POST['id'];

  $sql = "DELETE FROM $type WHERE $column='".$id."'";
  $result = $conn->query($sql);
  
  if ($conn->query($sql) === TRUE) {
      echo "Record deleted successfully";
    } else {
      echo "Error deleting record: " . $conn->error;
    }
    
    $conn->close();
?>


