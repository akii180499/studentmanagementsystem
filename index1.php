<html>
<head>
	<title>Student management system</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	<style>
			#bar
			{
				height:150px;
				color:#d9dfeb;
				background-color:rgb(59,89,152);
			}

			#bar2
			{
				width:1200px;
				height:600px;
				margin:auto;
				background-color:grey;
				margin-top:50px;
				font-size:30px ;
				text-align:center;
			}

			p
			{
				margin-top:20px;
			}

			#admin_login
			{
				background-color: #42b72a;
				width:70px;
				text-align:center;
				padding:10px;
				border-radius:5px;
				margin-left:1400px;
				margin-bottom:250px;
			}

	</style>
</head>
<body>
<div id="bar">
	<div style="font-size:50px">Student Management system</div>
	<div id="admin_login"><a href="login.php">Admin Login</a></div>
</div>
<div id ="bar2">
	<p>Student information</p>
	<form method="post" action="index1.php">
	<table align="center" style="margin-top:110px;" >
			<tr>
				<td colspan="2">Student Information</td>
			</tr>

			<tr>
				<td align="center">Choose Standard</td>
				<td>
				<select name="std">
						<option value="1">1st</option>
						<option value="2">2nd</option>
						<option value="3">3rd</option>
						<option value="4">4th</option>
						<option value="5">5th</option>
						<option value="6">6th</option>
						<option value="7">7th</option>
						<option value="8">8th</option>
						<option value="9">9th</option>
						<option value="10">10th</option>
				</td>
				</select>

			</tr>

			<tr>
				<td>Enter Rollno</td>
				<td><input type="text" name="rollno" required></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="submit" value="Showinfo" class="btn btn-primary"></td>
			</tr>
	</table>






	
<?php


if(isset($_POST['submit']))
{
	$standard = $_POST['std'];
	$rollno   = $_POST['rollno'];

	include('dbcon.php');
	include('function.php');
	show_details($standard,$rollno);
}

?>

