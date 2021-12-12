<?php
session_start();
require("database_connections.php");



if (isset($_POST['reg_user'])) {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $contact = $_POST["contact"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $password = $_POST["password_1"];

    $sql = "INSERT INTO users(`firstname`, `lastname`, `contact`, `email`, `address`, `password`) VALUES ('$firstname','$lastname','$contact','$email','$address','$password')";

    $result = mysqli_query($connect, $sql);

    if ($result) {
        header("Location: login.php");
        echo "New record added";
    }
}



if(isset($_POST['login_user'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $sql="select * from users where email='$email'AND password='$password'";
    $result=mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($result);
    
    if(mysqli_num_rows($result) > 0){
        $_SESSION['userID'] = $row['id'];
        $_SESSION['firstname'] = $row['firstname'];
        $_SESSION['email'] = $row['email'];
        header("Location: home.php");
    } else{
        echo "Incorrect Login Details";
    }
}
    






?>