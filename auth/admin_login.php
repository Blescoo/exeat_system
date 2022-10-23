<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student|Login</title>
    <link rel="stylesheet" href="../school.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
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
       

        header("location: admin_page.php");
}
    else{
        echo ( '<script>alert(" Incorrect Matric No or Password ")</script>');
        }
        
        }else{

        }



?>



<div class="" align="center">

<div class="row jnn mt-5" >
    
        <form action="" method="POST">

            <img src="../img/crwlogo.png" alt="" height="100px">
            <h3>ADMIN   LOGIN</h3>
            
            <input type="text" name="username" class="form-control mt-4" placeholder="Username"> 
            <input type="password" name="password" class="form-control mt-4" placeholder="Password"> 
            <div class="">
            <button type="submit" class="btn btn-primary mt-5" value="log in">Log in </button><br><br>
        </div>
            <label>Forget password? </label>

        </form>
    
    </div>
    </div>
    
</body>
</html>