<?php
$host="localhost";
$dbUsername="root";
$dbPassword="";
$dbname="disease";

$conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);

if(mysqli_connect_error()){
	die('Connection Error('.mysqli_connect_error().')'.mysqli_connect_error());
}
else{
	$sql="Select * From precautions order by disease asc";

	$result1=mysqli_query($conn,$sql);
}
?>