<?php
if(isset($_POST['insert']))
{
	scheduleAdd();
}
elseif(isset($_POST['update']))
{
	scheduleUpdate();
}
elseif (isset($_GET['id'])) {
	if ($_GET['action'] == 'delete') {
	scheduleDelete();
	}
}

function scheduleAdd() {
	session_start();
	$pid = $_SESSION['pid'];
	$day = $_POST['day'];
	$schedule = $_POST['schedule'];
	include_once("../../../configuration/configuration.php");
	include_once("../../../connection/connection.php");
	$sql = "INSERT INTO `schedule` (`id`, `day`, `schedule`, `pid`) VALUES (NULL, '$day', '$schedule', '$pid')";
	if(mysqli_query($con, $sql)){
	header("Location: ".ROOT_URL."/admin/admin.php?page=schedule&pageName=index.php");
	} 
	else{
	echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
	}
}

function scheduleUpdate() {
	session_start();
	$id = $_SESSION['id'];
	$day = $_POST['day'];
	$pid = $_SESSION['pid'];
	$schedule = $_POST['schedule'];	
	include_once("../../../configuration/configuration.php");
	include("../../../connection/connection.php");
	$sql = "UPDATE `schedule` SET `day` = '$day', `schedule` = '$schedule' WHERE `schedule`.`id` = '$id'";
	if(mysqli_query($con, $sql)){
	header("Location: ".ROOT_URL."/admin/admin.php?page=schedule&pageName=index.php");
	} 
	else{
	echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
	}
}

function scheduleDelete()
	{	
		include_once("../configuration/configuration.php");
		include("../connection/connection.php");
	 	$sql = "DELETE FROM `schedule` WHERE `schedule`.`id` =". $_GET['id'];
		if(mysqli_query($con, $sql)){
	  	echo ("Deleted $file");
    	header("Location: ".ROOT_URL."/admin/admin.php?page=schedule&pageName=index.php");
    	}else{
    	echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
		}			 
	}