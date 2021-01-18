<?php
$name=$_POST['name'];
$contact=$_POST['contact'];
$age=$_POST['age'];
$email=$_POST['email'];

//to check for the validation of the format of the email used 
//$email=test_input($_POST['email']);
//if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
	//$email_error="Invalid Email Format";
	
	
$password=$_POST['password'];

if(!empty($name) || !empty($contact) || !empty($age) || !empty($email) || !empty($password)){
	$host="localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbname="disease";

	$conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);

	if(mysqli_connect_error()){
		die('Connection Error('.mysqli_connect_error().')'.mysqli_connect_error());

	}
	else{
		$SELECT="SELECT email From register Where email=? Limit 1";
		$INSERT="INSERT into register(name,contact,age,email,password) values(?,?,?,?,?)";
		$stmt=$conn->prepare($SELECT);
		$stmt->bind_param("s",$email);
		$stmt->execute();
		$stmt->bind_result($email);
		$stmt->store_result(); 
		$rnum=$stmt->num_rows;

		if($rnum==0){
			$stmt->close();
			$stmt=$conn->prepare($INSERT);
			$stmt->bind_param("siiss",$name,$contact,$age,$email,$password);
			$stmt->execute();

			echo "NEW RECORD ENTERED SUCCESSFULLY...!";
		}
		else{
			echo "SOMEONE IS ALREADY USING THIS EMAIL...USE A DIFFERENT EMAIL...!";
		}
		
		$stmt->close();
		$conn->close();
		
	}
}	
else{
		echo "ALL FIELDS ARE MENDETORY...!";
		die();	
}
?>