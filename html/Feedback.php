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
            <br>
            <h2>Added Feedbacks/Complaints</h2>
            <table border ="1">
                <tr>
                    <th>Customer ID</th>
                    <th>Topic</th>
                    <th>Description</th>
                    <th></th>
                </tr>
                <?php
                    include "../php/config.php";

                    $feedbackDetails = "SELECT * FROM feedback";
                    $feedbackDetailsResult = $conn->query($feedbackDetails);
                    while($row = mysqli_fetch_array($feedbackDetailsResult)) {
                        echo "<tr>
                                <td>".$row['Topic']."</td>
                                <td>".$row['Description']."</td>
                                <td>
                                    <form action='../php/deleteFeedback.php?user=admin' method='post'>
                                        <button type='submit' name='fid' value='".$row['FID']."'>Delete</button>
                                    <form>
                                </td>
                            </tr>";
                    }
                ?>
            </table>
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