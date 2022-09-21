<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <title>::. Exeact | Application</title>
    <link rel="stylesheet" href="school.css">
</head>
<body>

<div class="container" align="center">

<form class="row g-3 mt-5 container-fluid" id="reg" action="" method="POST">
  

  <div class="col-md-4">
    <label for="inputSurname" class="form-label">Matric No: </label>
    <input type="text" class="form-control" id="matric" name="matric" required >
  </div>
  <div class="col-md-6">
    <label for="inputOtherNames" class="form-label">Full Names: </label>
    <input type="text" class="form-control" id="other_names"name="other_names"required>
  </div>
  
  <div class="col-md-2">
    <label for="inputOtherNames" class="form-label">Room No: </label>
    <input type="text" class="form-control" id=""name="room_no"required>
  </div>


  

  
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Destination: </label>
   <textarea class="form-control" id="" rows="3"name="destination"required></textarea>
  </div>

  <div class="col-6">
    <label for="inputAddress2" class="form-label">Destination Address: </label>
   <textarea class="form-control" id="" rows="3"name="dest_address"required></textarea>
  </div>

  
  <div class="col-md-4">
    <label for="inputOtherNames" class="form-label">Support Name: </label>
    <input type="text" class="form-control" id=""name="support_name"required>
  </div>

  <div class="col-md-4">
    <label for="inputOtherNames" class="form-label">Support No: </label>
    <input type="number" class="form-control" id=""name="support_no"required>
  </div>
  <div class="col-md-4">
    <label for="inputOtherNames" class="form-label">Parent/Guardian No: </label>
    <input type="number" class="form-control" id=""name="parent_no"required>
  </div>

  <!-- <div class="col-md-6">
    <label for="inputSurname" class="form-label">Room No: </label>
    <input type="text" class="form-control" id="matric" name="matric" required >
  </div> -->
  <div class="col-md-4">
    <label for="inputOtherNames" class="form-label">Exeat Date: </label>
    <input type="date" class="form-control" id=""name="exeat_date"required>
  </div>

  <div class="col-md-4">
    <label for="inputOtherNames" class="form-label">Departure Date: </label>
    <input type="date" class="form-control" id=""name="departure_date"required>
  </div>

  <div class="col-md-4">
    <label for="inputOtherNames" class="form-label">Arrival Date: </label>
    <input type="date" class="form-control" id=""name="arrival_date"required>
  </div>

  <div class="col-8">
    <label for="inputAddress2" class="form-label">Reason for Exeat: </label>
   <textarea class="form-control" id="" rows="3"name="reason"required></textarea>
  </div>
  


   <div class="col-12 mb-4" align="center">
    <button type="submit" class=" btn-lg btn btn-success">Request  </button>

  </div>

  
 
</form>


	

</div>


    
        <!-- <form method="POST" action="insert.php">
            <div class="reason">
            <label>Reason For Exeat:</label>
            <input type="text" class="form-control" name="reason for exeat"><br>

           <div class="exdate">
            <label>Exeat Date:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="date" class="form-control" name="exeat date"><br><br>
            <label>Resumption Date:</label>&nbsp;&nbsp;
            <input type="date" name="resumption date"><br><br>
</div>
         
            

         <div class="rnum">
            <label>Room number:</label>&nbsp;&nbsp;
            <input type="text" class="form-control" name="room number"><br><br>
            <label>Block Number:</label>&nbsp;
            <input type="text" name="Block number"><br><br>
</div> 
       
            

         <div class="sub">
            <input type="submit" name="submit" value="submit">
</div>
         
</form> -->

</body>
</html>