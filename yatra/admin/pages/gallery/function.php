<?php
if(isset($_POST['insert']))
{
	galleryAdd();
}
elseif(isset($_POST['update']))
{
	galleryUpdate();
}
elseif (isset($_GET['id'])) {
	if ($_GET['action'] == 'delete') {
	galleryDelete();
	}
}
	function galleryAdd()
	{	
		include_once("../../../configuration/configuration.php");
		include_once("../../../connection/connection.php");
		$name=$_POST['name'];
		$pid=$_POST['packageName'];
		$status=$_POST['status'];
		$image = addslashes (file_get_contents($_FILES["image"]["tmp_name"]));
		$sql = "INSERT INTO `gallery` (`id`, `image`, `name`, `status`, `pid`) VALUES (NULL, '$image', '$name', '$status', '$pid')";			//record the data into database
		if(mysqli_query($con, $sql)){
    	header("Location: ".ROOT_URL."/admin/admin.php?page=gallery&pageName=index.php");
		} 
		else{
    	echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
		}
	}	

	function galleryUpdate()
	{
		session_start();
		$id = $_SESSION['id'];	
		include_once("../../../configuration/configuration.php");
		include("../../../connection/connection.php");
		$name=$_POST['name'];
		$pid=$_POST['packageName'];
		$image = addslashes (file_get_contents($_FILES["image"]["tmp_name"]));
		$status=$_POST['status'];
		if($image == NULL ){
			$sql = "UPDATE gallery SET `name` = '$name', `status` = '$status', `pid` = '$pid' WHERE `gallery`.`id` = '$id'";
			unset($_SESSION['id']);
			if(mysqli_query($con, $sql)){
			ob_end_clean( );
	    	header("Location: ".ROOT_URL."/admin/admin.php?page=gallery&pageName=index.php");
			} 
			else{
	    	echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
			}
		 }
		else{
			$sql = "UPDATE gallery SET `image` = '$image', `name` = '$name', `status` = '$status', `pid` = '$pid' WHERE `gallery`.`id` = '$id'";
			unset($_SESSION['id']);
			if(mysqli_query($con, $sql)){
			ob_end_clean( );
	    	header("Location: ".ROOT_URL."/admin/admin.php?page=gallery&pageName=index.php");
			} 
			else{
	    	echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
			}
		}
	}	 
	
	function galleryDelete()
	{	

		include_once("../configuration/configuration.php");
		include("../connection/connection.php");
		$id=$_GET['id'];
		$sql="DELETE FROM gallery WHERE `gallery`.`id`=$id";
		ob_end_clean( );
		if(mysqli_query($con, $sql)){
	  	echo ("Deleted $file");
    	header("Location: ".ROOT_URL."/admin/admin.php?page=slider&pageName=index.php");
    	}else{
    	echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
		}
	}
?>