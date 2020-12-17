<?php
    @session_start();
?>
<html>
<head>
<title>login page</title>
	<style type="text/css">
	    body{
		 background-image: url("../img/background/green.jpg");
    		height: 100%; 
    		background-position: center;
   		 background-repeat: no-repeat;
    		background-size: cover;
		}
	    table {
		padding:20;
    		margin: 100px 500px;
		}
	    h1{font-family:'comic sans ms';
		 font-style:'italic';}
	   .aa{
		font-size:20;
		height:30;
		width:200;
		} 
	</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php include  '../connection/connection.php';?>
</head>
   <body>
	<form action="" method="post">
	<table bgcolor="white" cellspacing=20>
	<?php
   if(isset($_POST['submit']))
   {
	
	$result=mysqli_query($con,"select * from admin");
	if($result==false)
	{
	  echo "error";
	}
	else
	{
	$row=mysqli_fetch_array($result);
	}
	if($_POST['name']==$row['username'] && $_POST['psd']==$row['password'])
	{
		mysqli_close($con);
		$_SESSION['flag']=1;
		header("location:admin.php");
	}
	else {
	echo "<tr>";
		mysqli_close($con);
		echo "<th colspan=2>"."<font color='red' size=5>"."Wrong username or password!!!"."</font>"."</th>";
	echo "</tr>";
	    }
	}
?>
	<tr>
		<th colspan=2><h1>Log in</h1></th>
	</tr>
	<tr>
	    <th colspan=2><img src="../img/logo/icon.png" height=100 width=100></center></th>
	</tr>
	<tr>
		<td colspan=2><hr></td>
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
		<th colspan=2><input type="submit" name="submit" value="Log-in" class="aa"></th>
	</tr>
	</table>
	</form>
</body>
</html>
