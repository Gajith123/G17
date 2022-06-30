<html>
    <head>
        <title>Delivery staff</title>
        <link rel="stylesheet" type="text/css" href="../css/table.css">
        <link rel="stylesheet" type="text/css" href="../css/main.css">
        <link rel="stylesheet" type="text/css" href="../css/signedInUser.css">
        
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
              
                <a href="Shippingdetails.php"><button>Shipping</button></a>
                <br><br>
                <a href="Orderdetails.php" ><button>Order</button></a>
                <br><br>
                <form action="../php/logout.php"><button type="submit">SignOut</button></form>
            </div>
        </div>
        <a href="deliveryhandling.html" ><button>Back</button></a>
        <center>
        <div class="main">
            <h1>Delivery staff</h1>
            <br>
          
			
		<table id="staff" border="1" >
				
	
		<tr>
            <th>ID No</th>
            <th>Name</th> 
            <th>Address</th> 
            <th>Vehical No.</th>
            <th></th> 
        </tr>
        <?php
            include "../php/config.php";

            $sql = "SELECT * FROM deliveryperson";
            $result = $conn->query($sql);
            while($row = mysqli_fetch_array($result)) {
                    echo "<tr>
                            <td>".$row['DP_ID']."</td>
                            <td>".$row['User_name']."</td>
                            <td>".$row['Location']."</td>
                            <td>".$row['Vehical_No']."</td>
                            <td>
                                <form action='../php/deleteDeliver.php' method='post'>
                                    <button type='submit' name='id' value='".$row['DP_ID']."'>Delete User</button>
                                </form>
                            </td>
                        <tr>";
                }
        ?>
			</table>		
            </div>
            </center>
        </div>
        <br><br><br>
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
                    <img src="../img/facebook.png" height="50px" width="50px">&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="../img/twitter.png" height="50px" width="50px">&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="../img/insta.png" height="50px" width="50px">&nbsp;&nbsp;&nbsp;&nbsp;
                   
                </div>
            </div>
        </div>
    </body>
    <script>
        function deleteUser(id){
            var deleteUser=`
                <?php 
                    include "../php/config.php";
                    $sql = "DELETE FROM deliveryperson WHERE DP_ID=`+id+`";
                    $result = $conn->query($sql);
                    if ($conn->query($sql) === TRUE) {
                        echo "<script>alert('User Removed Successfully');</script>";
                      } else {
                        echo "Error deleting record: " . $conn->error;
                      }
                    $conn->close();
                ?>`;
        }
    </script>
</html>