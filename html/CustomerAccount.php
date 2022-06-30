<!DOCTYPE html> 
<html>
    <?php
        session_start();
    ?>
    <head>
        <title>Customer Account</title>
        <link rel="stylesheet" type="text/css" href="../css/main.css">
        <link rel="stylesheet" type="text/css" href="../css/signedInUser.css">   
        <link rel="stylesheet" type="text/css" href="../css/customer.css">      
        <link rel="stylesheet" href="../css/table.css">
    </head>
    <body>
    <div class="topBar">
            <div style="padding-left: 20px;padding-top:30px;">
                <a href="./home.html"><img src="../img/cart.png" height="100" width="100"></a>
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
            <div id="logOutButtonContainer" style="align-items: center;align-content: center; text-align: center;padding-top: 35px;display:none;">
                <span style="font-weight: bolder;font-size: 20px;">Welcome Back,</span><br>
                <span id="username">[username]</span><br><br>
                <a href="./customerAccount.php"><button>My Account</button></a>&nbsp;&nbsp;
                <form action="../php/logout.php"><button type="submit">SignOut</button></form>
            </div>
    </div>
        <div class="main">
            <div class="covermain">
                <img src="../img/cover2.jpg" class="cover">
                <img src="../img/logo.png" height="100" width="100" class="propic">
                <div class="right">
                    <button><a href="edit_account.php?user=customer">Edit account</a></button>
                </div>
                <br>
                <p><?php echo $_SESSION['username'] ?></p>
                <p><?php echo $_SESSION['email'] ?></p>
            </div><br>
            <h2>My Orders</h2>
            <table class="table" border ="1">
                <tr>
                    <td><b>Order Name</b></td>
                    <td><b>Order ID</b></td> 
                </tr>
                <?php
                    include "../php/config.php";

                    $customerDetails = "SELECT * FROM orders where CID='".$_SESSION['CID']."'";
                    $customerDetailsResult = $conn->query($customerDetails);
                    while($row = mysqli_fetch_array($customerDetailsResult)) {
                        $orderDetials = "SELECT * FROM item where Item_number=(SELECT Item_number from orderitem where OID=".$row['OID'].")";
                        $orderDetialsResult = $conn->query($orderDetials);
                        while($order = mysqli_fetch_array($orderDetialsResult)) {
                            echo "<tr>
                                    <td>".$order['Item_Name']."</td>
                                    <td>".$row['OID']."</td>
                                </tr>";
                        }
                    }
                ?>
            </table>
            <br>
            <h2>Added Feedbacks/Complaints</h2>
            <table border ="1">
                <tr>
                    <th>Topic</th>
                    <th>Description</th>
                    <th></th>
                </tr>
                <?php
                    include "../php/config.php";

                    $feedbackDetails = "SELECT * FROM feedback where CID='".$_SESSION['CID']."'";
                    $feedbackDetailsResult = $conn->query($feedbackDetails);
                    while($row = mysqli_fetch_array($feedbackDetailsResult)) {
                        echo "<form action='../php/deleteFeedback.php' method='post'>
                                <tr>
                                    <td>".$row['Topic']."</td>
                                    <td>".$row['Description']."</td>
                                    <td>
                                        <button type='submit' name='fid' value='".$row['FID']."'>Delete</button>
                                    </td>
                                </tr>
                            <form>";
                    }
                ?>
            </table>
        </div>
        <div class="bottomBar">
            <div class="footer">
                <br><br>
                <a href="report.php">Report</a>&nbsp;|&nbsp;
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
    <script type="text/javascript">
        var idr = '<?php echo isset($_SESSION['username']); ?>'; 
        var uname = '<?php echo $_SESSION['username']; ?>'; 
        console.log(idr);
         if(idr==1){
             document.getElementById("logOutButtonContainer").style.display="block";
             document.getElementById("username").innerHTML=uname;
         }
    </script>
</html>