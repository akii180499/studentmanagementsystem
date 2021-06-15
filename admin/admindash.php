<?php

session_start();

		if(isset($_SESSION['uid']))
		{
			//echo $_SESSION['uid'];
		}
		else
		{
			header('location: ../login.php');
		}


?>


<html>
<head>
	<title>
		Student Management System
	</title>
	<style>
		#bar
			{
				height:100px;
				color:#d9dfeb;
				background-color:rgb(59,89,152);
				text-align:center;
			}
		#container
		{
				width:1200px;
				height:600px;
				margin:auto;
				background-color:grey;
				margin-top:50px;
		}
		
		#btn_1
		{
			margin-left:190px;
			margin-top:10px;
		}
		

		

		
		
	</style>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>
<body>
	<div id="bar">
	<div style="font-size:50px">Welcome to Admin Dashboard</div>

</div>
<div class="row activity text-center">
                  <div class="col-md act">
                    <img src="add.jpg" class="img-fluid" style="margin-top:150px">
                    <br>
                    <a href="addstudent.php"><button type="button" class="btn btn-primary" style="margin-top:8px">Add</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="update.jpg" class="img-fluid" style="margin-top:150px">
                    <br>
                    <a href="updatestudent.php"><button type="button" class="btn btn-primary" style="margin-top:22px">Update</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="del.jpg" class="img-fluid" style="margin-top:150px;height:220px">
                    <br>
                    <a href="deletestudent.php"><button type="button" class="btn btn-primary" style="margin-top:8px">Delete</button></a>
                  </div>
            </div>
	
</body>