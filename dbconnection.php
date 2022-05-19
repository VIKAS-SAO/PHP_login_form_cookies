
<?php
 

$server='localhost';
$username='root';
$password='password';
$database="login_form_cookies";

$connection=mysqli_connect($server, $username,$password ,$database );

if($connection){
	//echo "suuccessgully connected to database";
 }
else{
	// echo "not successful".mysqli_error($connection);
	 die($connection);
}




?>