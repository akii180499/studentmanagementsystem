<?php

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'sms';


$conn = mysqli_connect($host,$username,$password,$dbname);

if(!$conn)
{
	//echo "Connection not successful";
}
else
{
	//echo "Connection successful";
}



?>