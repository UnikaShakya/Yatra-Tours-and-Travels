<?php 
if (isset($_GET['id'])) {
	session_start();
	$_SESSION['pid'] = $_GET['id'];
	$sql = "SELECT * FROM `package` WHERE `id`=".$_GET['id'];
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
         <i class="fa fa-home"></i> <?php echo "<a href='".ROOT_URL."/admin/admin.php?page=home'>Home</a>" ?> | Packages
    	 <div class="right">
          <?php echo "<a href='".ROOT_URL."/admin/admin.php?page=schedule&pageName=index.php' style='text-decoration:none;'>Schedule</a>" ?>
         </div>
    </ol>
	</div>
</div>
<!-- End of overview-->



<!-- Start of package -->
<div class="tblock">
	<form action="pages/packages/function.php" method="post" enctype="multipart/form-data" runat="server">
<div class="tblock">
	<div class="row">
		<div class="col-label">
			<div class="label"><label>Image:</label></div>
		</div>
		<div class="col-input">
			<div class="picblock"><output id="list" class="pic"><img src="<?php 
					$img=$data['image'];
					$image='data:image/jpeg;base64,'.base64_encode($img); 
					if (isset($image)){echo $image;}?>" style="width:100%;height:100px"></output></div>
			<input type="file" name="image" accept="image/*" value="browse" id="files">
		</div>
		

	</div>

	<div class="row">
		<div class="col-label">
			<div class="label"><label>Package Name:</label></div>
		</div>
		<div class="col-input">
			<input type="text" placeholder="name" name="name" size=100% class="inputtext" value="<?php echo $data['packageName'];?>">
		</div>
	</div>

	<div class="row">
		<div class="col-label">
			<div class="label"><label>Package Description:</label></div>
		</div>
		<div class="col-input">
			<textarea class="ckeditor" placeholder="Package Description" name="packageDesc"><?php echo $data['packageDesc'];?></textarea>
		</div>
	</div>

	<div class="row">
		<div class="col-label">
			<div class="label"><label>Package Type:</label></div>
		</div>
		<div class="col-input">
			<select name="type" class="inputtext" style="width:92.5%;" >
				<?php
                    if (isset($data['type'])){
						$type = $data['type'];
						if($type=='combo'){
							echo "<option value='general'>General</option>";
							echo "<option value=$type selected>$type</option>";
						}
						else{
							echo "<option value='general' selected>General</option>";
							echo "<option value='combo' >Combo</option>";
						}
					}
					?>
	            </select>
		</div>
	</div>

	<div class="row">
		<div class="col-label">
			<div class="label"><label>Starting point:</label></div>
		</div>
		<div class="col-input">
			<input type="text" placeholder="starting point" name="s_point" size=100% class="inputtext" value="<?php echo $data['s_point'];?>">
		</div>
	</div>

	<div class="row">
		<div class="col-label">
			<div class="label"><label>Destination:</label></div>
		</div>
		<div class="col-input">
			<input type="text" placeholder="destination" name="destination" size=100% class="inputtext" value="<?php echo $data['destination'];?>">
		</div>
	</div>
	
	<div class="row">
		<div class="col-label">
			<div class="label"><label>Caption:</label></div>
		</div>
		<div class="col-input">
			<input type="text" placeholder="caption" name="caption" size=100% class="inputtext" value="<?php echo $data['caption'];?>">
		</div>
	</div>

	<div class="row">
		<div class="col-label">
			<div class="label"><label>Route:</label></div>
		</div>
		<div class="col-input">
			<input type="text" class="inputtext" placeholder="route" name="route" size=100% value="<?php echo $data['route'];?>">
		</div>
	</div>

	<div class="row">
		<div class="col-label">
			<div class="label"><label>Price(economic):</label></div>
		</div>
		<div class="col-input">
			<input type="text" placeholder="price(economic)" name="price_economic" size=100% class="inputtext" value="<?php echo $data['price_economic'];?>">
		</div>
	</div>

	<div class="row">
		<div class="col-label">
			<div class="label"><label>Price(deluxe):</label></div>
		</div>
		<div class="col-input">
			<input type="text" placeholder="price(deluxe)" name="price_deluxe" size=100% class="inputtext" value="<?php echo $data['price_deluxe'];?>">
		</div>
	</div>
		<div class="row">
		<div class="col-label">
			<div class="label"><label>Days:</label></div>
		</div>
		<div class="col-input">
			<select name="day" class="inputtext" style="width:92.5%;" >
                    		<option value="2d/1n">2d/1n</option>
				<option value="3d/2n">3d/2n</option>
				<option value="4d/3n">4d/3n</option>
	            </select>
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
</div>
<!-- End of the destination details -->

<div class="row">
	  <div class="col">
	    <ol class="block">
	         <input class="btn" type="submit" name="update" value="Update">
	    </ol>
	  </div>
	</div>
<!-- End of Add Inforamtion -->
</form>
</div>
</section>