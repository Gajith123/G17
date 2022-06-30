<html>
    <head>
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../css/signedInUser.css">
        <link rel="stylesheet" href="../css/table.css">
    </head>
    <body>
    <div class="topBar">
            <div style="padding-left: 20px;padding-top:30px;">
                <a href="./home.html"><img src="../img/cart.png" height="100" width="100"></a>
            </div>
            <div class="searchBar">
                <div></div>
                <form action="search.php" method="post">
                    <div class="searchBarRow" style="text-align: center;align-items: center;">
                        <div style="text-align: center;">
                            <input style="height:40px;" type="text" name="search" size="150">
                        </div>
                        <div>
                            <button type="submit" class="searchButton"><img src="../img/search.png" height="30" width="30"></button>
                        </div>
                    </div>
                </form>
                <div></div>
            </div>
            <div id="logOutButtonContainer" style="align-items: center;align-content: center; text-align: center;padding-top: 35px;display:none;">
                <span style="font-weight: bolder;font-size: 20px;">Welcome Back,</span><br>
                <span id="username">[username]</span><br><br>
                <a href="./customerAccount.php"><button>My Account</button></a>&nbsp;&nbsp;
                <form action="../php/logout.php"><button type="submit">SignOut</button></form>
            </div>
            <div id="loginButtonContainer" class="searchBar" style="align-items: center;align-content: center; text-align: center;padding-top: 35px;">
                <div>
                    <a href="./login.html"><button>Login</button></a>
                </div>
                <div>
                    <a href="./commonregistration.html"><button>SignUp</button></a>
                </div>
            </div>
        </div>
        <div id="main" class="main">
            <br>
            <table border="1">
                <tr>
                    <th>Staff ID</th>
                    <th>User Name</th>
                    <th>NIC</th>
                    <th>Email</th>
                    <th>Phone number</th>
                    <th>Password</th>
                </tr>
                <?php
                    include "../php/config.php";

                    $getStaffData = "SELECT * FROM staff";
                    $getStaffDataResult = $conn->query($getStaffData);
                    while($row = mysqli_fetch_array($getStaffDataResult)) {
                        echo "<form action='../php/updatestaff.php' method='post'>
                                <tr>
                                    <td>".$row['Staff_ID']."</td>
                                    <td><input type='text' name='username' value='".$row['User_name']."'></td>
                                    <td><input type='text' name='nic' value='".$row['NIC']."'></td>
                                    <td><input type='text' name='email' value='".$row['Email']."'></td>
                                    <td><input type='text' name='number' value='".$row['Phone_number']."'></td>
                                    <td><input type='text' name='password' value='".$row['Password']."'></td>
                                    <td style='text-align: center'>
                                        <button type='submit'>Update User</button>
                                    </td>
                                </tr>
                                </form>";

                    }
                ?>
            </table>
            <br>
        </div>
        <div class="bottomBar">
            <div style="text-align: center;justify-content: center;align-content: center;align-items: center;">
                <br><br>
               
                <a class="link" href="faq.html">FAQ</a>&nbsp;|&nbsp;
                <a class="link" href="contact.html">Contact Us</a>&nbsp;|&nbsp;
                <a class="link" href="privacy.html">Privacy Policy</a>&nbsp;|&nbsp;
                <a class="link" href="help.html">Help</a>&nbsp;|&nbsp;
                <a class="link" href="about.html">About</a>
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
             document.getElementById("loginButtonContainer").style.display="none";
         }
    </script>
</html>