<?php

include "db_connect_ticket.php";



$newname =  mysqli_real_escape_string($conn, $_POST["newname"]);
$newtype =  mysqli_real_escape_string($conn, $_POST["newtype"]);
$newseatno =  mysqli_real_escape_string($conn, $_POST["newseatno"]);
$newid =  mysqli_real_escape_string($conn, $_POST["newid"]);





//Search the database for the word chicken
echo "<h2> Seats are added successfully..! </h2>";

$sql = "INSERT INTO seats (seatsid,Seats_name,seat_type,No_of_Seats,theatreid) VALUES ( NULL ,'$newname','$newtype','$newseatno','$newid')";
$result = $conn->query($sql); 



 
 


?>
<br>
<a href = "index.php">return to main page </a>
