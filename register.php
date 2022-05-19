
<!DOCTYPE html>
<html>

<style>
	 
	form{
		position: absolute;
		left:50%;
		top:40%;
		transform: translate(-50%,-50%);
		border-radius: 20px;
		background-color: pink;
		height:200px;
		width:300px;
		text-align: center; 
 		 font-size:20px;

	}
	input{
		margin: 3px;
	}
</style>

<body>
	<form action="register.php" method="post">
		<h2>REGISTER</h2>
 		username  : <input type="text" placeholder="username" name="username"><br>
 		password  : <input type="password" placeholder="password" name="password"><br>
 		<input type="submit" value="REGISTER NOW" name="submit"><br>  
 		<a href="index.php">back to login page</a>
	</form>


</body>
</html>










<?php
include 'dbconnection.php'; 
if(!empty($_POST['username']) && !empty($_POST['password']) ){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query="INSERT INTO users (username,password) VALUES 
	('$username','$password')";
	$run=mysqli_query($connection, $query);
	if($run){ echo "successfully registered"; }
	else{  echo " unable to register"; }

mysqli_close($connection);
 

}





?>