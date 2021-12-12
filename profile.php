<?php
session_start();
require "database_connections.php";

$userID = $_GET['id'];
$sql = "SELECT *  FROM users where id = '$userID'";
$result3 = mysqli_query($connect,$sql);

if (mysqli_num_rows($result3) > 0){
    // output data of each row
    while($row = mysqli_fetch_array($result3)){

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CSS User Profile Card</title>
    <link rel="stylesheet" href="style4.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>

<body>
    <form action="userAction.php" method="post">
    <div class="wrapper">
        <div class="left">
            <img src="https://i.imgur.com/cMy8V5j.png" alt="user" width="100">
            <h4><?=$row['firstname']?></h4>
        </div>
        <div class="right">
            <div class="info">
                <h3>PROFILE</h3>
                <div class="info_data">
                    <div class="data">
                        <h4>Name</h4>
                        <p><?=$row['firstname'].' '.$row['lastname'];?></p>
                    </div>
                    <div class="info_data">
                        <div class="data">
                            <h4>Contact</h4>
                            <input value="<?=$row['contact'];?>" name="contact" style="margin-bottom: 10px; width: 200px;">
                        </div>
                        <div class="info_data">
                            <div class="data">
                                <h4>Email</h4>
                                <input value="<?=$row['email'];?>" name="email" style="margin-bottom: 10px; width: 200px;">
                            </div>
                            <div class="info_data">
                                <div class="data">
                                    <h4>Address</h4>
                                    <input value="<?=$row['address']; }
                                }?>" name="address" style="margin-bottom: 10px; width: 200px;">
                                   </p>
                                </div>
                                <button class="btn" type="submit" name="update"><i class="fa fa-bars"></i> Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</body>
</html>

