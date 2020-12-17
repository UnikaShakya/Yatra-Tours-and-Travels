<?php 
if (isset($_GET['id'])) {
	session_start();
	$_SESSION['id'] = $_GET['id'];
	$sql = "SELECT * FROM `packageinfo` WHERE `id`=".$_GET['id'];
        $result = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_array($result)){
            $data = $row;
        }
}
?>
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
	<form name="packagesadd" action='pages/packageinfo/function.php' method="POST" enctype="multipart/form-data">

	<div class="row">
		<div class="col-label">
			<div class="label"><label>Topic:</label></div>
		</div>
		<div class="col-input">
			<input type="text" value="<?php if (isset($data['topic'])){echo $data['topic'];}?>" placeholder="Enter Topic" name="topic" size=100% class="inputtext">
		</div>
	</div>
	<div class="row">
		<div class="col-label">
			<div class="label"><label>Topic Description:</label></div>
		</div>
		<div class="col-input">
			<textarea class="ckeditor" placeholder="Topic Description" name="topicDesc"><?php if (isset($data['topicDesc'])){echo $data['topicDesc'];}?></textarea>
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
			<input type="text" value="<?php if (isset($data['index'])){echo $data['index'];}?>" placeholder="Enter Index" name="index" size=100% class="inputtext">
		</div>
	</div>

	<div class="row">
		<div class="col-label">
			<div class="label"><label>Status:</label></div>
		</div>
		<div class="col-input">
			<select name="status" class="inputtext" style="width:100%;" >
                <?php
                    if (isset($data['status'])){
						$status = $data['status'];
						if($status==1){
							echo "<option value=0>0</option>";
							echo "<option value=$status selected>$status</option>";
						}
						else{
							echo "<option value=0 selected>0</option>";
							echo "<option value=1 >1</option>";
						}
					}
					?>
            </select>
		</div>
	</div>

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