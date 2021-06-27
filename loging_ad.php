<?php

$host="localhost";
$user="root";
$password="usbw";
$db="book_ticket";

mysql_connect($host,$user,$password);
mysql_select_db($db);

if(isset($_POST['email'])){
    $email=$_POST['email'];
	$password=$_POST['password'];
	
	$sql="select * from admin_table where email='".$email."' AND password='".$password."' limit 1 ";

	$result=mysql_query($sql);
	
	if(mysql_num_rows($result)==1){
	    echo "You Have Successfully Logged in";
	    exit();
	}
	else{
	    echo "Incorrect Username or Password !";
		exit();
	}
}

?>



<html>
<head>
	
</head>
<body>
	<div class="container">
	
		<form method="POST" action="#">
			<div class="form-input">
				<input type="email" name="email" placeholder="Enter the Email"/>	
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="password"/>
			</div>
			<input type="submit" type="submit" value="LOGIN" class="btn-login"/>
		</form>  
	</div>
</body>
</html>  