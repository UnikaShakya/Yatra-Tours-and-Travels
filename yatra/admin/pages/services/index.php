<section id="main-content" class="content">
<!--overview start-->
<div class="row">
  <div class="col">
    <ol class="block">
         <i class="fa fa-home"></i> <?php echo "<a href='".ROOT_URL."/admin/admin.php?page=home'>Home</a>" ?> | Services
    </ol>
  </div>
</div>
<!-- End of overview-->

<!-- Start of services -->
<div class="row">
	<div class="col-65">
	<?php
	$_SESSION['table'] = 'services';   
    require_once("pagination/pagination.php");
    while($row = mysqli_fetch_array($res_data)){
        $id=$row['id'];
        $img=$row['image'];
        $image='data:image/jpeg;base64,'.base64_encode($img);
        $name=$row['name'];
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
				 echo '<a href="'.ROOT_URL.'/admin/admin.php?page=services&pageName=edit.php&action=update&id='.$row["id"].'" style="margin-right: 20px;text-decoration: none;"><i class="fa fa-edit" aria-hidden="true"></i> Edit</a>';
            	 echo '<a href="'.ROOT_URL.'/admin/admin.php?page=services&pageName=function.php&action=delete&id='.$row["id"].'" style="text-decoration: none;"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>';
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
<!-- End of display-->

<!-- start of Gallery management block -->
<div class="col-35">
  <div class="col">
    <ol class="block" style="margin-top: 9px;width: 90%;">
         <i class="fa fa-list"></i> Hotel Management
    </ol>
  </div>
<form action="pages/services/function.php" method="post" enctype="multipart/form-data">
		<div class="row">  		
			<label>Upload Image:</label>
			<input type="file" name="image" accept="image/*" value="browse" id="files">
		</div>
		<div class="row">
			<div class="col-label">
				<div class="label"><label>Hotel Name:</label></div>
			</div>
			<div class="col-input">
				<input type="text"  placeholder="name" name="name" size=35% class="inputtext"> 
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
				echo "<option value=$pid>$packageName</option>";    
			  }  
			?>
            </select>
		</div>
	</div>
		<br><br>
		<div class="row">
			<div class="col-label">
				<div class="label"><label>Category:</label></div>
			</div>
			<div class="col-input">
				<select name="rating" class="inputtext" style="width:32.5%;" >
                    			<option value="3">3 star</option>
                    			<option value="4">4 star</option>
					<option value="5">5 star</option>
	            		</select>
			</div>
		</div>
		<br><br>
		<div class="row">
			<div class="col-label">
				<div class="label"><label>Price per night:</label></div>
			</div>
			<div class="col-input">
				<input type="text"  placeholder="price" name="price" size=35% class="inputtext"> 
			</div>
		</div>
		<br><br>
		<div class="row">
			<div class="col-label">
				<div class="label"><label>Location:</label></div>
			</div>
			<div class="col-input">
				<input type="text"  placeholder="location" name="location" size=35% class="inputtext"> 
			</div>
		</div>
		<br><br>
		<div class="row">
			<div class="col-label">
				<div class="label"><label>Phone:</label></div>
			</div>
			<div class="col-input">
				<input type="text"  placeholder="phone no." name="phone" size=35% class="inputtext"> 
			</div>
		</div>
		<br><br>
		<div class="row">
			<div class="col-label">
				<div class="label"><label>Link:</label></div>
			</div>
			<div class="col-input">
				<input type="text"  placeholder="link" name="link" size=35% class="inputtext"> 
			</div>
		</div>
		<br><br>
		<div class="row">
				 <div class="col">
				    <ol class="block" style="width: 90%;">
				         <input class="btn" type="submit" name="insert" value="Add">
				    </ol>
				  </div>
		</div>
		<!-- End of Update Inforamtion -->
	</div>	
	</div>
	</form>
</div>
<!-- End of the Gallery management --> 
</section>