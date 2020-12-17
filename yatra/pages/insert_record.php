<?php include('../connection/connection.php') ?>
<?php include ('../configuration/configuration.php') ?>
<?php

    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$phone=$_POST['phone'];
	$package=$_POST['package'];
    $hotel=$_POST['hotel'];
    $in=$_POST['in'];
    $out=$_POST['out'];
    $transport=$_POST['transport'];
    if($firstname==null || $lastname==null || $phone==null || $package==null || $_hotel=
    	Null || $transport=null)
	{
		echo '<script type="text/javascript">';
	    echo'alert("Please compulsarily fill all the field with *");';
	    echo "window.location = '".ROOT_URL."../pages/form.php';";
	    echo '</script>';
	}
	else
	{
		$sql="INSERT INTO `record`(`Sn`, `Firstname`, `Lastname`, `Email`, `Address`, `Phone`, `Package`, `Hotel`, `Check-in`, `Check-out`, `Transportation`) VALUES (NULL,'$firstname','$lastname','$email','$address','$phone','$package','$hotel','$in','$out','$transport')";
		echo '<script type="text/javascript">';
        echo'alert("Your Ticket Has Been Successfully Booked");';
        echo "window.location = '".ROOT_URL."../pages/form.php';";
        echo '</script>';
		mysqli_query($con,$sql);
		header("Location:../pages/form.php");
	}
?>



