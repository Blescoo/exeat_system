<?php

session_start();
include '../db.php';








$user_id = $_SESSION["userid"];

//Getting the exeat id from the URL address bar
$exeat_id = $_GET['exeat_id'];



$sql2 = "SELECT 	exeat_id,	full_name, destination,	destination_address,	exeat_date,	date_of_depature,	arrival_date,	reason, statuss FROM `exeat`  WHERE exeat_id =  $exeat_id ";

$resultt = mysqli_query($con, $sql2);

if($resultt){

  while ($rowws = mysqli_fetch_assoc($resultt)) {
    // code...
  
    

   
    $full_name =  $rowws['full_name'];
   
    $status =  $rowws['statuss'];
 
    $destination =  $rowws['destination'];

   
    $dest_address =  $rowws['destination_address'];
    $date_of_depature =  $rowws['date_of_depature'];
    $reason =  $rowws['reason'];
    $arival_date =  $rowws['arrival_date'];
    
    $department = $_SESSION["dept"];

    

  }

  
}



?>

<?php 
        
  require_once("php/qrcode.php");
  
  print("");

$qr = new QRCode();

// QR_ERROR_CORRECT_LEVEL_L : 7%
// QR_ERROR_CORRECT_LEVEL_M : 15%
// QR_ERROR_CORRECT_LEVEL_Q : 25%
// QR_ERROR_CORRECT_LEVEL_H : 30%
$qr->setErrorCorrectLevel(QR_ERROR_CORRECT_LEVEL_H);


$qr->setTypeNumber(6);

$qr->addData("ID " .':' . '' . $exeat_id . " Name" .':' . ' ' . $full_name   .  " Status" .':' . '' . $status   );




?>




<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Exeat System for CRAWFORD">
    <meta name="author" content="Chiamaka Mark . &lt;chiamaka@gmail.com&gt;">
	  <meta name="robots" content="noindex, nofollow">

	<!-- Open Graph Meta -->
	<meta property="og:title" content="Exeat System for CRAWFORD">
	<meta property="og:site_name" content="Exeat System for CRAWFORD">
	<meta property="og:description" content="Exeat System for CRAWFORD">
	<meta property="og:type" content="website">
	<meta property="og:url" content="craford.edu.ng">
	<meta property="og:image" content="">
	
    <link rel="shortcut icon" type="image/png" href="images/favicon/favicon2.ico"/>
   <title> Crawford </title>


    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="css/plugins/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">
    
   <!-- <link href="css/style.css" rel="stylesheet"> 
    <link href="css/tams.css" rel="stylesheet"> --> 

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="js/jquery.min.js"></script>
	
	<!--Fontawesome Library -->
  <script src="https://kit.fontawesome.com/2390ce4d32.js" crossorigin="anonymous"></script>
	
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<!--  https://fontawesome.bootstrapcheatsheets.com/# -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>  
<script type="text/javascript" src="js/script.js"></script> <!-- timer -->
<script type="text/javascript" src="js/login.js"></script> <!-- timer -->



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<LINK REL="SHORTCUT ICON" HREF="http://admission.lasued.edu.ng//favicon.ico">  
<title>.::Crawford Exeat verification | System</title>
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
<style type="text/css">
<!--
.style2 {font-size: 24px}
-->
div.relative {
  position: relative;
  top: -20px;
  right: -650px;
  width: 120px;
  height: 120px;
  border: 3px solid blue;
}
</style>

</head>


<body>
<table align="center"  class="table table-striped " border="2px" style="border-style: double; border: 2px; width:800px;">
  <tbody><tr>
			<td colspan="2" class="txtbold" align="center"><h1> EXEAT SYSTEM CRAWFORD</h1></td>
		</tr><tr>
      <td colspan="2" style="background-color:transparent;width:100%; height:100%; width:100%;">
	  <div style="background-color:transparent;">
      <div  style="float:left; background-color: navy; margin-top: 0px; margin-right:-140px;">
        <!-- <img src="" height="120px" width="120px"  />   -->

        <?php  $qr->make(); 
          $qr->printHTML();  
        
        ?>
        
      </div>

      <div style="background-color: transparent;  height: 120px; font-size: 15px; margin-top: 0px; margin-right:30px;">
        <h3 align="center"><strong> Crawford Exeat verification Slip</strong>  <br />  <strong style="color: black; font-size: 15px;">Exeat Verification </strong><br />
        <a style="color:blue; font-size:15px;" href="#"> chiamakamark.com</a>
        </h3>
        
      </div>
      
      <div  style=" background-color: transparent; float:right; margin-top: -100px; width:120px; height: 120px;" class="absolute">
        <img src="../img/crwlogo1.jpg" height="105px" width="105px" class= "margin-top: -100px;"  />  
      </div>
	  </div>
      </td>
    </tr><tr>
        <th class="contentbold">Exeat ID/No:-  </th>
        <td class="content" ><?php  echo $exeat_id   ?></td>
      </tr>
      <tr>
        <th class="contentbold">Full Name</th>
        <td class="content"><?php  echo $full_name   ?></td>
      </tr>

       <tr>
        <th class="contentbold">Programme</th>
        <td class="content" style="font-size: 14px;"> <?php  echo $department   ?></td>
      </tr>

      <tr>
        <th class="contentbold">Destination</th>
        <td class="content"> <?php  echo $destination   ?></td>
      </tr>

      <tr>
        <th class="contentbold">Destination Address</th>
        <td class="content"> <?php  echo $dest_address  ?></td>
      </tr>
      
      <tr>
        <th class="contentbold" width="39%">Depature Date.</th>
        <td class="content" width="61%"> <?php  
        $new_departure_date = date("d-m-Y", strtotime($date_of_depature));
        
       echo $new_departure_date   ?></td>
      </tr>
      
      <tr>
        <th class="contentbold">Reason</th>
        <td><span class="content"> <?php  echo $reason   ?></span></td>
      </tr>
	  
	  <tr>
        <th class="contentbold">Exeat Status</th>
        <td><span class="alert-success" ><?php  echo $status   ?></span></td>
      </tr>
      
      <tr>
        <th colspan="2"  class="contentbold" style="text-align: center;">ARRIVAL DATE</th>
      </tr>
      
      <tr>
        <td colspan="2">
        <table class="table table-striped" cellpadding="3" cellspacing="4" width="100%"><tr bgcolor="#f1f1f1"> 
				<th class="contentbold" width="40%">Arrival Date.</th>
                <td class="content" ><?php  
                
               $new_arival_date = date("d-m-Y", strtotime($arival_date));
                
                echo $new_arival_date   ?></td>
              </tr>      
      <tr>
        <th class="contentbold" >  </th>
        <td class="content"> </td>
      </tr></table></td></tr><tr>
        <td colspan="2">&nbsp;</td>
      </tr>
      
      <!-- <tr>
        <td colspan="2">CRAWFORD EXEAT PORTAL </td>
      </tr> -->
      
      <tr>
        <td colspan="2">Ensure your <a  href="#" style="text-decoration: underline;" id="_GPLITA_0" title="Print receipt">QrCode</a> is showing before printing this slip. </td>
      </tr><tr>
        <td colspan="2" align="center"><input name="Button" class="button" onclick="window.print()" value="    Print    " type="button"></td>
      </tr>
</tbody></table>


</body></html><div style="position:absolute;top:240px;left:300px;background-color: transparent;right: 0px;width: 250px;height: 150px;opacity: 0.2;"><img src="watermark/paid.jpg" alt=""></div>










</body>


<html>