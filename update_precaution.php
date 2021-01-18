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
	width:250px;
	height:200px;
	padding:15px;
	border:10px solid blue;
	background-color:grey;
}
</style>
</head>
<body>
<div class="main_div">	
<!--HTML FORM-->
<div class="form_div">
<div class="title">
</br>
	<h2>UPDATE PRECAUTIONS</h2>
	<div class="border">
	<form action="updating.php" method="POST">
		<p>DISEASE: </p><input type="text" name="disease" />
		<br/>
		<p>NATURAL PRECAUTIONS: </p><input type="text" name="natural_precautions" />
		<br/><br/>
		<input classe="submit" name="submit" type="submit" value="UPDATE" />
	</form>
	</div>
</body>
</html>
