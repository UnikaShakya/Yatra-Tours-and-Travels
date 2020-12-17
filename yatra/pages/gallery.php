<section id="main-content">
<div class="section2"> 	
<h2 class="heading">GALLERY</h2>
<?php
		$result1=mysqli_query($con,"select * from gallery");
		 if(mysqli_num_rows($result1)>0)
   		{
   			echo "<div class='col'>";
		   while($row1=mysqli_fetch_array($result1))
		    {
			$img=$row1['image']; 
			echo "<div class='galleryrow'>
					
					<div class='gallerycolumn' >
        			           <img src='data:image/jpeg;base64,".base64_encode($img)."' height='200px' width='360px'></div>";
     			echo "</div>";
		    }
		    if($row1=mysqli_fetch_array($result1))
			{
			$img=$row1['image'];
			echo "
				     <div class='gallerycolumn'>
					<img src='data:image/jpeg;base64,".base64_encode($img)."' height='200px' width='360px'></div>";
			}
			if($row1=mysqli_fetch_array($result1))
			{
			$img=$row1['image'];
			echo "
				     <div class='gallerycolumn'>
					<img src='data:image/jpeg;base64,".base64_encode($img)."' height='200px' width='360px'></div>";
			}
		    echo "</div><br>";
		}
?>		 

</div>
</section>