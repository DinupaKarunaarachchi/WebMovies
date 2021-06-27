<?php

include "db_connect_ticket.php";



$newname =  mysqli_real_escape_string($conn, $_POST["newname"]);
$newlocation =  mysqli_real_escape_string($conn, $_POST["newlocation"]);
$newid =  mysqli_real_escape_string($conn, $_POST["newid"]);





//Search the database for the word chicken
echo "<h2> Theatre is added successfully..! </h2>";

$sql = "INSERT INTO theatre (theatreid,Theatre_name,Theatre_location,admin_ID) VALUES ( NULL ,'$newname','$newlocation','$newid')";
$result = $conn->query($sql); 



 
 


?>
<br>
<a href = "index.php">return to main page </a>
