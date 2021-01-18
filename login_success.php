
<html>
<head>
<title>disease</title>
<link rel="stylesheet" href="style1.css">
<meta charset="UTF-8">
<meta name="view port" content="width=device-width,initial-scale=1.0">

<style>
	h4{
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
	p{
	color:blue;
	background color:transparent;
	text-decoration:none;
	
	
</style>	


</head>

<body>

<div class="main_div">
<!--HTML FORM-->
<div class="form_div">
<div class="title">
<body>
</br></br></br>
<h4>SUCCESSFULLY LOGGED IN</h4>
</br></br>
<a href="disease.php">CLICK HERE TO VIEW THE SYMPTOM PAGE</a>
</br>
</br>
</br>
<p>THE SYMPTOMS LISTED IN THIS PORTAL ARE BASED ON THE COMMON SYMPTOMS ASSOCIATED WITH BASIC HEALTH ISSUES</p>
</body>
</html>

<?php
if(!isset($_COOKIE['loggedin'])){
	header("location:index.php");
}
