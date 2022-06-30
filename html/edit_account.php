<!DOCTYPE html> 
<html>
    <?php
        session_start();
    ?>
    <head>
        <title>Edit Account</title>
        <link rel="stylesheet" type="text/css" href="../css/main.css">
        <link rel="stylesheet" type="text/css" href="../css/signedInUser.css">
        <link rel="stylesheet" type="text/css" href="../css/customer.css">  
        <script src="../js/edit_account.js"></script>
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
        <div class="main">
            <div class="covermain">
                <img src="../img/cover2.jpg" class="cover">
                <img src="../img/logo.png" height="100" width="100" class="propic">
            </div><br><br>
            <br>
            <div>
                <?php
                    $userType= $_GET['user'];
                    $deleteButton='';
                    if($userType=='seller'){
                        $deleteButton='display:none;';
                    }
                    echo "<form action='../php/updateUser.php?user=".$userType."' method='POST'>
                        <label for='change_pwd'>Change Password</label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>

                        <fieldset id='pwdreset' style='border: none;'>
                            <label for='oldpwd'>Old Password :</label>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type='password' id='password' name='oldpwd' Required > </input> <br><br>

                            <label for='newpwd'>New password :</label>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type='password' id='newpwd' name='newpwd'  
                            title='Must contain at least one  number and one uppercase and lowercase letter, and at least 6 or more characters' Required
                            pattern='(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}'></input> <br><br>

                            <label for='reenterpwd'>Re-enter new password :</label>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type='password' id='newrpwd' name='reenterpwd' Required pattern='(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}'></input> 
                            <br><br>
                        </fieldset>
                        <button type='submit'>SUBMIT</button>
                    </form>
                    <br>"
                ?>
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