<html>
<head>
<title>disease</title>
<link rel="stylesheet" href="style1.css">
<meta charset="UTF-8">
<meta name="view port" content="width=device-width,initial-scale=1.0">
<style>
	h4{
		color:green;
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
	width:370px;
	height:170px;
	padding:15px;
	border:10px solid blue;
	background-color:orange;
}
</style>	
</head>
<body>
<div class="main_div">
<!--HTML FORM-->
<div class="form_div">
<div class="title">
<body>
<h4></br></br>ADMIN SUCCESSFULLY LOGGED IN</br></br></br></h4>
</br>
<div class="border">
</br>
<a href="user_details.php">CLICK HERE TO SEE ALL REGISTERED USERS</a>
</br></br></br>
<a href="precaution_details.php">CLICK HERE TO VIEW PRECAUTIONS</a>
</br></br></br>
<a href="doctor_details.php">CLICK HERE TO VIEW LIST OF DOCTOR-TYPES</a>
</br>
</div>
</body>
</html>
<?php
if(!isset($_COOKIE['loggedin'])){
	header("location:index.php");
}
