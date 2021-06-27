<?php

include "db_connect_ticket.php";
$keywordfromform = $_POST["keyword"];

?>

<html>
<head>
<style>
.bg-img {
 
  background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url("theater images/126454.jpg");
  height:100%;
  width: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: fixed;

}

h1{
  
 font-size: 60px;
 font-weight: 1000;
 margin-bottom: 50px;
 color: #b38f00;
 font-family:bebaf neue;
 text-align: center;

} 

h2{
  
 font-size: 45px;
 font-weight: 1000;
 margin-bottom: 50px;
 color: #ffa64d;
 font-family:bebaf neue;
 margin-left: 50px;
 
} 

h3{
  
 font-size: 26px;
 font-weight: 400;
 margin-bottom: 30px;
 color: #a6a6a6;
 font-family: 'Roboto',sans-serif;
 margin-left: 30px;
 margin-right: 300px;
 font-style: normal;
 line-height: 1.6;
 

} 


h4{
  
 font-size: 30px;
 font-weight: 1000;
 margin-bottom: 30px;
 color: #ff9999;
 font-family:monospace;
 text-align: right;
 margin-right: 40px;
 
} 



</style>
</head>
<body>

<div class="bg-img">


<?php

//Search the database for the theaters and locations
echo "<h1>Show theater - $keywordfromform</h1><br>";

$sql = "SELECT * FROM theatre WHERE Theatre_name LIKE '%" . $keywordfromform . "%'";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  
	  //Output data of each row 
    echo "<br>" . "<br>" . "<br>" . "<h2>Theatre name : </h2>" . "<h3>" . $row["Theatre_name"] . "</h3>" . "<h2>Theatre location : </h2>" . "<h3>" . $row["Theatre_location"] . "</h3>" . "<br>";
  }
} 

?>

<a href="theaters.php"><h4> Return to previous page </h4></a>
</div>

</body>
</html>




