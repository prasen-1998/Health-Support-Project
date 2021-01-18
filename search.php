<html>
<head>
<meta charset="UTF-8">
<title></title>
<link rel="stylesheet" href="style1.css">


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
SELECT FOR DISEASE DETAILS
</div>
<BR>
<BR>
<div class="main_div">
<!--HTML FORM-->
<div class="form_div">
<div class="title">	

<body>

<form action="print.php" method="POST">


<select name="taskOption">

	
<option value "select Disease" selected >select Disease</option>
<?php include 'db_connection.php'; ?>
<?php while($row1=mysqli_fetch_array($result1)): ; ?>

<option value="<?php echo $row1[0] ; ?>"> <?php echo $row1[1] ;?> </option>
<?php endwhile ;?>
</select>
<input type="submit" name="submit" value="Go"/>


</br></br></br>

<a href="disease.php">GO BACK</a>

</form>
</body>
</html>	
