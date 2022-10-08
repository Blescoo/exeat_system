<?php



?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student|Login</title>
    <link rel="stylesheet" href="school.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
<div class="menu">
    <ul>
       
        <li> <a href="/exeat_system"> Home</a>  </li>
        


    </ul>




</div>


<?php

require('db.php');

session_start();
if(isset($_POST['username'])){
    $username = stripslashes($_REQUEST['username']);

   
    $username = mysqli_real_escape_string($con, $username);
    $password = stripslashes($_REQUEST['password']);
    
    $password = mysqli_real_escape_string($con, $password);
    
    $query = "SELECT * FROM `admin_user` WHERE username='$username' AND passwordd='$password'";
    //$result = mysqli_query($con,$query) or die(mysqli_error());
    $result = mysqli_query($con, $query) or die (mysqli_error($con)); 
    $rows = mysqli_num_rows($result);
    
    if($rows==1){
        while ($rows = $result->fetch_assoc()) {
            $id =  $rows['id'];
            $username = $rows['username'];
            $password =  $rows['passwordd'];
           
            
            }

            $_SESSION["admin"] = $username;
       
        // $_SESSION["userid"] = $id;
        // $_SESSION["surnamee"] = $surnamee;
        // $_SESSION["dept"] = $dept;
        // $_SESSION["matric"] = $matric;
        // $_SESSION["othername"] = $othername;
        // $_SESSION["fullname"] =  $surnamee . ' ' .  $othername;
        // $_SESSION["roomno"] = $roomno;
        // $_SESSION["blockno"] = $blockno;
        
        header("location: admin_page.php");
}
    else{
        echo ( '<script>alert(" Incorrect Matric No or Password ")</script>');
        }
        
        }else{

        }



?>


    <div class="in" align="center">
        <form action="" method="POST">

            <img src="img/crwlogo.png" alt="stew" height="100px">
            <h3>ADMIN  &nbsp; LOGIN</h3>
            <input type="text" name="username" placeholder="Username"> <br><br>
            <input type="password" name="password" placeholder="password"><br><br>
            <div class="gin">
            <button type="submit" class="btn btn-primary" value="log in">Log in </button><br><br>
        </div>
            <label>forget password?</label><br><br>
        </form>
    </div>
7
</body>
</html>