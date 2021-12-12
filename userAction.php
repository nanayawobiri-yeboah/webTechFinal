<?php
require "database_connections.php";
session_start();


if (isset($_POST['update'])) {
    $id = $_SESSION['userID'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $email=$_POST['email'];
   
    $sql = "UPDATE `users` SET `contact`='$contact',`email`='$email',`address`='$address' WHERE `id` = '$id'";
	$result = mysqli_query($connect, $sql);

    if ($result) {
        header('location: home.php');
    } else {
        echo "failure";
    } 
}



if (isset($_GET['delete'])) {
    $id = $_SESSION['userID'];

    $sql = "delete from users where id='$id'";
	$result = mysqli_query($connect, $sql);
 
    if ($result) {
        header('location: index.php');
    } else {
        echo "failure";
    } 
}



?>