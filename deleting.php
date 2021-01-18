<html>
<head>
<link rel="stylesheet" href="style1.css">
<style>
	a:link {
		border:1px solid red;
		color:violet;
		background-color:yellow;
		text-decoration:none;
	}
	a:visited {
		color:black;
		background-color:yellow;
		text-decoration:none;
	}
	a:hover{
	
		color:red;
		background-color:transparent;
		text-decoration:underline;
	}
	a:active{
		color:yellow;
		background-color:transparent;
		text-decoration:underline;
	}
</style>
</head>
<body>
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

	$myusername=stripslashes($myusername);
	
	
	$query="Delete from register where email='$myusername'";
	if($myusername!=null){
	if(mysqli_query($conn,$query)>0)
		
		header("location:delete_success.php");
	else
		echo "invalid email";
	}
	else
	{
		echo "PLEASE ENTER A CORRECT EMAIL ID";
	}
}

?>
</br>
</br>
<a href="user_details.php">GO BACK</a>
</body>
</html>