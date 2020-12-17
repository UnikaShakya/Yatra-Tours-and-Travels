<?php include('../connection/connection.php') ?>
<?php include '../configuration/configuration.php'; ?>
<?php include('../common/header/header.php') ?>
<div class="section" >
<center>
<table align="center" width="100%" height="40%" border-radius=10px cellpadding=5px >
	<tr class="input" class="font">
		<th>Sn:</th>
		<th>First Name:</th>
        <th>Last Name:</th>
		<th>Email:</th>
		<th>Phone:</th>
		<th>Package:</th>
		<th>Hotel:</th>
		<th>Check-in:</th>
		<th>Check-out:</th>
		<th>Transportation:</th>
	</tr>
<?php
	$que='SELECT * FROM `record`';
	$result = mysqli_query($con, $que);
	$i=1;
	while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
	{
		echo "<tr align='center'>";
		echo "<td>" .$i ."</td>";
		echo "<td>" .$row['firstname'] ."</td>";
		echo "<td>" .$row['lastname'] ."</td>";
		echo "<td>" .$row['email'] ."</td>";
		echo "<td>" .$row['phone'] ."</td>";
		echo "<td>" .$row['package'] ."</td>";
		echo "<td>" .$row['hotel'] ."</td>";
		echo "<td>" .$row['in'] ."</td>";
		echo "<td>" .$row['out'] ."</td>";
		echo "<td>" .$row['transport'] ."</td>";
		$i++;

	}

?>
</table>
</center>
<center>
<form action="../home.php">
	<input type="submit" value="Go To Homepage" class="button">
</form>
</center>
</div>
</body>
</html>