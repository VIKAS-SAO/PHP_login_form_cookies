
<?php
include 'dbconnection.php'; 
session_start();


if(isset($_SESSION['username'])){
	$_SESSION=array();
	if(isset($_COOKIE[session_name()])){
		setcookie(session_name(),'', time()-3600);
	}
	session_unset(); 
	 setcookie('username','', time()-3600);
	 setcookie('password', '',time()-3600);
 
	session_destroy(); 
	echo "<script> location.href='index.php' </script>";
 }

 
else{
	echo "<script> location.href='index.php' </script>";
}
 
 


mysqli_close($connection); 





?>