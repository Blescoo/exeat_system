<?php
session_start();
 

?>

<?php
$con = mysqli_connect("localhost", "root", "", "crawford");
if($con===false){
    die("ERROR: Couid not connect." . mysqli_connect_error());
}
 

    $matric_no = $_SESSION['matric'];
    // Define the record to search for
    $recordToFind = $matric_no;
    
    // Construct the SQL query to count the number of times the record appears
    $query = "SELECT COUNT(*) FROM exeat WHERE matric_no = '$recordToFind'";
    
    // Execute the query and retrieve the result
    $result = mysqli_query($con, $query);
  
    // Check if the query returned a result
    if ($result) {
    // Retrieve the number of occurrences of the record from the result
        $row = mysqli_fetch_row($result);

        
        $numOccurrences = $row[0];
    
    
        //echo  $numOccurrences;
    
        // Check if the record appears three times in the database
        if ($numOccurrences == 3) {
            echo "The record '$recordToFind' appears three times in the database.";
    
    
        }

        else {

            $matric_no = $_SESSION['matric'];
            $full_name = $_SESSION["fullname"];
            $id = $_SESSION["userid"];
            $room_no = $_SESSION["roomno"] ;
            $block_no = $_SESSION["blockno"];
            $destination = mysqli_real_escape_string($con, $_REQUEST['destination']);
            $destination_address  = mysqli_real_escape_string($con, $_REQUEST['dest_address']);
            $support_name = mysqli_real_escape_string($con, $_REQUEST['support_name']);
            $support_no = mysqli_real_escape_string($con, $_REQUEST['support_no']);
            $parent_no = mysqli_real_escape_string($con, $_REQUEST['parent_no']);
            $exeat_date = mysqli_real_escape_string($con, $_REQUEST['exeat_date']);
            $Departure_Date = mysqli_real_escape_string($con, $_REQUEST['departure_date']);
            $Arrival_date = mysqli_real_escape_string($con, $_REQUEST['arrival_date']);
            $Reason_for_exeat = mysqli_real_escape_string($con, $_REQUEST['reason']);

            $randomNumber = rand(111111111,999999999);
            $exeat_random_id =   $randomNumber;


            $sql = "INSERT INTO exeat ( exeat_id, matric_no, full_name, student_id, destination, destination_address,  support_no, support_name, parent_no, exeat_date, date_of_depature, arrival_date, reason ) VALUES('$exeat_random_id', '$matric_no','$full_name', '$id','$destination','$destination_address','$support_name','$support_no','$parent_no','$exeat_date','$Departure_Date','$Arrival_date','$Reason_for_exeat')";
            if(mysqli_query($con,$sql)){
                echo"Records added successfully.";
            }
            else{
                echo"ERROR: Could not execute $sql." . mysqli_error($con);
            }

            mysqli_close($con);





        }
    
    }
    
   // mysqli_close($con);
    

// $sql = "INSERT INTO exeat ( exeat_id, matric_no, full_name, student_id, destination, destination_address,  support_no, support_name, parent_no, exeat_date, date_of_depature, arrival_date, reason ) VALUES('$exeat_random_id', '$matric_no','$full_name', '$id','$destination','$destination_address','$support_name','$support_no','$parent_no','$exeat_date','$Departure_Date','$Arrival_date','$Reason_for_exeat')";
// if(mysqli_query($con,$sql)){
//     echo"Records added successfully.";
// }
// else{
//     echo"ERROR: Could not execute $sql." . mysqli_error($con);
// }

// mysqli_close($con);
?>