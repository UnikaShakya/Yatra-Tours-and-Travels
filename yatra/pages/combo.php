<style>
td {
    border-radius: 5px;
    color: white;
    border: 15px solid white;
     background-size:     cover ;  
	                    /* <------ */
    background-repeat:   no-repeat;
}
</style>
<section id="main-content">
<div class="section2">
 <center><h1 class="heading">Available  Packages
<a href="home.php?pageName=destination&page=form.php" >
      <input type="submit" class="button" name="orderticket" value="Order Ticket"></a></h1> 
</center>
<center><table cellspacing=40 cellpadding=10 width=80%>
    <?php
		$result1=mysqli_query($con,"select * from package where type='combo'");
		 if(mysqli_num_rows($result1)>0)
   		{
		   while($row1=mysqli_fetch_array($result1))
		    {
			$img=$row1['image'];
			$id=$row1['id'];
			echo "<tr>
        			     <th background='data:image/jpeg;base64,".base64_encode($img)."' style='width:50%; height:50%'><h1 class='circle-btn' style='width:25%; float:right'>Book now Starting from ".$row1['price_economic']." per person<br>".$row1['days']."</h1><br>
	<div style='color: white; font-size: 1vw' ><h2>".$row1['packageName']." TOUR</h2><hr><h3>Explore the beauty of ".$row1['packageName']."</h3><BR>
	<a href='home.php?pageName=destination&page=form.php'><button class='btn' style='width:30%' >&nbsp;BOOK NOW&nbsp;</button></a><a href='home.php?pageName=destination&page=destination.php&id=".$id."'><button class='btn' style='width:30%' >LEARN MORE</button></a>
        </div></th>";
			if($row1=mysqli_fetch_array($result1))
			{
			$img=$row1['image'];
			$id=$row1['id'];
			echo "
				     <th background='data:image/jpeg;base64,".base64_encode($img)."' style='width:50%; height:50%'><h1 class='circle-btn' style='width:25%; float:right'>Book now Starting from ".$row1['price_economic']." per person<br>".$row1['days']."</h1><br>
	<div style='color: white; font-size: 1vw' ><h2>".$row1['packageName']." TOUR</h2><hr><h3>Explore the beauty of ".$row1['packageName']."</h3><BR>
	<a href='home.php?pageName=destination&page=form.php'><button class='btn' style='width:30%' >&nbsp;BOOK NOW&nbsp;</button></a><a href='home.php?pageName=destination&page=destination.php&id=".$id."'><button class='btn' style='width:30%' >LEARN MORE</button></a>
	</div></th>
     				</tr>";
			}
		    }
		}
	?>
</table>
</center>
</div>
</section>