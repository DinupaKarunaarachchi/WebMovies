<?php

include "db_connect_ticket.php";

$theatre =  mysqli_real_escape_string($conn, $_POST["theatre"]);
$date =    mysqli_real_escape_string($conn, $_POST["date"]);
$hour =  mysqli_real_escape_string($conn, $_POST["hour"]);
$type =    mysqli_real_escape_string($conn, $_POST["type"]);
$filName =  mysqli_real_escape_string($conn, $_POST["filName"]);
$fName =    mysqli_real_escape_string($conn, $_POST["fName"]);
$lName =  mysqli_real_escape_string($conn, $_POST["lName"]);
$pNumber =    mysqli_real_escape_string($conn, $_POST["pNumber"]);





//Search the database for the word chicken
echo "<h2> you are registerd..! </h2>";

$sql = "INSERT INTO bookingtable (bookingID,bookingTheatre,date,time,type,movie_name,first_name,last_name,phone_number) VALUES ( NULL , '$theatre','$date','$hour','$type', '$filName','$fName','$lName','$pNumber')";
$result = $conn->query($sql); 



 
 


?>
<br>
<a href = "index.php">return to main page </a>

