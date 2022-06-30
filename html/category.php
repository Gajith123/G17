<html>
    <head>
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../css/home.css">
        <link rel="stylesheet" href="../css/slideshow.css">
    </head>
    <body>
        <div class="topBar">
            <div style="padding-left: 20px;padding-top:30px;">
                <a href="./home.php"><img src="../img/cart.png" height="100" width="100"></a>
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
            <br>
            <div id="slideShow">
                <div class="slideshow-container">

                    <div class="mySlides fade">
                        <img src="../img/image0.webp" style="width:100%;height: 300px;" >
                    </div>
                    
                    <div class="mySlides fade">
                        <img src="../img/image1.webp" style="width:100%;height: 300px;">
                    </div>
                    
                    <div class="mySlides fade">
                        <img src="../img/image2.webp" style="width:100%;height: 300px;">
                    </div>

                    <div class="mySlides fade">
                        <img src="../img/image3.webp" style="width:100%;height: 300px;">
                    </div>

                    <div class="mySlides fade">
                        <img src="../img/image4.webp" style="width:100%;height: 300px;">
                    </div>

                    <div class="mySlides fade">
                        <img src="../img/image5.webp" style="width:100%;height: 300px;">
                    </div>

                </div>
            </div>
            <br>
            <div id="items">
                <?php
                    include "../php/config.php";

                    $category = $_GET['category'];

                    $sql = "SELECT * FROM item";
                    $result = $conn->query($sql);
                    while($row = mysqli_fetch_array($result)) {
                        if($row['Category']== $category){
                            echo "<div class='category'> 
                                    <br>
                                    <a href='item.php?itemID=".$row['Item_number']."'>
                                    <img src='../img/greySquare.jpg' height='150' width='150'><br><br>
                                    ".$row['Item_Name'].
                                    "</a>
                                    </div>";
                        }
                    }
                ?>
            </div>
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
    <script src="../js/slideshow.js"></script>
</html>