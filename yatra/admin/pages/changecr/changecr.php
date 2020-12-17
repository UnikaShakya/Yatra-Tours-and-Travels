<?php require_once("../connection/connection.php") ?>
<!--overview start-->
<div class="row">
  <div class="col">
    <ol class="block">
         <i class="fa fa-home"></i> <?php echo "<a href='".ROOT_URL."/admin/admin.php?page=home'>Home</a>" ?> | About
    </ol>
  </div>
</div>
<!-- End of overview-->
<html>
<head>
<style>
	table {
		padding:20;
    		margin: 100px 300px;
		}
	    h1{font-family:'comic sans ms';
		 font-style:'italic';}
	   .aa{
		font-size:20;
		height:30;
		width:200;
		} 
</style>
</head>
<body>
<form action="" method="post">
	<table bgcolor="white" cellspacing=20>
	<?php
	if(isset($_POST['submit']))
	{
		$uname=$_POST['name'];
		$psd=$_POST['psd'];
		$tpsd=$_POST['psd1'];
	  	if($uname=="" || $psd=="" || $tpsd=="")
		{
		echo "<tr>";
			echo "<td colspan=2><font color='red' size=4> you can't have an empty field.</font></td>";
		echo "</tr>";
		}
		else
		{
			if($psd==$tpsd)
			{
				$sql="update admin set username='$uname', password='$psd'";
				mysqli_query($con,$sql);
				echo "<tr>";
			    	echo "<td colspan=2><font color='red' size=4>* the credentials have been changed.</font></td>";
		            	echo "</tr>";				
				mysqli_close($con);
			}
			else
			{
			    echo "<tr>";
			    echo "<td colspan=2><font color='red' size=4>* the passwords didn't match.</font></td>";
		            echo "</tr>";
			}
		}
	}
	?>
	<tr>
		<center><td><i class="fas fa-user" style="font-size:50px"></i></td></center>
		<th><h2 style="font-family:'comic sans ms'; color:cadetblue;"><u>Change credentials</u></h2></th>
	</tr>
	<tr>
		<td>Username:</td>
		<td><input type="text" name="name"></td>
	</tr>
	<tr>
		<td>Password:</td>
		<td><input type="password" name="psd"></td>
	</tr>
	<tr>
		<td>Confirm Password:</td>
		<td><input type="password" name="psd1"></td>
	</tr>
	<tr>
		<th colspan=2><input type="submit" name="submit" value="Submit" class="aa"></th>
	</tr>
	</table>
    </form>
</body>
</html>