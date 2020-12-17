<?php
if(isset($_POST['insert']))
{
	sliderAdd();
}
elseif(isset($_POST['update']))
{
	sliderUpdate();
}
elseif (isset($_GET['id'])) {
	if ($_GET['action'] == 'delete') {
	sliderDelete();
	}
}
	function sliderAdd()
	{	
		include_once("../../../configuration/configuration.php");
		include_once("../../../connection/connection.php");
		$name=$_POST['name'];
		$title=$_POST['title'];
		$image = addslashes (file_get_contents($_FILES["image"]["tmp_name"]));
		$sql = "insert into slider(`id`, `image`, `name`, `title`) VALUES (NULL, '$image', '$name', '$title')";			//record the data into database
		if(mysqli_query($con, $sql)){
		ob_end_clean( );
    	header("Location: ".ROOT_URL."/admin/admin.php?page=slider&pageName=index.php");
		} 
		else{
    	echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
		}
	}	

	function sliderUpdate()
	{
		session_start();
		$id = $_SESSION['id'];	
		include_once("../../../configuration/configuration.php");
		include("../../../connection/connection.php");
		$name=$_POST['name'];
		$image = addslashes (file_get_contents($_FILES["image"]["tmp_name"]));
		$title=$_POST['title'];
		if ($image == NULL){
			$sql = "UPDATE slider SET `name` = '$name', `title` = '$title' WHERE `slider`.`id` = '$id'";
			unset($_SESSION['id']);
		}
		else{
			$sql = "UPDATE slider SET `image` = '$image', `name` = '$name', `title` = '$title' WHERE `slider`.`id` = '$id'";
			unset($_SESSION['id']);
		}
		if(mysqli_query($con, $sql)){
		ob_end_clean( );
		header("Location: ".ROOT_URL."/admin/admin.php?page=slider&pageName=index.php");
		} 
		else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
		}
	 }	 
	
	function sliderDelete()
	{	
		include_once("../configuration/configuration.php");
		include("../connection/connection.php");
		$id=$_GET['id'];
		$sql="delete from slider where id=$id";
		ob_end_clean( );
		if(mysqli_query($con, $sql)){
	  	echo ("Deleted $file");
    	header("Location: ".ROOT_URL."/admin/admin.php?page=slider&pageName=index.php");
    	}else{
    	echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
		}
	}
?>

