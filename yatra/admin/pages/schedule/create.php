<section id="main-content" class="content">
<!--overview start-->
<div class="row">
	<div class="col-99">
    <ol class="block">
         <i class="fa fa-home"></i> <?php echo "<a href='".ROOT_URL."/admin/admin.php?page=home'>Home</a>" ?> | Schedule
    </ol>
	</div>
</div>
<!-- End of overview-->
<!-- Start of schedule -->
<div class="tblock">
	<form name="schedule" action='pages/schedule/function.php' method="POST" enctype="multipart/form-data">

	<div class="row">
		<div class="col-label">
			<div class="label"><label>Day:</label></div>
		</div>
		<div class="col-input">
			<input type="number" placeholder="Enter Day" name="day" size=100% class="inputtext">
		</div>
	</div>
	<div class="row">
		<div class="col-label">
			<div class="label"><label>Schedule:</label></div>
		</div>
		<div class="col-input">
			<textarea class="ckeditor" placeholder="Schedule" name="schedule"></textarea>
		</div>
	</div>
	<!-- End of schedule create -->

<!-- Start of Update Inforamtion -->
<div class="row">
	  <div class="col">
	    <ol class="block">
	         <input class="btn" type="submit" name="insert" value="Insert">
	    </ol>
	  </div>
	</div>
<!-- End of Update Inforamtion -->
</form>
</div>
</section>