<?php
    include "../php/config.php";

    $id = $_POST['itemid'];
    $description = $_POST['description'];
    $quantity = $_POST['quantity'];
    $unitprice = $_POST['unitprice'];
    $discount = $_POST['discount'];


    if($_POST['action']=='update'){
        $sql = "UPDATE item SET Description='$description',Quantity='$quantity',Unit_Price='$unitprice',Discount='$discount' WHERE item_number='$id'";
    }
    else if($_POST['action']=='remove'){
        $sql = "DELETE FROM item WHERE Item_number='$id'";
    }

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Done!")</script>'; 
        header('Location: ../html/seller.php');
      } else {
        echo "Error updating record: " . $conn->error;
      }
    $conn->close();
?>