<html>
<head>
<link rel="stylesheet" href="style1.css">
<meta charset="UTF-8">
<meta name="view port" content="width=device-width,initial-scale=1.0">
<style>	
h1{
		color:green;
		font-family:sans-serif;
		text-decoration:none;
	}	
.border{
	width:200px;
	height:180px;
	padding:15px;
	border:10px solid orange;
	background-color:grey;
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
	<h1>LOG-IN</h1>
	<div class="border">
	<form action="login.php" method="POST">
		<p>EMAIL: </p><input type="text" placeholder="email" name="email" />
		<p>PASSWORD: </p><input type="password" name="pass" />
		<br/>
		</br>
		<input class="submit" name="submit" type="submit" value="LOGIN" />
	</form>
	</div>
</br></br></br>	
<a href="entry.php">CLICK HERE TO RESTART THE SESSION</a>
</body>
</html>
