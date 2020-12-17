<?php 
if (isset($_GET['id'])) {
	session_start();
	/*$_SESSION['id'] = $_GET['id'];*/
	$sql = "SELECT * FROM `schedule` WHERE `id`=".$_GET['id'];
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
         <i class="fa fa-home"></i> <?php echo "<a href='".ROOT_URL."/admin/admin.php?page=home'>Home</a>" ?> | Schedule<!-- 
    	 <div class="right">
          <?php echo "<a href='".ROOT_URL."/admin/admin.php?page=schedule&pageName=index.php' style='text-decoration:none;'>Schedule</a>" ?>
         </div> -->
    </ol>
	</div>
</div>
<!-- End of overview-->
<!-- Start of company details -->
<div class="tblock">
	<form name="scheduleedit" action='pages/schedule/function.php' method="POST" enctype="multipart/form-data">

	<div class="row">
		<div class="col-label">
			<div class="label"><label>Day:</label></div>
		</div>
		<div class="col-input">
			<input type="number" placeholder="Enter Day" name="day" size=100% class="inputtext" value="<?php if (isset($data['day'])){echo $data['day'];}?>">
		</div>
	</div>
	<div class="row">
		<div class="col-label">
			<div class="label"><label>Schedule:</label></div>
		</div>
		<div class="col-input">
			<textarea class="ckeditor" placeholder="Schedule" name="schedule" <?php if (isset($data['schedule'])){echo $data['schedule'];}?> ></textarea>
		</div>
	</div>
	<!-- End of schedule create -->

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
</div>
</section>