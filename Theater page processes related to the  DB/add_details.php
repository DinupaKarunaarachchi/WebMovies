<?php

include "db_connect_ticket.php";

$newid =  mysqli_real_escape_string($conn, $_POST["newid"]);
$newtitle =    mysqli_real_escape_string($conn, $_POST["newtitle"]);
$newgenre =  mysqli_real_escape_string($conn, $_POST["newgenre"]);
$newduration =    mysqli_real_escape_string($conn, $_POST["newduration"]);
$newreldate =  mysqli_real_escape_string($conn, $_POST["newreldate"]);
$newdirector =  mysqli_real_escape_string($conn, $_POST["newdirector"]);
$newactors =  mysqli_real_escape_string($conn, $_POST["newactors"]);





//Search the database for the word chicken
echo "<h2> Movie is added successfully..! </h2>";

$sql = "INSERT INTO move (movieID,movieImg,movieTitle,movieGenre,movieDuration,movieRelDate,movieDirector,movieActors) VALUES ( '$newid','','$newtitle','$newgenre','$newduration','$newreldate','$newdirector','$newactors')";
$result = $conn->query($sql); 



 
 


?>
<br>
<a href = "index.php">return to main page </a>

