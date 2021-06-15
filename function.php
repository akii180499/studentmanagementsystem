<html>
<head>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>


</head>
</html>


<?php

function show_details($standard,$rollno)
{
	include('dbcon.php');

	$qry = "SELECT * FROM `students` WHERE `standard`='$standard' AND `rollno` ='$rollno'";
	$run = mysqli_query($conn,$qry);
	if(mysqli_num_rows($run)>0)
	{
		$data = mysqli_fetch_assoc($run);
		?>

		<table>
  <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered" style="margin-top:18px">
        <thead>
            <tr>
                <th class="text-center">Image</th>
                <th class="text-center">Name</th>
                <th class="text-center">Roll no</th>
                <th class="text-center">Parents Contact</th>
                <th class="text-center">Standard</th>
                <th class="text-center">City</th>
            </tr>
        </thead>
        <tbody>
     






			<tr align="center">
            <td class="py-2"><img src="dataimg/<?php echo $data['image']?>" style="max-width:100px;"/></td>
            <td class="py-2"><?php echo $data['name']; ?></td>
            <td class="py-2"><?php echo $data['rollno']; ?> </td>
            <td class="py-2"><?php echo $data['pcont']; ?> </td>
            <td class="py-2"><?php echo $data['standard']; ?> </td>
            <td class="py-2"><?php echo $data['city']; ?> </td>
            
           


		<?php
	}
	
	else
	{
		
		?>
	       <script>alert('No record Found')</script>;

<?php
	}
}		

?>

