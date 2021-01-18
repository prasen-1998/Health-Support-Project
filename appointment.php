<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Appointment</title>
    <link rel="stylesheet" href="style_app.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<style>
label{
    color: white;
}
h5{
    color:yellow;
}
a{
    margin-left: 30%;
    margin-right: 20%;
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
    <div class="appointment-form">

        <marquee scrollamount="5" ><font color=yellow  size='3pt'>Doctors are available from Monday to Friday : 10 am to 8 pm</font></marquee>
        <br>
        <br>
        <h5>
            <center >BOOK YOUR APPOINTMENT</center>
        </h5>
        <form action="docinsert.php" method="POST">
            <label>Patient Name</label>
            <input type="text" class="form-control" placeholder="Name" name="pname" required>

            <label>Age</label>
            <input type="text" class="form-control" placeholder="Age" name="page" required>

            <label>Contact Number</label>
            <input type="text" class="form-control" placeholder="Contact" name="cno" required>

            <div class="input-grp">
                <label>Appointment Date</label>
                <input type="date" class="form-control select-date" name="apdate" required>
            </div>

            <div class="input-grp">
                <label>Appointment Time</label>
                <input type="time" class="form-control select-time" name="aptime" required>
            </div>

            <label>Problem</label>
            <input type="textarea" class="form-control" placeholder="Describe the problem" name="problem">

            <div class="input-submit">
                <br>
                
            </div>

        </form>
    </div>
    
    <center><a href="next.html">SUBMIT</a></center>
    <br>
    <center><a href="entry.php">EXIT</a></center>
</body>

</html>