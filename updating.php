<html>
<link rel="stylesheet" href="style1.css">
<meta charset="UTF-8">
<meta name="view port" content="width=device-width,initial-scale=1.0">

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
	$myusername=$_POST['disease'];
	$mypassword=$_POST['natural_precautions'];

	$myusername=stripslashes($myusername);
	$mypassword=stripcslashes($mypassword);
	
	
	if($myusername!=null and $mypassword!=null){
	$query="Update precautions set natural_precautions='$mypassword' where disease='$myusername'";
	
	
	
	if(mysqli_query($conn,$query)>0){
		$seconds=300+time();
		setcookie(loggedin,date("F jS - g:i a"),$seconds);

		header("location:update_success.php");
	}else{
		echo "INCORRECT DISEASE NAME...!";
	}
	}
	else{
	echo "INPUT THE DISEASE NAME!";
}
}

?>

</html>