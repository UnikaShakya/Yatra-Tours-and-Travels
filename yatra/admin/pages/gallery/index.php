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

<!-- Start of Gallery image -->
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

<!-- Start of Gallery management -->
<!-- start of Gallery management block -->
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
				<div class="picblock"><output id="list"></output></div>
				<input type="file" name="image" accept="image/*" value="browse" id="files">
			</div>
			<div class="row">
				<div class="col-label">
					<div class="label"><label>Name:</label></div>
				</div>
				<div class="col-input">
					<input type="text" placeholder="Enter name" name="name" size=40% class="inputtext">
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
					  $sql="SELECT * FROM `package`";
					  $result = mysqli_query($con,$sql);
					  while($row=mysqli_fetch_array($result)){
					  	$packageName = $row['packageName'];
					    $pid = $row['id'];
						echo "<option value=$pid>$packageName</option>";    
					  } 
					  mysqli_close($con); 
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
	                    <option value=0>0</option>
	                    <option value=1 selected>1</option>
	                </select>
				</div>
			</div>
			<br>
	<!-- Start of Update Inforamtion -->
		<div class="row">
			  <div class="col">
			    <ol class="block" style="width: 90%;">
			         <input class="btn" type="submit" name="insert" value="Insert">
			    </ol>
			  </div>
			</div>
	<!-- End of Update Inforamtion -->
	</div>
	</form>
</div>
</section>