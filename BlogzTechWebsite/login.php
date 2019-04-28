<?php
    require_once("connect.php");
    include("config.php");
    
    $username = $_POST['username'];
    $password = $_POST['password'];


    $username = stripcslashes($username);
    $password = stripcslashes($password);


    $result = mysqli_query($connection, "select * from users where username = '$username' and pass = '$password'") or die("Failed to query database".mysqli_error());
    $row = mysqli_fetch_array($result);

    if($row['username'] == $username && $row['pass'] == $password){
        echo "Login Success";
    }
 

?>