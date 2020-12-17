<?php
   if(isset($_POST['update']))
   	{
   		include_once("../../../configuration/configuration.php");
		include_once("../../../connection/connection.php");
   		$description= $_POST['description'];
		$vision= $_POST['vision'];
		$mission= $_POST['mission'];
		$motto=$_POST['motto'];
		$coreValues=$_POST['coreValues'];
		$image = addslashes (file_get_contents($_FILES["image"]["tmp_name"]));
		if ($image == NULL){
			$sql = "UPDATE about SET `description` = '$description', `vision` ='$vision', `mission` = '$mission', `motto` = '$motto', `coreValues` = '$coreValues'";
			if(mysqli_query($con, $sql)){
	    	header("Location: ".ROOT_URL."/admin/admin.php?page=about&pageName=index.php");
			} 
			else{
	    	echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
			}
		 }
		else{
			$sql = "UPDATE about SET `coverimmg` = '$image', `description` = '$description', `vision` ='$vision', `mission` = '$mission', `motto` = '$motto', `coreValues` = '$coreValues'";
			if(mysqli_query($con, $sql)){
	    	header("Location: ".ROOT_URL."/admin/admin.php?page=about&pageName=index.php");
			} 
			else{
	    	echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
			}
		}
	}
?>