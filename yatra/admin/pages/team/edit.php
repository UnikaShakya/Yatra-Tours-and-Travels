<?php 
if (isset($_GET['id'])) {
	session_start();
	$_SESSION['id'] = $_GET['id'];
	$sql = "SELECT * FROM `team` WHERE `id`=".$_GET['id'];
        $result = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_array($result)){
            $data = $row;
        }
}
?>
<section id="main-content" class="content">
<!--overview start-->
<div class="row">
	<div class="col-99">
    <ol class="block">
         <i class="fa fa-home"></i> <?php echo "<a href='".ROOT_URL."/admin/admin.php?page=home'>Home</a>" ?> | Team
    </ol>
	</div>
</div>
<!-- End of overview-->
<!-- start of existing team -->
<div class="row">
	<div class="col-55">
		<table class="table">
		        <thead>
		          <tr>
		            <th>S.N.</th>
		            <th>Image</th>
		            <th>Name</th>
		            <th>Position</th>
		            <th>Email</th>                    
		            <th>Contact</th>
		          </tr>
		        </thead>

		        <?php
		    $sql="SELECT * from team";
		    $result=mysqli_query($con,$sql);   
		    if(mysqli_num_rows($result)>0)
		    {
		        $sn=1;
		        while ($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) {
		            $id=$row['id'];
		            $img=$row['image'];
            		$image='data:image/jpeg;base64,'.base64_encode($img);
		            $name=$row['name'];
		            $position=$row['position'];
		            $email=$row['email'];
		            $phone=$row['contact'];
		            
		            echo "<tr>";
		            echo "<td>".$sn."</td>";
		            echo "<td>"."<img src='".$image."' height='50px' width='50px'>"."</td>";
		            echo "<td>".$name."</td>";
		            echo "<td>".$position."</td>";
		            echo "<td>".$email."</td>";                    
		            echo "<td>".$phone."</td>";
		            $sn=$sn+1;
		        }
		    }       
		        mysqli_close($con);
		        ?>
		    <!-- End of table data -->
		      </table>
		<!-- End of table -->
		  </div>
		<!-- end of existing team -->
		<!-- start of new team -->
<form name="teamupdate" action='pages/team/function.php' method="POST"  enctype="multipart/form-data">		
		<div class="col-35">
		  <div class="col-90">
		    <ol class="block">
		         <i class="fa fa-plus"></i> Edit Team Member
		    </ol>
		  </div>		  
				 <div class="row">; 		
					<label>Upload Image:</label>;
					<br><br>
					<div class="row">
					<div class="col-input">
						<div class="picblock"><output id="list"><img src="<?php 
					$img=$data['image'];
					$image='data:image/jpeg;base64,'.base64_encode($img); 
					if (isset($image)){echo $image;}?>" style="width:100%;height:100px"></output></div>
						<input type="file" name="image" accept="image/*" value="browse" id="files">
					</div>
				</div>							
				</div>

				<div class="row">
					<div class="col-label">
						<div class="label"><label>Name:</label></div>
					</div>
					<div class="col-input">
						<input type="text" placeholder="Enter the member's name" class="inputtext" style="width:92.5%;" name="name" value="<?php if (isset($data['name'])){echo $data['name'];}?>">
					</div>
				</div>

				<div class="row">
					<div class="col-label">
						<div class="label"><label>Position:</label></div>
					</div>
					<div class="col-input">
						<input type="text" placeholder="Enter position" name="position" style="width:92.5%;" class="inputtext" value="<?php if (isset($data['position'])){echo $data['position'];}?>">
					</div>
				</div>

				<div class="row">
					<div class="col-label">
						<div class="label"><label>Email:</label></div>
					</div>
					<div class="col-input">
						<input type="text" placeholder="Enter email id" name="email" style="width:92.5%;" class="inputtext" value="<?php if (isset($data['email'])){echo $data['email'];}?>">
					</div>
				</div>

				<div class="row">
					<div class="col-label">
						<div class="label"><label>Contact No:</label></div>
					</div>
					<div class="col-input">
						<input type="text" placeholder="Contact No" name="contact" style="width:92.5%;" class="inputtext" value="<?php if (isset($data['contact'])){echo $data['contact'];}?>">
					</div>
				</div>
		<!-- end of new member -->
 				<br><br>
				<!-- Start of Update Information -->
						  <div class="col-90">
						    <ol class="block">
						         <input class="btn" type="submit" name="update" value="Update">
						    </ol>
						  </div>
				<!-- End of Update Information -->
</form>			
	</div>
</div>
</section>