<?php
	session_start();
	include('inc/config.php');
	
	$ad_list_id="";
	$user_id="";
	
	$user_id=$_SESSION['user_id'];
	$ad_list_id=$_GET['ad_list_id'];
	
	$qs="select * from wishlist where wish_adlist_id='$ad_list_id'";
	$data=mysqli_query($con,$qs);
	
	$row=mysqli_fetch_array($data);
	
	if(mysqli_num_rows($data)>0)
	{
		$qs="delete from wishlist where wish_adlist_id='$ad_list_id'";
		
	}
	else
	{
		$qs="insert into wishlist(user_id,wish_adlist_id)values('$user_id','$ad_list_id')";
		
	}
	mysqli_query($con,$qs) or die(mysqli_error($con));
	
	?>
