<?php
if(isset($_POST['insert']))
{
	teamAdd();
}
elseif(isset($_POST['update']))
{
	teamUpdate();
}
elseif (isset($_GET['id'])) {
	if ($_GET['action'] == 'delete') {
	teamDelete();
	}
}
	function teamAdd()
	{	
		include_once("../../../configuration/configuration.php");
		include_once("../../../connection/connection.php");
		$name=$_POST['name'];
		$position =$_POST['position'];
		$email=$_POST['email'];
		$contact=$_POST['contact'];
		$image = addslashes (file_get_contents($_FILES["image"]["tmp_name"]));
		$sql = "INSERT INTO `team` (`id`, `image`, `name`, `position`, `email`, `contact`) VALUES (NULL, '$image', '$name', '$position', '$email', '$contact')";			//record the data into database
		if(mysqli_query($con, $sql)){
		ob_end_clean( );
    	header("Location: ".ROOT_URL."/admin/admin.php?page=team&pageName=index.php");
		} 
		else{
    	echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
		}
	}	

	function teamUpdate()
	{
		session_start();
		$id = $_SESSION['id'];	
		include_once("../../../configuration/configuration.php");
		include("../../../connection/connection.php");
		$name=$_POST['name'];
		$position =$_POST['position'];
		$email=$_POST['email'];
		$contact=$_POST['contact'];
		$image = addslashes (file_get_contents($_FILES["image"]["tmp_name"]));
		if ($image == NULL){
			$sql = "UPDATE team SET `name` = '$name', `position` ='$position', `email` = '$email', `contact` = '$contact' WHERE `team`.`id` = '$id'";
			unset($_SESSION['id']);
		 }				
		else{
			$sql = "UPDATE team SET `image` = '$image', `name` = '$name', `position` ='$position', `email` = '$email', `contact` = '$contact' WHERE `team`.`id` = '$id'";
			unset($_SESSION['id']);
		}
		if(mysqli_query($con, $sql)){
			ob_end_clean( );
    		header("Location: ".ROOT_URL."/admin/admin.php?page=team&pageName=index.php");
		} 
		else{
    		echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
		}
	} 
	
	function teamDelete()
	{	
		include_once("../configuration/configuration.php");
		include("../connection/connection.php");
	 	$sql = "DELETE FROM `team` WHERE `team`.`id` =". $_GET['id'];
		if(mysqli_query($con, $sql)){
			ob_end_clean( );
		  	echo ("Deleted $file");
	    	header("Location: ".ROOT_URL."/admin/admin.php?page=team&pageName=index.php");
    	}
    	else{
    		echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
		}
	 }
?>