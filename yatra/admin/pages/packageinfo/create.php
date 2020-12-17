<!--overview start-->
<div class="row">
	<div class="col-99">
    <ol class="block">
         <i class="fa fa-home"></i> <?php echo "<a href='".ROOT_URL."/admin/admin.php?page=home'>Home</a>" ?> | Packages Information
    </ol>
	</div>
</div>
<!-- End of overview-->
<!-- Start of company details -->
<div class="tblock">
	<form name="packageinfoadd" action='pages/packageinfo/function.php' method="POST" enctype="multipart/form-data">

	<div class="row">
		<div class="col-label">
			<div class="label"><label>Topic:</label></div>
		</div>
		<div class="col-input">
			<input type="text" placeholder="Enter Topic" name="topic" size=100% class="inputtext">
		</div>
	</div>
	<div class="row">
		<div class="col-label">
			<div class="label"><label>Topic Description:</label></div>
		</div>
		<div class="col-input">
			<textarea class="ckeditor" placeholder="Topic Description" name="topicDesc"></textarea>
		</div>
	</div>

	<div class="row">
		<div class="col-label">
			<div class="label"><label>Package Name:</label></div>
		</div>
		<div class="col-input">
			<select name="packageName" class="inputtext" style="width:92.5%;" >
			<?php
			  $sql="SELECT * from package";
			  $result = mysqli_query($con,$sql);
			  while($row=mysqli_fetch_array($result)){
			  	$packageName = $row['packageName'];
			    $pid = $row['id'];
				echo "<option value=$pid>$packageName</option>";    
			  }  
			?>
            </select>
		</div>
	</div>

	<div class="row">
		<div class="col-label">
			<div class="label"><label>Index:</label></div>
		</div>
		<div class="col-input">
			<input type="text" placeholder="Enter Index" name="index" size=100% class="inputtext">
		</div>
	</div>

	<div class="row">
		<div class="col-label">
			<div class="label"><label>Status:</label></div>
		</div>
		<div class="col-input">
			<select name="status" class="inputtext" style="width:100%;" >
                <option value=0>0</option>
                <option value=1 selected>1</option>
            </select>
		</div>
	</div>
	<!-- End of package create -->

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