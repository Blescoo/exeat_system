<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="school.css">
</head>
<body>
    

  

<div class="menu">
    
    <ul>
       

        <li> <a href="frontpage.html"> Home</a>  </li>
        


    </ul>




</div>


<?php
require('db.php');
session_start();
if(isset($_POST['matricno'])){
    $matricno = stripslashes($_REQUEST['matricno']);
    $matricno = mysqli_real_escape_string($con, $matricno);
    $surname = stripslashes($_REQUEST['password']);
    $surname = mysqli_real_escape_string($con, $surname);
    $query = "SELECT * FROM `user` WHERE matricno='$matricno' AND surname='$surname'";
    $result = mysqli_query($con,$query) or die(mysqli_error());
    $rows = mysqli_num_rows($result);
    if($rows==1){
        $_SESSION['matricno'] = $username;
        header("location: index.php");
    }else{
        echo "<div class='in'>
    <h3>Username/password is incorrect.</h3>
    <br/>";
        }
        }else{

        }



?>


    <div class="in">
        <form action="" method="post">

            <img src="img/crwlogo.png" alt="stew" height="100px">
            <h3>STUDENT  &nbsp; LOGIN</h3>
            <input type="number" name="matricno" placeholder="Matric number"> <br><br>
            <input type="password" name="password" placeholder="password"><br><br>
            <div class="gin">
            <input type="submit" name="Log  In" value="log in"><br><br>
        </div>
            <label>forget password?</label><br><br>
        </form>
    </div>

</body>
</html>