<!DOCTYPE html>
<html>
<head>
<title>Payment Details</title>
<link rel="stylesheet" type="text/css" href="../css/main.css">
<link rel="stylesheet" type="text/css" href="../CSS/PaymentDetails.css" >
<link rel="stylesheet" href="../css/signedInUser.css">  
</head>
<body>

<div class="topBar">
            <div style="padding-left: 20px;padding-top:30px;">
                <img src="../img/cart.png" height="100" width="100">
            </div>
            <div class="searchBar">
                <div></div>
                <div class="searchBarRow" style="text-align: center;align-items: center;">
                    <div style="text-align: center;">
                        <input style="height:40px;" type="text" size="150">
                    </div>
                    <div>
                        <button class="searchButton"><img src="../img/search.png" height="30" width="30"></button>
                    </div>
                </div>
            </div>
            <div style="align-items: center;align-content: center; text-align: center;padding-top: 35px;">
                <form action="../php/logout.php"><button type="submit">SignOut</button></form>
            </div>
        </div>
<br>

<h1>Payment Details</h1>

<br>

<div class="PaymentDetails" id="tbl" style="border-style:groove; border-color:DarkBlue;">
<table border="1" style width="100%">
<th>User ID</th>
<th>Order No</th>
<th>Item No</th>
<th>Quantity</th>
<th>Payment</th>

<?php
  include "../php/config.php";

  $getOrderDetails = "SELECT * FROM orders";
  $getOrderDetailsResult = $conn->query($getOrderDetails);
  while($row = mysqli_fetch_array($getOrderDetailsResult)) {
    $getItemDetails = "SELECT * FROM orderitem WHERE OID=".$row['OID']."";
    $getItemDetailsResult = $conn->query($getItemDetails);
    while($item = mysqli_fetch_array($getItemDetailsResult)) {
      echo "<tr>
              <td>".$row['CID']."</td>
              <td>".$row['OID']."</td>
              <td>".$item['Item_number']."</td>
              <td>".$item['Quantity']."</td>
              <td>".$row['TotalPrice']."</td>
            </tr>";
    }
  }
?>

</table></div>

<br>

<a href="./PaymentHandling.php"><button class="button3" style="background-color:white;"><b>BACK</b></button></a>

<br><br>
<hr>

<footer style="background-color:#4885ED;"><center>

<div class="bottomBar">
	<div style="text-align: center;justify-content: center;align-content: center;align-items: center;">
		<br><br>
       
        <a href="faq.html">FAQ</a>&nbsp;|&nbsp;
        <a href="contact.html">Contact Us</a>&nbsp;|&nbsp;
        <a href="privacy.html">Privacy Policy</a>&nbsp;|&nbsp;  
        <a href="help.html">Help</a>&nbsp;|&nbsp;
        <a href="about.html">About</a>
        <div>
	
<br>
	
<div>   
   <img src="../Img/facebook.png" height="50px" width="50px">&nbsp;&nbsp;&nbsp;&nbsp;
   <img src="../Img/twitter.png" height="50px" width="50px">&nbsp;&nbsp;&nbsp;&nbsp
   <img src="../img/insta.png" height="50px" width="50px">&nbsp;&nbsp;&nbsp;&nbsp;
</div>                    

<br>

</center></footer>
</body>
</html>

