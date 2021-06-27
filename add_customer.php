<?php

include "db_connect_ticket.php";

$newname =  mysqli_real_escape_string($conn, $_POST["newname"]);
$newemail =    mysqli_real_escape_string($conn, $_POST["newemail"]);
$newpassword =  mysqli_real_escape_string($conn, $_POST["newpassword"]);
$newconfirm_password =    mysqli_real_escape_string($conn, $_POST["newconfirm_password"]);





//Search the database for the word chicken
echo "<h2> you are registerd..! </h2>";

$sql = "INSERT INTO customer_table (customer_ID,name,email,password,confirm_password) VALUES ( NULL , '$newname','$newemail','$newpassword','$newconfirm_password')";
$result = $conn->query($sql); 



 
 


?>
<br>
<a href = "index.php">return to main page </a>

