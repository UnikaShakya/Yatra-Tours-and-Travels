<section id="main-content" class="content">
<!--overview start-->
<div class="row">
	<div class="col-99">
    <ol class="block">
         <i class="fa fa-home"></i> <?php echo "<a href='".ROOT_URL."/admin/admin.php?page=home'>Home</a>" ?> | Packages
    </ol>
	</div>
</div>
<!-- End of overview-->
<!-- Start of destination details -->
<form action="pages/packages/function.php" method="post" enctype="multipart/form-data" runat="server">
<div class="tblock">
	<div class="row">
		<div class="col-label">
			<div class="label"><label>Image:</label></div>
		</div>
		<div class="col-input">
			<div class="picblock"><output id="list" class="pic"></output></div>
			<input type="file" name="image" accept="image/*" value="browse" id="files">
		</div>
		

	</div>

	<div class="row">
		<div class="col-label">
			<div class="label"><label>Package Name:</label></div>
		</div>
		<div class="col-input">
			<input type="text" placeholder="name" name="name" size=100% class="inputtext">
		</div>
	</div>

	<div class="row">
		<div class="col-label">
			<div class="label"><label>Package Description:</label></div>
		</div>
		<div class="col-input">
			<textarea class="ckeditor" placeholder="Package Description" name="packageDesc"></textarea>
		</div>
	</div>

	<div class="row">
		<div class="col-label">
			<div class="label"><label>Package Type:</label></div>
		</div>
		<div class="col-input">
			<select name="type" class="inputtext" style="width:92.5%;" >
                    		<option value="general">General</option>
				<option value="combo">Combo</option>
	            </select>
		</div>
	</div>

	<div class="row">
		<div class="col-label">
			<div class="label"><label>Starting point:</label></div>
		</div>
		<div class="col-input">
			<input type="text" placeholder="starting point" name="s_point" size=100% class="inputtext">
		</div>
	</div>

	<div class="row">
		<div class="col-label">
			<div class="label"><label>Destination:</label></div>
		</div>
		<div class="col-input">
			<input type="text" placeholder="destination" name="destination" size=100% class="inputtext">
		</div>
	</div>
	
	<div class="row">
		<div class="col-label">
			<div class="label"><label>Caption:</label></div>
		</div>
		<div class="col-input">
			<input type="text" placeholder="caption" name="caption" size=100% class="inputtext">
		</div>
	</div>

	<div class="row">
		<div class="col-label">
			<div class="label"><label>Route:</label></div>
		</div>
		<div class="col-input">
			<input type="text" class="inputtext" placeholder="route" name="route" size=100%>
		</div>
	</div>

	<div class="row">
		<div class="col-label">
			<div class="label"><label>Price(Economic):</label></div>
		</div>
		<div class="col-input">
			<input type="text" placeholder="price(economic)" name="price_economic" size=100% class="inputtext">
		</div>
	</div>

	<div class="row">
		<div class="col-label">
			<div class="label"><label>Price(Deluxe):</label></div>
		</div>
		<div class="col-input">
			<input type="text" placeholder="price(deluxe)" name="price_deluxe" size=100% class="inputtext">
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
                <option value=0>0</option>
                <option value=1>1</option>
            </select>
		</div>
	</div>
</div>
<!-- End of the destination details -->

<div class="row">
	  <div class="col">
	    <ol class="block">
	         <input class="btn" type="submit" name="insert" value="Insert">
	    </ol>
	  </div>
	</div>
<!-- End of Add Inforamtion -->
</form>
</section>