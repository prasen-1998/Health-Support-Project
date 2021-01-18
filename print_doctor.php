<html>
<head>
<meta charset="UTF-8">
<title></title>
<link rel="stylesheet" href="style1.css">
<style>
	h3{
		color:yellow;
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
</style>
</head>
<body>
<div class="main_div">
<!--HTML FORM-->
<div class="form_div">
<div class="title">	
<h3></br></br>PREFERRABLE  DOCTOR TYPE:</h3> 
<?php
$option=$_POST['taskOption'];
switch($option)
{
	default:
	display($option);
}

function display($value)
{
	include 'loc_conn.php';
	while($row=$result1->fetch_assoc())
	{
		if($value==$row["dno"])
			echo "<br><font color=white  size='3pt'>DISEASE NAME:</font><font color=orange  size='3pt'> ".$row["disease"]."<br><font color=white  size='3pt'><br>DOCTOR TYPE: </font>".$row["doctor_type"]."<br><br>";
	}
}
?>
<a href="appointment.php">CLICK FOR APPOINTMENT</a>
<br/><br/><br/>
<a href="logout.php">EXIT</a>
</body>
</html>	