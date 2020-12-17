<?php
if(isset($_POST['insert']))
{
	packagesAdd();
}
elseif(isset($_POST['update']))
{
	packagesUpdate();
}
elseif(isset($_POST['pinfoupdate']))
{
	packagesinfoUpdate();
}
elseif (isset($_GET['id'])) {
	if ($_GET['action'] == 'delete') {
	packagesDelete();
	}
}
	function packagesAdd()
	{	
		include_once("../../../configuration/configuration.php");
		include_once("../../../connection/connection.php");
		$image = addslashes (file_get_contents($_FILES["image"]["tmp_name"]));
		$packageName= $_POST['name'];
		$packageDesc= $_POST['packageDesc'];
		$s_point= $_POST['s_point'];
		$destination= $_POST['destination'];
		$caption= $_POST['caption'];
		$route= $_POST['route'];
		$price_economic= $_POST['price_economic'];
		$price_deluxe= $_POST['price_deluxe'];
		$days = $_POST['day'];	
		$type= $_POST['type'];	
		$status=$_POST['status'];
		$sql = "INSERT INTO `package` (`id`, `image`, `packageName`, `packageDesc`, `s_point`, `destination`, `caption`, `route`, `price_economic`, `price_deluxe`, `days`, `type`, `status`) 
		VALUES (NULL, '$image', '$packageName', '$packageDesc', '$s_point', '$destination', '$caption', '$route', '$price_economic', '$price_deluxe', '$days', '$type', '$status')";			//record the data into database
		if(mysqli_query($con, $sql)){
    	header("Location: ".ROOT_URL."/admin/admin.php?page=packages&pageName=index.php");
		} 
		else{
    	echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
		}
	}	

	function packagesUpdate()
	{
		session_start();
		$id = $_SESSION['pid'];
		echo $id;	
		include_once("../../../configuration/configuration.php");
		include("../../../connection/connection.php");
		$image = addslashes (file_get_contents($_FILES["image"]["tmp_name"]));
		$packageName= $_POST['name'];
		$packageDesc= $_POST['packageDesc'];
		$s_point= $_POST['s_point'];
		$destination= $_POST['destination'];
		$caption= $_POST['caption'];
		$route= $_POST['route'];
		$price_economic= $_POST['price_economic'];
		$price_deluxe= $_POST['price_deluxe'];
		$days= $_POST['day'];
		$type= $_POST['type'];	
		$status=$_POST['status'];
		if($image == NULL ){
			$sql = "UPDATE `package` SET `packageName` = '$packageName', `packageDesc` = '$packageDesc', `s_point` = '$s_point', `destination` = '$destination', `caption` = '$caption', `route` = '$route', `price_economic` = '$price_economic', `price_deluxe` = '$price_deluxe', `days` = '$days', `type` = '$type', `status` = '$status' WHERE `package`.`id` = '$id'";
			unset($_SESSION['id']);
			if(mysqli_query($con, $sql)){
			ob_end_clean( );
	    	header("Location: ".ROOT_URL."/admin/admin.php?page=packages&pageName=index.php");
			} 
			else{
	    	echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
			}
		 }
		else{
			$sql = "UPDATE `package` SET `image` = '$image',`packageName` = '$packageName', `packageDesc` = '$packageDesc', `s_point` = '$s_point', `destination` = '$destination', `caption` = '$caption', `route` = '$route', `price_economic` = '$price_economic', `price_deluxe` = '$price_deluxe', `days` = '$days', `type` = '$type', `status` = '$status' WHERE `package`.`id` = '$id'";
			unset($_SESSION['id']);
			if(mysqli_query($con, $sql)){
			ob_end_clean( );
	    	header("Location: ".ROOT_URL."/admin/admin.php?page=packages&pageName=index.php");
			} 
			else{
	    	echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
			}
		}
		
	} 
	
	function packagesDelete()
	{	
		include_once("../configuration/configuration.php");
		include("../connection/connection.php");
	 	$sql = "DELETE FROM `package` WHERE `package`.`id` =". $_GET['id'];
		if(mysqli_query($con, $sql)){
	  	echo ("Deleted $file");
    	header("Location: ".ROOT_URL."/admin/admin.php?page=packages&pageName=index.php");
    	}else{
    	echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
		}			 
	}

	function packagesinfoUpdate()
	{
		include_once("../../../configuration/configuration.php");
		include("../../../connection/connection.php");
		$p_details=$_POST['p_details'];
		$r_time=$_POST['r_time'];
		$sql="update packageinfo set p_details='$p_details', r_time='$r_time'";
		mysqli_query($con,$sql);
		if(mysqli_query($con, $sql)){
			ob_end_clean( );
			header("Location: ".ROOT_URL."/admin/admin.php?page=packages&pageName=index.php");
			echo("*packages has been updated");
		}
		else{
	    	echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
		}
	}
?>