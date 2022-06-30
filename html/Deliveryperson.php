<?php
    session_start();
?>
<html>
    <head>
        <title>Delivery person</title>
        <link rel="stylesheet" type="text/css" href="../css/main.css">
        <link rel="stylesheet" type="text/css" href="../css/profile.css">   
        <link rel="stylesheet" type="text/css" href="../css/button.css">    
        <link rel="stylesheet" href="../css/signedInUser.css">
        <link rel="stylesheet" href="../css/table.css">
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
                <div></div>
            </div>
            <div style="align-items: center;align-content: center; text-align: center;padding-top: 35px;">
                <br><br><br>
                
                <form action="../php/logout.php"><button type="submit">SignOut</button></form>
            </div>
        </div>
        <div class="main">
		
		
            <div style="position: relative; left: 0; top: 0;text-align: center;">
                <img src="../img/cover2.jpg" class="cover">
                <img src="../img/logo.png" height="100" width="100" class="propic">
                    <br><br>
                    <p>Delivery person</p>
                    <p><?php echo $_SESSION['username']; ?></p>
                </div>   
        <div class="main">
            <table border=1 >
				
	
                <tr>
                        <th>Order No</th>
                        <th>Location</th> 
                         
                </tr>
                <?php

                    include "../php/config.php";

                    $sql = "SELECT * FROM deliveryperson where email='".$_SESSION['email']."'";

                    $result = $conn->query($sql);
                    while($row = mysqli_fetch_array($result)){
                        $getOrderId = "SELECT * FROM assigneddelivery where DP_ID=".$row['DP_ID']."";
                        $getOrderIdResult = $conn->query($getOrderId);
                        while($oid =mysqli_fetch_array($getOrderIdResult)){
                            $getLocation = "SELECT * FROM customer where CID=(SELECT CID FROM orders where OID=".$oid['OID'].")";
                            $getLocationResult = $conn->query($getLocation);
                            while($location =mysqli_fetch_array($getLocationResult)){
                                echo "<tr>
                                        <td>".$oid['OID']."</td>
                                        <td>".$location['City']."</td>
                                    </tr>";
                            }
                        }
                    }
                ?>
                </table>	
                <br><br>   	
            <br>
            </div>
        </div>
        <div class="bottomBar">
            <div class="footer">
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
</html>