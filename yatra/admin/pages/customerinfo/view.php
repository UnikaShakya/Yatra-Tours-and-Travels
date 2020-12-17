<section id="main-content" class="content">
<!--overview start-->
<div class="row">
  <div class="col-99">
    <ol class="block">
         <i class="fa fa-home"></i> <?php echo "<a href='".ROOT_URL."/admin/admin.php?page=home'>Home</a>" ?> | Customer Information
    </ol>
  </div>
</div>
<!-- End of overview-->
<?php
$id=$_GET['id'];
$result=mysqli_query($con,"select * from customer where id='$id'");
$row=mysqli_fetch_array($result);
?>
<table class="table">
	<tr>
	   <td>Ticket ID.:</td>
	   <td><?php echo $row['id']?></td>
	</tr>
	<tr>
	   <td>First Name:</td>
	   <td><?php echo $row['firstname']?></td>
	</tr>
	<tr>
	   <td>Last Name:</td>
	   <td><?php echo $row['lastname']?></td>
	</tr>
	<tr>
	   <td>Email:</td>
	   <td><?php echo $row['email']?></td>
	</tr>
	<tr>
	   <td>Address:</td>
	   <td><?php echo $row['address']?></td>
	</tr>
	<tr>
	   <td>Phone:</td>
	   <td><?php echo $row['phone']?></td>
	</tr>
	<tr>
	   <td>Package Booked:</td>
	   <td><?php echo $row['package']?></td>
	</tr>
	<tr>
	   <td>Package Type</td>
	   <td><?php echo $row['p_type']?></td>
	</tr>
	<tr>
	   <td>Check-in Date</td>
	   <td><?php echo $row['r_date']?></td>
	</tr>
	<tr>
	   <th colspan=2>
	    <a href="admin.php?page=customerInfo"><input type="button" class="btn" value="Okay"></a></th>
	</tr>
</table>
<!-- End of table -->
</section>