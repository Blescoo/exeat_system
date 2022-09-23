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

if(isset($_POST['matricno'])){
    $matricno = stripslashes($_REQUEST['matricno']);

   
    $matricno = mysqli_real_escape_string($con, $matricno);
    $surname = stripslashes($_REQUEST['password']);
    
    $surname = mysqli_real_escape_string($con, $surname);
    
    $query = "SELECT * FROM `student` WHERE matric_no='$matricno' AND surname='$surname'";
    //$result = mysqli_query($con,$query) or die(mysqli_error());
    $result = mysqli_query($con, $query) or die (mysqli_error($con)); 
    $rows = mysqli_num_rows($result);
    
    if($rows==1){
        while ($rows = $result->fetch_assoc()) {
            $id =  $rows['id'];
            $surnamee = $rows['surname'];

            $dept =  $rows['department'];
            $matric =  $rows['matric_no'];
            $othername =  $rows['other_names'];
            $roomno =  $rows['room_no'];
            $blockno =  $rows['block_no'];
            
            }
       
        $_SESSION["userid"] = $id;
        $_SESSION["surnamee"] = $surnamee;
        $_SESSION["dept"] = $dept;
        $_SESSION["matric"] = $matric;
        $_SESSION["othername"] = $othername;
        $_SESSION["fullname"] =  $surnamee . ' ' .  $othername;
        $_SESSION["roomno"] = $roomno;
        $_SESSION["blockno"] = $blockno;
        
        header("location: Dashboard");
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
            <h3>STUDENT  &nbsp; LOGIN</h3>
            <input type="number" name="matricno" placeholder="Matric number"> <br><br>
            <input type="password" name="password" placeholder="password"><br><br>
            <div class="gin">
            <button type="submit" class="btn btn-primary" value="log in">Log in </button><br><br>
        </div>
            <label>forget password?</label><br><br>
        </form>
    </div>

</body>
</html>