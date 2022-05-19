



<?php
include 'dbconnection.php';
   session_start();
   
   


	if(isset($_SESSION['username']) && isset($_SESSION['password']) ){
		echo "<h3>welcome ".$_SESSION['username']."</br></br>";
		echo "<a href='edit.php'>edit profile</a></br></br>";
		echo "<a href='logout.php'>logout</a></br></br>"; 
	}
     else{	

     		if(isset($_COOKIE['username']) && isset($_COOKIE['password']) ){
     			  $_SESSION['username']= $_COOKIE['username'];
     			  $_SESSION['password']= $_COOKIE['password'];
     			   echo "<script>location.href='login.php'</script>";

       		}
      		else{
	      		 if(!empty($_POST)){
					   	$username=$_POST['username'];
					   $password=$_POST['password'];
					   $query="SELECT * FROM users WHERE username='$username' AND password='$password' ";
					   $run=mysqli_query($connection,$query);
					   $row=mysqli_num_rows($run); 

					    if( $row!=0 ){
							$_SESSION['username']=$_POST['username'];
							$_SESSION['password']=$_POST['password'];
							setcookie('username', $username ,time()+60*60*24*30);
							setcookie('password', $password ,time()+60*60*24*30); 
					 		 echo "<script>location.href='login.php'</script>";
				     	}
					 	else{
							echo "<script>  alert('wrong details') </script>";
							echo "<script> location.href='index.php' </script>";
						} 
		          } 
 
				  else{
				   			echo "<script>  alert('wrong details') </script>";
						    echo "<script> location.href='index.php' </script>";


				  }


      		}



	     	 
	    
}


 
 

	 mysqli_close($connection);

 

?>


<!DOCTYPE html>
<html> 
<body> 

 
</body>
</html>



 