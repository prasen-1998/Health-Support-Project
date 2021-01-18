<html>
<head>
<meta charset="UTF-8">
<title></title>
<link rel="stylesheet" href="style1.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<style>
	h4{
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
</br>
<br><h4>DISEASE SELECTED AND NATURAL PRECAUTIONS</h4>
<?php
$option=$_POST['taskOption'];
switch($option)
{
	default:
	display($option);
}
function display($value)
{
	include 'db_connection.php';
	while($row=$result1->fetch_assoc())
	{
		
		if($value==$row["sl_no"])
			echo "<br><font color=blue  size='3pt'>DISEASE NAME:<br></font><font color=white  size='6pt'> ".$row["disease"]."<br></font><font color=blue  size='3pt'><br>NATURAL PRECAUTIONS:</font><br><font color=white  size='4pt'>".$row["natural_precautions"]."<br></font><br>";
	}
}
echo "<font color=yellow  size='3pt'><marquee>IF SYMPTOMS ARE SEVERE--PLEASE CONSULT PROPER PHYSICIAN....!</marquee></font><br><br><br>";
?>
<a href="search_doctor.php">CLICK HERE TO SEARCH A DOCTOR</a>
<br/><br/>
<a href="logout.php">EXIT</a>
</body>
</html>	