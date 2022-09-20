
<?php
error_reporting(0);
require('db.php');
session_start();
if(isset($_POST['username'])){
    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($con,$username);
    $surname = stripslashes($_REQUEST['surname']);
    $surname = mysqli_real_escape_string($con,$surname);
    $query = "SELECT * FROM `users` WHERE username='$username and $surname'".md5($surname)."'";
    $result = mysqli_query($con,$query) or die(mysqli_error());
    $rows = mysqli_num_rows($result);
    if($rows==1){
        $_SESSION['username'] = $username;
        header("location: dashboard.php");
    }else{
       echo "username/surname is incorrect.";
    }
}




?>