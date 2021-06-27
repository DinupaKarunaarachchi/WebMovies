<?php

include "db_connect_ticket.php";

$full_name =  mysqli_real_escape_string($conn, $_POST["full_name"]);
$your_email =    mysqli_real_escape_string($conn, $_POST["your_email"]);
$password =  mysqli_real_escape_string($conn, $_POST["password"]);
$comfirm_password =    mysqli_real_escape_string($conn, $_POST["comfirm_password"]);





//Search the database for the word chicken
echo "<h2> you are registerd..! </h2>";

$sql = "INSERT INTO admin_table (admin_ID,name,email,password,confirm_password) VALUES ( NULL , '$full_name','$your_email','$password','$comfirm_password')";
$result = $conn->query($sql); 



 
 


?>
<br>
<a href = "index.php">return to main page </a>

