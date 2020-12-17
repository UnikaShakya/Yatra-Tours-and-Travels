<?php $result=mysqli_query($con,"select * from company");
  $row=mysqli_fetch_array($result);
  $img=$row['logo'];
  $image='data:image/jpeg;base64,'.base64_encode($img);
 ?>
<section id="main-content" class="content">
<!--overview start-->
<div class="row">
  <div class="col">
    <ol class="block">
         <i class="fa fa-home"></i> <?php echo "<a href='".ROOT_URL."/admin/admin.php?page=home'>Home</a>" ?> | Setting
    </ol>
  </div>
</div>
<!-- End of overview-->

<!-- Start of company details -->
<form action="pages/setting/function.php" method="post" enctype="multipart/form-data">
<div class="tblock">
	<div class="row">
		<div class="col-label">
			<div class="label"><label>Company Logo:</label></div>
		</div>
		<div class="col-input">
			<div class="picblock"><output id="list"><img src="<?php if (isset($image)){echo $image;}?>" style="width:100%;height:100px" ></output></div>
			<br>
			<input type="file" name="image" accept="image/*" value="browse" id="files">
			<!-- <input type="file" name="image" id="files" value="<?php echo $row['coverimmg'];?>" > -->
		</div>
	</div>
	<div class="row">
		<div class="col-label">
			<div class="label"><label>Company Name:</label></div>
		</div>
		<div class="col-input">
			<input type="text" placeholder="<?php echo $row['c_name'];?>" value="<?php echo $row['c_name'];?>" name="companyName" size=100% class="inputtext">
		</div>
	</div>

	<div class="row">
		<div class="col-label">
			<div class="label"><label>Address:</label></div>
		</div>
		<div class="col-input">
			<input type="text" class="inputtext" placeholder="<?php echo $row['address'];?>" value="<?php echo $row['address'];?>" name="address" size=100%>
		</div>
	</div>

	<div class="row">
		<div class="col-label">
			<div class="label"><label>Contact Number:</label></div>
		</div>
		<div class="col-input">
			<input type="text" placeholder="<?php echo $row['contact'];?>" value="<?php echo $row['contact'];?>" name="contactNumber" size=100% class="inputtext">
		</div>
	</div>

	<div class="row">
		<div class="col-label">
			<div class="label"><label>Email:</label></div>
		</div>
		<div class="col-input">
			<input type="text" placeholder="<?php echo $row['email'];?>" value="<?php echo $row['email'];?>" name="email" size=100% class="inputtext">
		</div>
	</div>

	<div class="row">
		<div class="col-label">
			<div class="label"><label>Website:</label></div>
		</div>
		<div class="col-input">
			<input type="text" placeholder="<?php echo $row['website'];?>" value="<?php echo $row['website'];?>" name="website" size=100% class="inputtext">
		</div>
	</div>
</div>
<!-- End of the company details -->

<!-- Social Links Start -->
 <!-- Social Links Bar -->
	<div class="row">
	  <div class="col">
	    <ol class="block">
	         <i class="fa fa-share-alt"></i> Social Links
	    </ol>
	  </div>
	</div>
<!-- End of Social Links Bar -->
 <!-- Social Links Detail -->

 <!-- Start of Social Links -->
<div class="tblock">
	<div class="row">
		<div class="col-label">
			<div class="label"><label>Google Map:</label></div>
		</div>
		<div class="col-input">
			<input type="text" placeholder="<?php echo $row['gmap'];?>" value="<?php echo $row['gmap'];?>" name="googleMap" size=100% class="inputtext">
		</div>
	</div>

	<div class="row">
		<div class="col-label">
			<div class="label"><label for="text">Facebook page:</label></div>
		</div>
		<div class="col-input">
			<input type="text" placeholder="<?php echo $row['fb'];?>" value="<?php echo $row['fb'];?>" name="facebookPage" size=100% class="inputtext">
		</div>
	</div>

	<div class="row">
		<div class="col-label">
			<div class="label"><label>Youtube Link:</label></div>
		</div>
		<div class="col-input">
			<input type="text" placeholder="<?php echo $row['youtube'];?>" value="<?php echo $row['youtube'];?>" name="youtubeLink" size=100% class="inputtext">
		</div>
	</div>

	<div class="row">
		<div class="col-label">
			<div class="label"><label>Twitter Page:</label></div>
		</div>
		<div class="col-input">
			<input type="text" placeholder="<?php echo $row['twit'];?>" value="<?php echo $row['twit'];?>" name="twitterPage" size=100% class="inputtext">
		</div>
	</div>
	<div class="row">
		<div class="col-label">
			<div class="label"><label>Instragram Page:</label></div>
		</div>
		<div class="col-input">
			<input type="text" placeholder="<?php echo $row['insta'];?>" value="<?php echo $row['insta'];?>" name="instragramPage" size=100% class="inputtext">
		</div>
	</div>
</div>
<!-- End of the Social Links -->

<!-- Start of Update Inforamtion -->
<div class="row">
	  <div class="col">
	    <ol class="block">
	         <input class="btn" type="submit" name="update" value="Update">
	    </ol>
	  </div>
	</div>
<!-- End of Update Inforamtion -->
</form>
</section>