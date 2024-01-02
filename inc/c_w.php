<?php
function c_w($con,$user_id,$ad_list_id)
{
	$qs="select * from wishlist where user_id='$user_id' and wish_adlist_id='$ad_list_id'";
	
	$data=mysqli_query($con,$qs) or die(mysqli_error($con));
	if(mysqli_num_rows($data)>0)
	{
		return 1;
	}
	else
	{
		return 0;
	}
}
?>