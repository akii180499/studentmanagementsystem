
<?php

session_start();

if(isset($_SESSION['uid']))
{
	//echo "";
}
else{
	
	header('location: ../login.php');
}


?>




<html>



<head>

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

			#bar2
			{
				width:1200px;
				height:720px;
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
	<div style="font-size:50px">Welcome to Admin Dashboard</div>
	<div id="admin_login"><a href="logout.php"><button type="submit" class="btn btn-danger">Logout</button></a></div>
	<div id="back_to_dash"><a href="admindash.php"><button type="submit" class="btn btn-danger">Back to Dashboard</button></a></div>
</div>
<div id ="bar2">
<p style="margin-top:10px">Delete Student</p>
<form action="deletestudent.php" method="post">
<div class="form-group">
    <label for="email" style="margin-top:15px">Standard:</label>
    <input type="number" name="std" >
  </div>
  <div class="form-group">
    <label for="pwd" style="margin-top:30px;margin-left:-15px;">Full Name:</label>
    <input type="text" name="fname">
</div>
    <button type="submit" class="btn btn-primary" style="margin-top:25px" name="submit">Search</button>
</form>
  
<table>
  <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead>
            <tr>
                <th class="text-center">S.No.</th>
                <th class="text-center">Image</th>
                <th class="text-center">Name</th>
                <th class="text-center">Roll no</th>
                <th class="text-center">Delete</th>
            </tr>
        </thead>
        <tbody>
     




<?php

 if(isset($_POST['submit']))
 {
 	include('../dbcon.php');

 	$standard = $_POST['std'];
 	$name     = $_POST['fname'];

 	$qry = "SELECT * FROM `students` WHERE `standard` = '$standard' AND `name` LIKE '%$name%'";
 	$run = mysqli_query($conn,$qry);

 	if(mysqli_num_rows($run)<1)
 	{
 		echo "NO record found";
 	}
 	else
 	{
 		$count = 0;
		while($data=mysqli_fetch_assoc($run))
 		{
 				$count++;

				 				?>

				 				 <tr align="center">
            <td class="py-2"><?php echo $count;?></td>
            <td class="py-2"><img src="../dataimg/<?php echo $data['image']?>" style="max-width:100px;"/></td>
            <td class="py-2"><?php echo $data['name']; ?></td>
            <td class="py-2"><?php echo $data['rollno']; ?> </td>
            <td class="py-2"><a href="deleteform.php?sid=<?php echo $data['id'];?>"><button class="btn btn-primary">Delete</button></a></td>
           
            	<?php
 		}
 	}

 }
 ?>

</tr>
</tbody>
</table>
 </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>
