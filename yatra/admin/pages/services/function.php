<?php
if(isset($_POST['insert']))
{
	servicesAdd();
}
elseif(isset($_POST['update']))
{
	servicesUpdate();
}
elseif (isset($_GET['id'])) {
	if ($_GET['action'] == 'delete') {
	servicesDelete();
	}
}

function servicesAdd()
{
	include_once("../../../configuration/configuration.php");
	include_once("../../../connection/connection.php");
	$name=$_POST['name'];
	$image = addslashes (file_get_contents($_FILES["image"]["tmp_name"]));
	$location=$_POST['location'];
	$price=$_POST['price'];
	$phone=$_POST['phone'];
	$link=$_POST['link'];
	$pid = $_POST['packageName'];
	$category=$_POST['rating'];
	$sql = "INSERT INTO `services` (`id`, `image`, `name`, `pid`, `category`, `price`, `location`, `phone`, `link`) VALUES (NULL, '$image', '$name', '$pid', '$category', '$price', '$location', '$phone', '$link')";			//record the data into database
	if(mysqli_query($con, $sql)){
	ob_end_clean( );
	header("Location: ".ROOT_URL."/admin/admin.php?page=services&pageName=index.php");
	} 
	else{
	echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
	}
}

function servicesUpdate()
{
	session_start();
	$id = $_SESSION['id'];	
	include_once("../../../configuration/configuration.php");
	include("../../../connection/connection.php");
	$name=$_POST['name'];
	$image = addslashes (file_get_contents($_FILES["image"]["tmp_name"]));
	$location=$_POST['location'];
	$price=$_POST['price'];
	$phone=$_POST['phone'];
	$link=$_POST['link'];
	$pid = $_POST['packageName'];
	$category=$_POST['rating'];
	if($image == NULL ){
		$sql = "UPDATE services SET `name` = '$name', `pid` = '$pid', `category` = '$category', `price` = '$price', `location` = '$location', `phone` = '$phone', `link` = '$link' WHERE `services`.`id` = '$id'";
		unset($_SESSION['id']);
	 }
	else{
		$sql = "UPDATE services SET `image` = '$image', `name` = '$name', `pid` = '$pid', `category` = '$category', `price` = '$price', `location` = '$location', `phone` = '$phone', `link` = '$link' WHERE `services`.`id` = '$id'";
		unset($_SESSION['id']);
	}
	if(mysqli_query($con, $sql)){
	ob_end_clean( );
	header("Location: ".ROOT_URL."/admin/admin.php?page=services&pageName=index.php");
	} 
	else{
	echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
	}
}

function servicesDelete()
{
	include_once("../configuration/configuration.php");
	include("../connection/connection.php");
	$id=$_GET['id'];
	$sql="delete from services where id=$id";
	ob_end_clean( );
	if(mysqli_query($con, $sql)){
  	echo ("Deleted $file");
	header("Location: ".ROOT_URL."/admin/admin.php?page=services&pageName=index.php");
	}else{
	echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
	}	
}
?>