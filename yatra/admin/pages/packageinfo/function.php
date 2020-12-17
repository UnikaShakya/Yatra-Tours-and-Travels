<?php
if(isset($_POST['insert']))
{
	packageinfoAdd();
}
elseif(isset($_POST['update']))
{
	packageinfoUpdate();
}
elseif (isset($_GET['id'])) {
	if ($_GET['action'] == 'delete') {
	packageinfoDelete();
	}
}
	function packageinfoAdd()
	{	
		include_once("../../../configuration/configuration.php");
		include_once("../../../connection/connection.php");
		$topic =$_POST['topic'];
		$topicDesc =$_POST['topicDesc'];
		$pid=$_POST['packageName'];
		$index=$_POST['index'];		
		$status=$_POST['status'];
		$sql = "INSERT INTO `packageinfo` (`id`, `topic`, `topicDesc`, `index`, `status`, `pid`) VALUES (NULL, '$topic', '$topicDesc', '$index', '$status', '$pid')";			//record the data into database
		if(mysqli_query($con, $sql)){
    	header("Location: ".ROOT_URL."/admin/admin.php?page=packageinfo&pageName=index.php");
		} 
		else{
    	echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
		}
	}	

	function packageinfoUpdate()
	{
		session_start();
		$id = $_SESSION['id'];	
		include_once("../../../configuration/configuration.php");
		include("../../../connection/connection.php");
		$topic =$_POST['topic'];
		$topicDesc =$_POST['topicDesc'];
		$pid=$_POST['packageName'];
		$index=$_POST['index'];		
		$status=$_POST['status'];
		$sql = "UPDATE `packageinfo` SET `topic` = '$topic', `topicDesc` = '$topicDesc', `pid` = '$pid' WHERE `packageinfo`.`id` = '$id'";
		unset($_SESSION['id']);
		if(mysqli_query($con, $sql)){
    	header("Location: ".ROOT_URL."/admin/admin.php?page=packageinfo&pageName=index.php");
		} 
		else{
    	echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
		}
		
	} 
	
	function packageinfoDelete()
	{	
		include_once("../configuration/configuration.php");
		include("../connection/connection.php");
	 	$sql = "DELETE FROM `packageinfo` WHERE `packageinfo`.`id` =". $_GET['id'];
		if(mysqli_query($con, $sql)){
	  	echo ("Deleted $file");
    	header("Location: ".ROOT_URL."/admin/admin.php?page=packageinfo&pageName=index.php");
    	}else{
    	echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
		}			 
	}
?>