<html>
<head>
	<title>REGISTRATION FORM</title>
	<link rel="stylesheet" href="style1.css">
	<style>
	h2{
		color:green;
		font-family:sans-serif;
		text-decoration:none;
	}	
.border{
	width:250px;
	height:150px;
	padding:15px;
	border:10px solid blue;
	background-color:yellow;
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
<h2>REGISTRATION FORM</h2>
<div class="border">
<form action="reginsert.php" method="POST">
	<table>
		<tr>
			<td>
				NAME:
			</td>
			<td>
				<input type="text" placeholder="Name" name="name" required>
			</td>

		</tr>
		<tr>
			<td>
				CONTACT:
			</td>
			<td>
				<input type="bigint" placeholder="Contact" name="contact" required>
			</td>

		</tr>
		<tr>
			<td>
				AGE:
			</td>
			<td>
				<input type="int" placeholder="Age" name="age" required>
			</td>

		</tr>
		<tr>
			<td>
				EMAIL:
			</td>
			<td>
				<input type="varchar" placeholder="Email "name="email" required>
			</td>

		</tr>
		<tr>
			<td>
				PASSWORD:
			</td>
			<td>
				<input type="varchar" placeholder="Password" name="password" required>
			</td>

		</tr>
		<tr>
			<td>
				<input type="submit" value="SUBMIT" name="">
			</td>
		</tr>
	</table>
<br/></br><br/>
<a href="index.php">CLICK HERE TO LOG-IN</a>
<br/><br/>
</form>
</div>
</form>
</body>
</html>