<!DOCTYPE html>
<html>
<head>
<title>Refund Money</title>
<link rel="stylesheet" type="text/css" href="../CSS/RefundMoney.css" >

</head>
<body>

<div class="header">
  <div style="padding-left: 20px;padding-top:20px;">
    <img class="logo" src="../img/cart.png" width="100px" height="100px">
    <div class="search-container">
    <form>
      <input type="text" name="search">
      <button type="submit"><img src="../img/search.png" width="20px" height="20px"></button>
    </form>
    </div>
  </div>
  <div>
	<form action="../php/logout.php"><button type="submit" class="button1">SignOut</button></form>
  </div>
</div>  

<br>

<h1>Cancelled Orders</h1>

<br>

<div class="CancelledOrders" id="tbl" style="border-style:groove; border-color:DarkBlue;">
<table border="1" style width="100%">
	<tr>
		<th>Order No</th>
		<th>Payment</th>
		<th>Refund Money</th>
	</tr>
  <?php
    include "../php/config.php";

    $getOrders = "SELECT * FROM orders";
    $getOrdersResult = $conn->query($getOrders);

    while($row = mysqli_fetch_array($getOrdersResult)) {
      if($row['Status']=='cancelled'){
          echo "<tr>
                  <td>".$row['OID']."</td>
                  <td>".$row['TotalPrice']."</td>
                  <td style='text-align:center'>
                    <form action='../php/refund.php' method='post'>
                      <input type='number' name='oid' value='".$row['OID']."' style='display:none'> <br>
                      <button type='submit'>Refund Money</button>
                    </form>
                  </td>
                </tr>";
      }
    }
	?>
</table></div>

<br>
<button class="button3" style="background-color:white;"><a href="PaymentHandling.html"><b>BACK</b></a></button>

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
   <img src="../img/facebook.png" height="50px" width="50px">&nbsp;&nbsp;&nbsp;&nbsp;
   <img src="../img/twitter.png" height="50px" width="50px">&nbsp;&nbsp;&nbsp;&nbsp
   <img src="../img/insta.png" height="50px" width="50px">&nbsp;&nbsp;&nbsp;&nbsp;
</div>

<br>

</center></footer>
</body>
</html>
