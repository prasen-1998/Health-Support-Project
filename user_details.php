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
		font-size:25px;
		text-align:center;
	}
	th{
		background-image: url(mp.jpg);
		background-color:#d96459;
		color:white;
	}
	tr:nth-child(even){background-color:#f2f2f2}
</style>
</head>
<h2></br><u>LIST OF THE REGISTERED PATIENTS IN THE DATABASE</u>:</h2>
<body>
<table>
<tr>
<th>NAME</th>
<th>CONTACT</th>
<th>AGE</th>
<th>EMAIL</th>
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
$sql="Select name,contact,age,email from register order by name asc";
$result=$conn->query($sql);
if($result->num_rows > 0){
	while($row=$result->fetch_assoc()){
		echo "<tr><td>".$row["name"]."</td><td>".$row["contact"]."</td><td>".$row["age"]."</td><td>".$row["email"]."</td></tr>";
	}
	echo "</table>";
}
else{
	echo "0 results found...!";
}
$conn->close();
?>
</table>
</br></br></br>
<a href="delete.php">CLICK HERE TO DELETE AN USER BASED ON EMAIL PROVIDED</a>
</br></br>
<a href="admin_logout.php">LOG-OUT</a>
</br></br>
</body>
</html>