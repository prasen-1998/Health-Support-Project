<?php
$pname=$_POST['pname'];
$page=$_POST['page'];
$cno=$_POST['cno'];
$apdate=$_POST['apdate'];
$aptime=$_POST['aptime'];
$problem=$_POST['problem'];

//to check for the validation of the format of the email used 
//$email=test_input($_POST['email']);
//if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
//$email_error="Invalid Email Format";
	

if(!empty($pname) || !empty($page) || !empty($cno) || !empty($apdate) || !empty($aptime) || !empty($problem) ){
	$host="localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbname="disease";

	$conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);

	if(mysqli_connect_error()){
		die('Connection Error('.mysqli_connect_error().')'.mysqli_connect_error());

	}
	else{
		$SELECT="SELECT cno From doctreg Where cno=? Limit 1";
		$INSERT="INSERT into doctreg(pname,page,cno,apdate,aptime,problem) values(?,?,?,?,?,?)";
		$stmt=$conn->prepare($SELECT);
		$stmt->bind_param("i",$cno);
		$stmt->execute();
		$stmt->bind_result($cno);
		$stmt->store_result(); 
		$rnum=$stmt->num_rows;

		if($rnum==0){
			$stmt->close();
			$stmt=$conn->prepare($INSERT);
			$stmt->bind_param("siisss",$pname,$page,$cno,$apdate,$aptime,$problem);
			$stmt->execute();

			echo "NEW RECORD ENTERED SUCCESSFULLY...!";
		}
		else{
			echo "SOMEONE IS ALREADY USING THIS Phone no...Book Appointment With Different Contact no...!";
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