<html>
<head>
<meta charset="UTF-8">
<title></title>
<link rel="stylesheet" href="style1.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<style>
.border{
		width:100%;
		padding:30px;
		font-size:2em;
		background-color:grey;
		color:white;
		font-family:Veranda;
		text-align:center;
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
<div class="border">
SELECT THE DISEASE FROM THE LIST TO FETCH FOR DOCTOR TYPE
</div>
<BR>
<BR>
<div class="main_div">
<!--HTML FORM-->
<div class="form_div">
<div class="title">	

<body>

<form action="print_doctor.php" method="POST">


<select name="taskOption">

	
<option value "select Place" selected >select Disease</option>
<?php include 'loc_conn.php'; ?>
<?php while($row1=mysqli_fetch_array($result1)): ; ?>
<option value="<?php echo $row1[0] ; ?>"> <?php echo $row1[1] ;?> </option>
<?php endwhile ;?>
</select>
<input type="submit" name="submit" value="Go"/>
</form>
</br>
</br>
<a href="indexing.php">GO BACK</a>
<br>
</body>
</html>	
