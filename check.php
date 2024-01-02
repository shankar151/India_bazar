<?php
include('inc/config.php');

$mobile = $_GET['mobile'];
$qs = "select * from user where mobile = '$mobile'";
$data = mysqli_query($con,$qs);

if(mysqli_num_rows($data>0))
{
	echo "data found";
}
else
{
	echo "data not found";
}
?>