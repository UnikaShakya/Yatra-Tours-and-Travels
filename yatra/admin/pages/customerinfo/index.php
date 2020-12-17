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

<!-- Start of table -->
	<!-- start of table head -->
      <table class="table">
        <thead>
          <tr>
            <th>S.N.</th>
            <th>Ticket ID</th>
            <th>Name</th>
            <th>Package booked</th>                   
            <th>Contact</th>
	     	<th>Check-in date</th>
            <th colspan="3" style="text-align: center;">Setting</th>
          </tr>
        </thead>
    <!-- End of table head -->
 <!-- Start of table data -->
        <tbody>
		<?php
  		 $result=mysqli_query($con,"select * from customer");
   		if(mysqli_num_rows($result)>0)
   		{
   			$sn=0;
		    while($row=mysqli_fetch_array($result))
		    {
		    	$sn=$sn+1;
				echo "<tr>";
				echo "<td>".$sn."</td>";
				echo "<td>".$row['id']."</td>";
				echo "<td>".$row['firstname']." &nbsp;".$row['lastname']."</td>";
		 		echo "<td>".$row['package']."</td>";
				echo "<td>".$row['phone']."</td>";
				echo "<td>".$row['r_date']."</td>";
		 		$id=$row['id'];
		?>
		<td><?php echo '<a href="'.ROOT_URL.'/admin/admin.php?page=customerInfo&id='.$id.'" style="margin-right: 20px;text-decoration: none;"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>';?></td>
   		<td><?php echo '<a href="'.ROOT_URL.'/admin/admin.php?page=customerInfo&pageName=view.php&id='.$id.'" style="margin-right: 20px;text-decoration: none;"><i class="fa fa-eye" aria-hidden="true"></i> View</a>';?></td>
		</tr>
		<?php
		     }
		}
		?>
	</tbody>
    <!-- End of table data -->
      </table>
<!-- End of table -->
</section>