<?php

session_start();


/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "crawford");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$exeat_details = $_SESSION["exeat_details"];
$exeat_details = $_GET['exeat_id'];



// Attempt update query execution
$sql = "UPDATE exeat SET statuss='Disapproved' WHERE exeat_id=$exeat_details";
if(mysqli_query($link, $sql)){
    echo "<script> alert ('You disapproved the Exeat Request For '+ 'ID: ' + $exeat_details); 
	window.location.href='admin_page.php';
	</script>" ;
} else {
    echo "ERROR: Could not able to execute $sql " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>