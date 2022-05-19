 


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
		height:240px;
		width:300px;
		text-align: center; 
 		 font-size:20px;

	}
	input{
		margin: 1px;
	}
</style>

<body>
 	<form  action="edit.php"   method="post">
		 <h4>CHANGE USERNAME & PASSWORD</h4>

 		new-username  : <input type="text" placeholder="username" name="new_username"><br>
 		new-password  : <input type="password" placeholder="password" name="new_password"><br>
 		<input type="submit" value="CHANGE"  name="submit"><br>
 			 <a href="login.php">cancel</a> 

	</form>
</body>
</html>

 



<?php
include 'dbconnection.php'; 
session_start();
 	$old_username=$_SESSION['username'];
	$old_password=$_SESSION['password'];

	if(isset($_SESSION['username'])){
		if(!empty($_POST['new_username']) && !empty($_POST['new_password']) ){
					  $new_username=$_POST['new_username'];
				     $new_password=$_POST['new_password'];
				$query="UPDATE users SET username='$new_username',password='$new_password' WHERE username='$old_username' AND password='$old_password' ";
				$run=mysqli_query($connection,$query);
				if($run){
					echo "changed succesfully";
					$_SESSION['username']=$new_username;
					$_SESSION['password']=$new_password;
					$_COOKIE['username']=$new_username;
					$_COOKIE['password']=$new_password;
				}
				else{
					echo "unable to change details";
				}





		 }
		 else{
			    echo "<script> alert('please fill the form')  </script>";
			    // echo "<script> location.href='edit.php' </script>"; 
		 }
    }
	 
		 
    else{
	echo "<script> location.href='index.php' </script>";
   }
 
 


mysqli_close($connection); 

?>

 