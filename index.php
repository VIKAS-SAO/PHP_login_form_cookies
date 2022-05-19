
<!DOCTYPE html>
<html>

<style>
	 
	form{
		position: absolute;
		left:50%;
		top:40%;
		transform: translate(-50%,-50%);
		border-radius: 20px;
		background-color: yellow;
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
	<form  action="login.php"  method="post">
		 <h2>LOG IN</h2>

 		username  : <input type="text" placeholder="username" name="username"><br>
 		password  : <input type="password" placeholder="password" name="password"><br>
 		<input type="submit" value="LOGIN"  name="submit"><br>
 			 <a href="register.php">Register Here</a> 

	</form>

</body>
</html>

 



<?php
include 'dbconnection.php'; 





?>