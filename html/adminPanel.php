<html>
    <head>
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../css/adminPannel.css">
        <link rel="stylesheet" href="../css/table.css">
    </head>
    <body>
        <div>
            <span style="font-size: 30px;">Admin Panel</span>
            <div style="float: right;">
                <a href="addstaff.html"><button>Add another employee</button></a>
                <a href="feedback.php"><button>View Complaints</button></a>
                <a href="updateuserdetails.php"><button>Update User Details</button></a>
                <form action="../php/logout.php"><button type="submit">SignOut</button></form>
            </div>
        </div>
        <br>
        <div class="main">
            <br>
            <br>
            <div>
                <center>
                    <h3>Users</h3>
                    <table id="table" border="1" width="100%">
                        <tr>
                            <td>
                                User Detials
                            </td>
                            <td>
                                Action
                            </td>
                        </tr>
                        <?php
                            include "../php/config.php";
                            $sql = "SELECT * FROM customer";
                            $result = $conn->query($sql);
                            while($row = mysqli_fetch_array($result)) {
                                echo "<tr>
                                        <td>
                                            User ID: ".$row['CID']."<br>
                                            Name: ".$row['firstname']." ".$row['lastname']."<br>
                                            Email: ".$row['Email']."
                                        </td>
                                        <td style='text-align: center'>
                                            <form action='../php/banuser.php?type=customer' method='post'>
                                                <button type='submit' name='id' value='".$row['CID']."'>Ban User</button>
                                            </form>
                                        </td>
                                    </tr>";
                            }
                        ?>
                    </table>
                    <h3>Sellers</h3>
                    <table id="table" border="1" width="100%">
                        <tr>
                            <td>
                                Seller Detials
                            </td>
                            <td>
                                Action
                            </td>
                        </tr>
                        <?php
                            include "../php/config.php";
                            $sql = "SELECT * FROM seller";
                            $result = $conn->query($sql);
                            while($row = mysqli_fetch_array($result)) {
                                echo "<tr>
                                        <td>
                                            Seller ID: ".$row['SID']."<br>
                                            FullName: ".$row['FullName']."<br>
                                            Email: ".$row['Email']."
                                        </td>
                                        <td style='text-align: center'>
                                            <form action='../php/banuser.php?type=seller' method='post'>
                                                <button type='submit' name='id' value='".$row['SID']."'>Ban User</button>
                                            </form>
                                        </td>
                                    </tr>";
                            }
                        ?>
                    </table>
                    <h3>Staff</h3>
                    <table id="table" border="1" width="100%">
                        <tr>
                            <td>
                                Staff Detials
                            </td>
                            <td>
                                Action
                            </td>
                        </tr>
                        <?php
                            include "../php/config.php";
                            $sql = "SELECT * FROM staff";
                            $result = $conn->query($sql);
                            while($row = mysqli_fetch_array($result)) {
                                echo "<tr>
                                        <td>
                                            Staff ID: ".$row['Staff_ID']."<br>
                                            FullName: ".$row['User_name']."<br>
                                            Email: ".$row['Email']."<br>
                                            Type: ".$row['Type']."
                                        </td>
                                        <td style='text-align: center'>
                                            <form action='../php/banuser.php?type=staff' method='post'>
                                                <button type='submit' name='id' value='".$row['Staff_ID']."'>Ban User</button>
                                            </form>
                                        </td>
                                    </tr>";
                            }
                        ?>
                    </table>
                </center>
            </div>
        </div>
        <br>
        <br>
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
</html>