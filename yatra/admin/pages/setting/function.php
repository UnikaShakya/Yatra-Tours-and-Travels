<?php
   if(isset($_POST['update']))
   	{
   		include_once("../../../configuration/configuration.php");
		include_once("../../../connection/connection.php");
		$name= $_POST['companyName'];
		$address= $_POST['address'];
		$contact= $_POST['contactNumber'];
		$email=$_POST['email'];
		$website=$_POST['website'];
		$gmap=$_POST['googleMap'];
		$fb=$_POST['facebookPage'];
		$yt=$_POST['youtubeLink'];
		$twit=$_POST['twitterPage'];
		$insta=$_POST['instragramPage'];
		$image = addslashes (file_get_contents($_FILES["image"]["tmp_name"]));
		if ($image == NULL){
			$sql = "UPDATE company SET `c_name` = '$name', `address` ='$address', `contact` = '$contact', `email` = '$email', `website` = '$website', `gmap` = '$gmap', `fb` = '$fb', `youtube` = '$yt', `twit` = '$twit', `insta` = '$insta'";
	 	}
		else{
			$sql = "UPDATE company SET `logo` = '$image', `c_name` = '$name', `address` ='$address', `contact` = '$contact', `email` = '$email', `website` = '$website', `gmap` = '$gmap', `fb` = '$fb', `youtube` = '$yt', `twit` = '$twit', `insta` = '$insta'";
		}
		if(mysqli_query($con, $sql)){
			ob_end_clean( );
    		header("Location: ".ROOT_URL."/admin/admin.php?page=setting&pageName=index.php");
		} 
		else{
    		echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
		}
	}
?>