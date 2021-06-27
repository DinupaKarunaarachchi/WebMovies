<?php

include "db_connect_ticket.php";

$sql = "SELECT * FROM move WHERE movieID = '1' ";
$result = $conn->query($sql);

	while($row = $result->fetch_assoc())
	{
		
	?>
	
	
	<title><?php echo $row['movieTitle']; ?></title>
	<style>
	background-image: url("<?php echo $row['movieImg']; ?>");
	</style>
	
	<body>

<div class="bg-img">
  <div class="container header">
    <img src="image/logo.png" class="logo">
   </div>
    <h4><?php echo $row['movieTitle']; ?></h4>
    <a href="index.php">
        <button class="btn2"><i class="fa fa-close"></i></button>
        </a>
    
    <table>
	
        <tr>
            <td><h1>GENRE:</h1></td>
            <td><h2><?php echo $row['movieGenre']; ?></h2></td>
        </tr>
        <tr>
            <td><h1>DURATION:</h1></td>
            <td><h2><?php echo $row['movieDuration']; ?></h2></td>
        </tr>
        <tr>
            <td><h1>RELEASE DATE:</h1></td>
            <td><h2><?php echo $row['movieRelDate']; ?></h2></td>
        </tr>
        <tr>
            <td><h1>DIRECTOR:</h1></td>
            <td><h2><?php echo $row['movieDirector']; ?></h2></td>
        </tr>
        <tr>
            <td><h1>ACTORS:</h1></td>
            <td><h2><?php echo $row['movieActors']; ?></h2></td>
        </tr>
		
    </table>
	
	<?php } ?>