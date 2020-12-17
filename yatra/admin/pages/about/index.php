<?php $result=mysqli_query($con,"SELECT * from about");
  $row=mysqli_fetch_array($result);
  $img=$row['coverimmg'];
  $image='data:image/jpeg;base64,'.base64_encode($img);
 ?>
<section id="main-content" class="content">
<!--overview start-->
<div class="row">
  <div class="col">
    <ol class="block">
         <i class="fa fa-home"></i> <?php echo "<a href='".ROOT_URL."/admin/admin.php?page=home'>Home</a>" ?> | About
    </ol>
  </div>
</div>
<!-- End of overview-->

<form action="pages/about/function.php" method="post" enctype="multipart/form-data">
<div class="tblock">
	<div class="row">
		<div class="col-label">
			<div class="label"><label>Cover picture of about:</label></div>
		</div>
		<div class="col-input">
			<div class="picblock"><output id="list"><img src="<?php if (isset($image)){echo $image;}?>" style='width:100%;height:100px' ></output></div>
			<br>
			<input type="file" name="image" accept="image/*" value="browse" id="files">
			<!-- <input type="file" name="image" id="files" value="<?php echo $row['coverimmg'];?>" > -->
		</div>
	</div>

	<div class="row">
		<div class="col-label">
			<div class="label"><label>Description:</label></div>
		</div>
		<div class="col-input">
			<textarea placeholder="<?php echo $row['description'];?>" name="description"  style="height:250px; width:100%" class="inputtext"><?php echo $row['description'];?></textarea>
		</div>
	</div>
	
	<div class="row">
		<div class="col-label">
			<div class="label"><label>Vision:</label></div>
		</div>
		<div class="col-input">
			<input type="text" placeholder="<?php echo $row['vision'];?>" value="<?php echo $row['vision'];?>" name="vision" size=100% class="inputtext">
		</div>
	</div>
	
	<div class="row">
		<div class="col-label">
			<div class="label"><label>Mission:</label></div>
		</div>
		<div class="col-input">
			<input type="text" placeholder="<?php echo $row['mission'];?>" value="<?php echo $row['mission'];?>" name="mission" size=100% class="inputtext">
		</div>
	</div>

	<div class="row">
		<div class="col-label">
			<div class="label"><label>Motto:</label></div>
		</div>
		<div class="col-input">
			<input type="text" placeholder="<?php echo $row['motto'];?>" value="<?php echo $row['motto'];?>" name="motto" size=100% class="inputtext">
		</div>
	</div>
	<div class="row">
		<div class="col-label">
			<div class="label"><label>Core Values:</label></div>
		</div>
		<div class="col-input">
			<textarea class="ckeditor" placeholder="Core Values" name="coreValues"><?php if (isset($row['coreValues'])){echo $row['coreValues'];}?></textarea>
		</div>
	</div>

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