<?php

session_start();
if(isset($_SESSION['uid']))
{
	header('location:admin/admindash.php');
}
?>

<html>
<head>
	<title>Student management system</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
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
				height:500px;
				margin:auto;
				background-color:grey;
				margin-top:50px;
				font-size:30px ;
				text-align:center;
			}


			

			
			
	</style>
</head>
<body>
<div id="bar">
	<div style="font-size:50px">Admin Login</div>
</div>

<div id ="bar2">
	<p>Login</p>

	<form action="login.php" method='post'>
  <div id="form1">
    <label for="exampleInputEmail1">Username:</label>
    <input type="text" name='uname'  placeholder="Enter username" style="margin-top:90px">
  </div>
  <div id="form2">
    <label for="exampleInputPassword1">Password:</label>
    <input type="password" placeholder="Password" name='pass'style="margin-top:10px">
  </div>
  <button type="submit" class="btn btn-primary" name="login" style="margin-top:25px;">Submit</button>
  </form>
	
	</body>
	</html>

<?php

include('dbcon.php');


if(isset($_POST['login']))
{
	$username = $_POST['uname'];
	$password = $_POST['pass'];


$query = "SELECT * FROM `admins` WHERE `username`='$username' AND `password`='$password'";
$run=mysqli_query($conn,$query);
$row = mysqli_num_rows($run);
if($row < 1)
{
	?>
	<script>
		alert('Username or password does not match!!!');
		window.open('login.php','_self');
	</script>
	<?php
}
else
{
	$data = mysqli_fetch_assoc($run);
	$id = $data['id'];
	echo "id".$id;

	

	$_SESSION['uid'] = $id;
	header('location:admin/admindash.php');
}
}
