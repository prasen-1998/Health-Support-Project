<html>
<head>
<title>disease</title>
<link rel="stylesheet" href="style1.css">
<meta charset="UTF-8">
<meta name="view port" content="width=device-width,initial-scale=1.0">
<style>
.note{
		width:100%;
		padding:15px;
		font-size:1em;
		background-color:yellow;
		color:green;
		font-family:Geneva;
	}
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
SELECT FROM THE SYMPTOM LIST
</div>
<div class="main_div">
<!--HTML FORM-->
<div class="form_div">
<div class="title">
<form action="indexing.php" method="get">
</br></br>
<input type="checkbox" name="choice[]" value='1'/>HIGH BODY TEMPERATURE/FEVER<br/>
<input type="checkbox" name="choice[]" value='2'/>HEADACHE<br/>
<input type="checkbox" name="choice[]" value='3'/>VOMITTING SENSATION<br/>
<input type="checkbox" name="choice[]" value='4'/>BODY PAIN<br/>
<input type="checkbox" name="choice[]" value='5'/>FATIGUE<br/>
<input type="checkbox" name="choice[]" value='6'/>COUGHING<br/>
<input type="checkbox" name="choice[]" value='7'/>CHEST PAIN<br/>
<input type="checkbox" name="choice[]" value='8'/>LOWER ABDOMINAL PAIN<br/>
<input type="checkbox" name="choice[]" value='9'/>BLOOD IN STOOL<br/>
<input type="checkbox" name="choice[]" value='10'/>WATERY STOOL<br/>
<input type="checkbox" name="choice[]" value='11'/>JOINT PAIN<br/>
<input type="checkbox" name="choice[]" value='12'/>COLD<br/>
<input type="submit" name="submit" type="submit" value="CLICK ME">
</form>
</br></br>
<a href="index.php">GO BACK</a>
</br></br>
<div class="note">
NOTE: THE SEARCH IS RESTRICTED TO SELECTED SYMPTOMS ONLY</br>ALL COMBINATIONS MAY NOT IDENTIFY DISEASES
</div>
</body>
</html>