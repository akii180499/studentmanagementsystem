<?php

session_start();

	if(isset($_SESSION['uid']))
	{
		echo "";

	}
	else
	{
		header('location: ../login.php');
	}



?>




<html>
<head>
	<title>Student Management System</title>
	<style>
				#bar
			{
				height:100px;
				color:#d9dfeb;
				background-color:rgb(59,89,152);
				text-align:center;
			}

			#bar2
			{
				width:800px;
				height:520px;
				margin:auto;
				background-color:grey;
				margin-top:50px;
				font-size:30px ;
				text-align:center;
			}
			#admin_login
			{
				
				width:70px;
				text-align:center;
				padding:10px;
				border-radius:5px;
				margin-left:1400px;
				margin-bottom:250px;
				margin-top:-25px;
			}


			#back_to_dash
			{
				margin-left:-1400px;
				margin-top:-300px;

			}


	</style>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	</head>
	<body>

		<div id="bar">
	<div style="font-size:50px">Welcome to Admin Dashboard</div>
	<div id="admin_login"><a href="logout.php"><button type="submit" class="btn btn-danger">Logout</button></a></div>
	<div id="back_to_dash"><a href="admindash.php"><button type="submit" class="btn btn-danger">Back to Dashboard</button></a></div>
</div>
<div id ="bar2">
	<p style="margin-top:10px">Add student details</p>

	<form method = "post" action="addstudent.php" enctype="multipart/form-data">
		<div class="form-group">
    <label for="email" style="margin-top:15px">Rollno:</label>
    <input type="number" name="rno" required>
  </div>
  <div class="form-group">
    <label for="pwd" style="margin-top:15px;margin-left:-48px;">Full Name:</label>
    <input type="text" name="fname" required>
  </div>
  <div class="form-group">
    <label for="name" style="margin-top:15px;margin-left:30px">City:</label>
    <input type="text" name="city" required>
  </div>
  <div class="form-group">
    <label for="name" style="margin-top:15px;margin-left:-60px">Parents No:</label>
    <input type="tel" name="pcon" required>
  </div>
  <div class="form-group">
    <label for="name" style="margin-top:15px;margin-left:-30px">Standard:</label>
    <input type="number" name="std" required>
  </div>
  <div class="form-group">
    <label for="name" style="margin-top:15px;margin-left:155px">Image</label>
    <input type="file" name="simg" required>
</div>

  <button type="submit" class="btn btn-primary" style="margin-top:25px" name="submit">Submit</button>
</form>


</body>
</html>

<?php

  if(isset($_POST['submit']))
  {
  	 include('../dbcon.php');

  	 $rolno = $_POST['rno'];
  	 $fname = $_POST['fname'];
  	 $city  = $_POST['city'];
  	 $pcon  = $_POST['pcon'];
  	 $std   = $_POST['std'];
  	 $imagename  = $_FILES['simg']['name'];
  	 $tempname   = $_FILES['simg']['tmp_name'];

  	 move_uploaded_file($tempname,"../dataimg/$imagename");

  	 $qry = "INSERT INTO `students`(`rollno`, `name`, `city`, `pcont`, `standard`,`image`) VALUES ('$rolno','$fname','$city','$pcon','$std','$imagename')";

  	 $run = mysqli_query($conn,$qry);
  	 if($run == true)
  	 {
  	 	?>

  	 	<script>
  	 			alert("Data inserted successfully");
  	 	</script>
  	 	<?php
  	 }
  }

?>