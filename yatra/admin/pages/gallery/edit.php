<?php 
if (isset($_GET['id'])) {
	session_start();
	$_SESSION['id'] = $_GET['id'];
	$sql = "SELECT * FROM `gallery` WHERE `id`=".$_GET['id'];
        $result = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_array($result)){
            $data = $row;
        }
}
?>
<section id="main-content" class="content">
<!--overview start-->
<div class="row">
  <div class="col">
    <ol class="block">
         <i class="fa fa-home"></i> <?php echo "<a href='".ROOT_URL."/admin/admin.php?page=home'>Home</a>" ?> | Gallery
    </ol>
  </div>
</div>
<!-- End of overview-->

<!-- Start of gallery image -->
<div class="row">
	<div class="col-65">
	<?php 
	$_SESSION['table'] = 'gallery';   
    require_once("pagination/pagination.php");
    while($row = mysqli_fetch_array($res_data)){
        $id=$row['id'];
        $img=$row['image'];
        $image='data:image/jpeg;base64,'.base64_encode($img);
        $name=$row['name'];
        $status=$row['status'];
        $pid=$row['pid'];
		echo '<div class="imgblock">';
			echo'<div class="imgblock-80">';
				echo'<div class="img">';
					echo "<img src='$image' height='160px' width='99.5%'>"; 
				echo'</div>';
				echo'<div class="imgname">';
					echo "<label>$name</label>"; 
				echo'</div>';
			echo '</div>';
			echo'<div class="imgblock-20">';
				 echo '<a href="'.ROOT_URL.'/admin/admin.php?page=gallery&pageName=edit.php&action=update&id='.$row["id"].'" style="margin-right: 20px;text-decoration: none;"><i class="fa fa-edit" aria-hidden="true"></i> Edit</a>';
            	 echo '<a href="'.ROOT_URL.'/admin/admin.php?page=gallery&pageName=function.php&action=delete&id='.$row["id"].'" style="text-decoration: none;"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>';
			echo'</div>';
		echo'</div>';
	}
	unset($_SESSION["table"]);
	mysqli_close($con);
    ?>
    <div class="row">
		<div class="col">
			<center>
			    <ul class="pagination">
			    	<?php 
			   		$i=1;
			   		for($i=1;$i<=$total_pages;$i++)
			   		{
			   			echo "<li><a href='".ROOT_URL."/admin/admin.php?page=gallery&pageName=index.php&pageno=".$i."'>".$i."</a></li>";
			   		}
			    	?>
			    </ul>
			</center>
		</div>
	</div>
	</div>
	
<!-- End of Gallery Image -->

<!-- Start of gallery management -->
<!-- start of gallery management block -->
<form method="POST" action="pages/gallery/function.php" enctype="multipart/form-data">
<div class="col-35">
  <div class="col">
    <ol class="block" style="margin-top: 9px;width: 90%;">
         <i class="fa fa-sliders-h"></i> Gallery Management
    </ol>
  </div>

		<div class="row">  		
			<label>Upload Image:</label>
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
		<div class="row">
			<div class="col-label">
				<div class="label"><label>Name:</label></div>
			</div>
			<div class="col-input">
				<input type="text" placeholder="Enter Name" name="name" size=40% class="inputtext" value="<?php if (isset($data['name'])){echo $data['name'];}?>">
			</div>
		</div>

			<div class="row">
				<div class="col-label">
					<div class="label"><label>Package Name:</label></div>
				</div>
				<div class="col-input">
					<select name="packageName" class="inputtext" style="width:92.5%;" >
					<?php
					  include("../connection/connection.php");
					  $sql="SELECT * from package";
					  $result = mysqli_query($con,$sql);
					  while($row=mysqli_fetch_array($result)){
					  	$packageName = $row['packageName'];
					    $pid = $row['id'];
					    if($data['pid'] == $pid){
					    	echo "<option value=$pid selected>$packageName</option>";
					    }
					    else{
					    	echo "<option value=$pid>$packageName</option>";
					    }   
					  }  
					?>
	                </select>
				</div>
			</div>

		<div class="row">
			<div class="col-label">
				<div class="label"><label>Status:</label></div>
			</div>
			<div class="col-input">
				<select name="status" class="inputtext" style="width:92.5%;" >
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
				<!-- <input type="text" placeholder="Enter Status" name="status" size=40% class="inputtext"> -->
			</div>
		</div>
		<br>
		<!-- Start of Update Inforamtion -->
			<div class="row">
				  <div class="col">
				    <ol class="block" style="width: 90%;">
				         <input class="btn" type="submit" name="update" value="Update">
				    </ol>
				  </div>
				</div>
		<!-- End of Update Inforamtion -->
		</div>
	</form>
</div>
</section>