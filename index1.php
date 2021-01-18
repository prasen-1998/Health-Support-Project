<html>
<head>
<link rel="stylesheet" href="style1.css">
<meta charset="UTF-8">
<meta name="view port" content="width=device-width,initial-scale=1.0">
<style>
h1{
	color:red;
	font-family:sans-serif;
	text-decoration:none;
}	
.border{
	width:230px;
	height:200px;
	padding:15px;
	border:10px solid grey;
	background-color:yellowgreen;

}
.en{
	margin-left: 25%;
    margin-right: 45%;
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
	<h1>ADMIN LOG-IN</h1>
	<div class="border">
	<form action="admin_login.php" method="POST">
		<p>EMAIL: </p><input type="text" placeholder="email" name="email" />
		<p>PASSWORD: </p><input type="password" name="pass" />
		<br/>
		<br/>
		<input class="submit" name="submit" type="submit" value="LOGIN" />
	</form>
	</div>
	<div class="en">
<br>
	<center><a href="entry.php">GO BACK</a></center>
<br>
</div>
</body>
</html>
