<html>
<head>
<meta charset="UTF-8">
<title></title>
<link rel="stylesheet" href="style1.css">

<style>
h2{
	color:red;
	font-family:sans-serif;
	text-decoration:none;
}	
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
.border{
width:320px;
height:70px;
padding:15px;
border:5px solid blue;
background-color:violet;
}
</style>
</head>
<body>
<div class="main_div">
<!--HTML FORM-->
<div class="form_div">
<div class="title">	
<h2></br></br>PROBABLE DISEASE MAY BE</br></h2>
<?php
session_start(); 
$Symptom=0.0;
$Symptom=$_SESSION['value'];
//echo "<br><br><br>Symptom=" .$Symptom. "<br><br><br><br><br><br>";
$host="localhost";
$dbUsername="root";
$dbPassword="";
$dbname="disease";
$conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);
if(mysqli_connect_error()){
	die('Connection Error('.mysqli_connect_error().')'.mysqli_connect_error());
}
else{
	$sql="Select Probable_Diseases From disease_identifier Where Symptom_Id=$Symptom";
	$result=$conn->query($sql);
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
			echo "<br><br><font color=white  size='3pt'>ANY ONE OF:-<br></font></br><font color=yellow  size='4pt'>".$row["Probable_Diseases"]. "<br></font><br><br><br><br>";
		}
	
		
	}
	else{
		echo "<br><br>SORRY...!NO DISEASE COULD BE IDENTIFIED...!<br><br>";
	}

	
	$conn->close();
}
?>
<div class="border">
<a href="search.php">CLICK HERE TO SEE DISEASE DETAILs</a>
</br>
</br>
<a href="search_doctor.php">CLICK HERE TO SEARCH FOR DOCTORS</a>
</br>
</div>
</form>
</body>
</html>