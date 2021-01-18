<html>
<head>
<link rel="stylesheet" href="style1.css">
<meta charset="UTF-8">
<meta name="view port" content="width=device-width,initial-scale=1.0">

<style>
h2{
	color:green;
	font-family:sans-serif;
	text-decoration:none;
}	
.border{
	width:200px;
	height:150px;
	padding:15px;
	border:10px solid blue;
	background-color:pink;
}
</style>
</head>
<body>
<div class="main_div">
<!--HTML FORM-->
<div class="form_div">
<div class="title">
</br></br>
	<h2>DELETE USER</h2>
	<div class="border">
	<form action="deleting.php" method="POST">
		<p>EMAIL: </p><input type="text" name="email" />
		<br/><br/>
		<input classe="submit" name="submit" type="submit" value="DELETE" />
	</form>
	</div>
</body>
</html>
