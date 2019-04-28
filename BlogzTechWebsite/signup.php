<?php
session_start();

$username = "";
$email = "";

$errors = array(); 

$db = mysqli_connect('localhost', 'root', '', 'BlogzTech') or die("could not connect to database");

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];


if(empty($username)) {array_push($errors, "Username is required");}
if(empty($email)) {array_push($errors, "Email is required");}
if(empty($password)) {array_push($errors, "Password is required");}
if($password != $password2) {array_push($errors, "Password is not matching");}



$user_check_query = "SELECT * FROM users WHERE username = '$username' or email = '$email' LIMIT 1";
$result = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($result);

if($user){
    if($user['username'] == $username){array_push($errors, "Username already exists");}
    if($user['email'] == $email) {array_push($errors, "Email already assigned to another user");}
}

if(count($errors) == 0){
    $query = "INSERT INTO users (username, email , pass) VALUES ('$username', '$email', '$password')";
    mysqli_query($db, $query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are Registered";
    
    header('location: Home_Page.html');
}

?>