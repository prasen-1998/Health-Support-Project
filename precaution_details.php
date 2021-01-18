<html>
<head>
<style type="text/css">
	h2{
		color:green;
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
table{
	background-image: url(mp.jpg);
	border-collapse:collapse;
	width:100%;
	color:#d96459;
	font-family:monospace;
	font-size:18px;
	text-align:left;
}
th{
	background-image: url(mp.jpg);
	background-color:#d96459;
	color:white;
}
tr:nth-child(even){background-color:#f2f2f2}
</style>

</head>
<h2></br></br><u>LIST OF DISEASES AND THEIR NATURAL PRECAUTIONS</u>:</h2>
<body>
<table>
<tr>
<th>DISEASE</th>
<th>NATURAL PRECAUTIONS</th>
</tr>
<?php
$host="localhost";
$dbUsername="root";
$dbPassword="";
$dbname="disease";
$conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);
if(mysqli_connect_error()){
	die('Connection Error('.mysqli_connect_error().')'.mysqli_connect_error());
}
$sql="Select disease,natural_precautions from precautions order by disease asc";
$result=$conn->query($sql);
if($result->num_rows > 0){
	while($row=$result->fetch_assoc()){
		echo "<tr><td>".$row["disease"]."</td><td>".$row["natural_precautions"]."</td></tr>";
	}
	echo "</table>";
}
else{
	echo "0 results found...!";
}
$conn->close();
?>
</table>
</br>
</br>
<a href="update_precaution.php">CLICK HERE TO UPDATE PRECAUTIONS</a>
</br>
</br>
<a href="admin_logout.php">LOG-OUT</a>
</br>
</br>
</body>
</html>
