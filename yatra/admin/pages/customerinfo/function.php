<?php
if (isset($_GET['id'])) {
	if ($_GET['action'] == 'delete') {
	customerinfoDelete();
	}
}
	function customerinfoDelete()
	{	
		include_once("../configuration/configuration.php");
		include("../connection/connection.php");
	 	$sql = "DELETE FROM `customerinfo` WHERE `customerinfo`.`id` =". $_GET['id'];
		if(mysqli_query($con, $sql)){
	  	echo ("Deleted $file");
    	header("Location: ".ROOT_URL."/admin/admin.php?page=customerinfo&pageName=index.php");
    	}else{
    	echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
		}			 
	}
?>