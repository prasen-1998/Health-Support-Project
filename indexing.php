<html>
<head>
<meta charset="UTF-8">
<title></title>
<link rel="stylesheet" href="style1.css">

<style>
	h2{
		color: yellow;
		font-family:sans-serif;
		text-decoration:none;
	}	
	
	.border{
	width:350px;
	height:250px;
	padding:15px;
	border:10px solid red;
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
<br>
<h2>SELECTED SYMPTOMS ARE:</h2>

<div class="border">


<form action="diseasename.php" method="post">
<?php
$sum=0.0;
if(isset($_GET["choice"])){
	$symptom=$_GET["choice"];
	$s=count($symptom);
	
	
	for($i=0;$i<$s;$i++){
		
		if($symptom[$i]==1){
			$sum=$sum+1;
			echo "<font color=white  size='3pt'>HIGH BODY TEMPERATURE/FEVER<br></font>";
		}
		
		if($symptom[$i]==2){
			$sum=$sum+2;
			echo "<font color=white  size='3pt'>HEADACHE<br></font>";
		}
		
		if($symptom[$i]==3){
			$sum=$sum+4;
			echo "<font color=white  size='3pt'>VOMITTING SENSATION<br></font>";
		}
		
		if($symptom[$i]==4){
			$sum=$sum+8;
			echo "<font color=white  size='3pt'>BODY PAIN<br></font>";
		}
		
		if($symptom[$i]==5){
			$sum=$sum+16;
			echo "<font color=white  size='3pt'>FATIGUE<br></font>";
		}
		
		if($symptom[$i]==6){
			$sum=$sum+32;
			echo "<font color=white  size='3pt'>COUGHING<br></font>";
		}
		
		if($symptom[$i]==7){
			$sum=$sum+64;
			echo "<font color=white  size='3pt'>CHEST PAIN<br></font>";
		}
		
		if($symptom[$i]==8){
			$sum=$sum+128;
			echo "<font color=white  size='3pt'>LOWER ABDOMINALL PAIN<br></font>";
		}
		
		if($symptom[$i]==9){
			$sum=$sum+256;
			echo "<font color=white  size='3pt'>BLOOD IN STOOL<br></font>";
		}
		
		if($symptom[$i]==10){
			$sum=$sum+512;
			echo "<font color=white  size='3pt'>WATERY STOOL<br></font>";
		}
		
		if($symptom[$i]==11){
			$sum=$sum+1024;
			echo "<font color=white  size='3pt'>JOINT PAIN<br></font>";
		}
		
		if($symptom[$i]==12){
			$sum=$sum+2056;
			echo "<font color=white  size='3pt'>COLD<br></font>";
		}
	}
	//echo "Total severity is:".$sum."<br><br><br>";
}
else{
	echo "SELECT ATLEAST ONE SYMPTOM...!";
}

session_start();
$_SESSION['value'] =$sum;

?>
</br>
</br>
</br>

</div>

</br>
<input class="submit" name="submit" type="submit" value="CLICK TO IDENTIFY THE PROBABLE DISEASE"><br><br>
</br>


<a href="disease.php">GO BACK</a>
</br>
</form>

</body>
</html>

