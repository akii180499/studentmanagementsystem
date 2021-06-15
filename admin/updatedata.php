<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>
</html>


<?php


include('../dbcon.php');

  	 $rolno = $_POST['rno'];
  	 $fname = $_POST['fname'];
  	 $city  = $_POST['city'];
  	 $pcon  = $_POST['pcon'];
  	 $std   = $_POST['std'];
  	 $id    = $_POST['sid'];
  	 $imagename  = $_FILES['simg']['name'];
  	 $tempname   = $_FILES['simg']['tmp_name'];

  	 move_uploaded_file($tempname,"../dataimg/$imagename");

  	 $qry = "UPDATE `students` SET `rollno` = '$rolno', `name` = '$fname', `city` = '$city', `pcont` = '$pcon', `standard` = '$std', `image` = '$imagename' WHERE `id` ='$id'";

  	 $run = mysqli_query($conn,$qry);
  	 if($run == true)
  	 {
  	 	?>

  	 	<script>
  	 			alert("Data updated successfully");
  	 			window.open('updateform.php?sid=<?php echo $id;?>','_self');
  	 	</script>
  	 	<?php
  	 }
  

?>











?>