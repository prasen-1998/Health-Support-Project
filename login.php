<?php
	
	$host="localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbname="disease";

	$conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);

	if(mysqli_connect_error()){
		die('Connection Error('.mysqli_connect_error().')'.mysqli_connect_error());
}else{
	$count=0.0;
	$myusername=$_POST['email'];
	$mypassword=$_POST['pass'];

	$myusername=stripslashes($myusername);
	$mypassword=stripcslashes($mypassword);

	$query="select * from register where email='$myusername' and password='$mypassword'";
	$result=mysqli_query($conn,$query);

	//$count=mysqli_num_rows($result);
	mysqli_close($conn);

	if($result->num_rows>0){
		$seconds=300+time();
		setcookie(loggedin,date("F jS - g:i a"),$seconds);

		header("location:login_success.php");
	}else{
		echo "INCORRECT USERNAME OR PASSWORD...!";
	}
}

?>