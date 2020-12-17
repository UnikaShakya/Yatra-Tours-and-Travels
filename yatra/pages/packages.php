<style>
	td {
   // display: inline-block; /* this has been added */
    //border-radius: 5px;
    //color: white;
	width: 20%;
   // border: 15px solid white;
     background-size:     cover ;  
	 overflow-x: auto;
	                    /* <------ */
    background-repeat:   no-repeat;
}?
</style>
<div class="section2">
  <center><h1 class="heading">Available  Packages</h1>
<marquee><font color="red" size=5.5vw>Hurry Up and Book Now!!</font></marquee></center>
<div class="combo"><a href="home.php?pageName=pages&page=combo.php">
	 <img src="img/swa5.jpg" style="border-radius: 50%;" height=35% width=100%>
	 <div class='bottom-left'>
	 <p class='overlay' style='opacity:1; height: 10%; font-size:1vw;margin-top: -40%;z-index: 9001;' >Click here to check-out<br> our combo package!!</p>
	 </div></a>
</div>
    <h2 class="Heading" id="pack-head">Our popular economic packages</h2>

     <table cellspacing=20 cellpadding=0 width=80% style='overflow-x:auto;'>
    <?php
		$result1=mysqli_query($con,"select * from package where type='general'");
		 if(mysqli_num_rows($result1)>0)
   		{	echo "<tr>";
   			$count = 1;
   			while($row = mysqli_fetch_array($result1)){
			$img=$row['image'];
			$id=$row['id'];
			echo "
        			     <th background='data:image/jpeg;base64,".base64_encode($img)."' style='width:20%; height:50%'><h1 class='circle-btn' style='width:25%; float:right'>".$row['days']." pack</h1><br>
				<div style='color: white; font-size: 1vw' ><h2>".$row['packageName']." TOUR</h2><hr><a href='home.php?pageName=destination&page=form.php'><button class='btn' style='width:30%;'>&nbsp;BOOK NOW&nbsp;</button></a><a href='home.php?pageName=destination&page=destination.php&id=".$id."'><button class='btn' style='width:30%;' >LEARN MORE</button></a>
        	</div></th>";
        if($count==4){
        	echo "</tr><tr>";
        	$count = 1;
        }
        else{
        	$count++;
        }
    }
    echo "</tr>";
}
	?>
</table>

  <h2 class="Heading">Our popular deluxe packages</h2>
     <table cellspacing=20 cellpadding=0 width=80% style='overflow-x:auto;'>
    <?php
		$result1=mysqli_query($con,"select * from package where type='general'");
		 if(mysqli_num_rows($result1)>0)
   		{
		   echo "<tr>";
   			$count = 1;
   			while($row = mysqli_fetch_array($result1)){
			$img=$row['image'];
			$id=$row['id'];
			echo "
        			     <th background='data:image/jpeg;base64,".base64_encode($img)."' style='width:20%; height:50%'><h1 class='circle-btn' style='width:25%; float:right'>".$row['days']." pack</h1><br>
	<div style='color: white; font-size: 1vw' ><h2>".$row['packageName']." TOUR</h2><hr><a href='home.php?pageName=destination&page=form.php'><button class='btn' style='width:30%'>&nbsp;BOOK NOW&nbsp;</button></a><a href='home.php?pageName=destination&page=destination.php&id=".$id."'><button class='btn' style='width:30%' >LEARN MORE</button></a>
        </div></th>";
        if($count==4){
        	echo "</tr><tr>";
        	$count = 1;
        }
        else{
        	$count++;
        }
    }
    echo "</tr>";
}
			/*if($row1=mysqli_fetch_array($result1))
			{
			$img=$row1['image'];
			$id=$row1['id'];
			echo "
				     <th background='data:image/jpeg;base64,".base64_encode($img)."' style='width:20%; height:50%'><h1 class='circle-btn' style='width:25%; float:right'>".$row1['days']." pack</h1><br>
	<div style='color: white; font-size: 1vw' ><h2>".$row1['name']." TOUR</h2><hr><a href='home.php?pageName=destination&page=form.php'><button class='btn' style='width:30%' >&nbsp;BOOK NOW&nbsp;</button></a><a href='home.php?pageName=destination&page=destination.php&id=".$id."'><button class='btn' style='width:30%' >LEARN MORE</button></a>
	</div><a href='home.php?pageName=destination&page=destination.php&id=".$id."'></a></th>";
			}

			if($row1=mysqli_fetch_array($result1))
			{
			$img=$row1['image'];
			$id=$row1['id'];
			echo "
				     <th background='data:image/jpeg;base64,".base64_encode($img)."' style='width:20%; height:50%'><h1 class='circle-btn' style='width:25%; float:right'>".$row1['days']." pack</h1><br>
	<div style='color: white; font-size: 1vw' ><h2>".$row1['name']." TOUR</h2><hr><a href='home.php?pageName=destination&page=form.php'><button class='btn' style='width:30%' >&nbsp;BOOK NOW&nbsp;</button><a><a href='home.php?pageName=destination&page=destination.php&id=".$id."'><button class='btn' style='width:30%' >LEARN MORE</button></a>
	</div><a href='home.php?pageName=destination&page=destination.php&id=".$id."'></a></th>";
			}

			if($row1=mysqli_fetch_array($result1))
			{
			$img=$row1['image'];
			$id=$row1['id'];
			echo "
				     <th background='data:image/jpeg;base64,".base64_encode($img)."' style='width:20%; height:50%'><h1 class='circle-btn' style='width:25%; float:right'>".$row1['days']." pack</h1><br>
	<div style='color: white; font-size: 1vw' ><h2>".$row1['name']." TOUR</h2><hr><a href='home.php?pageName=destination&page=form.php'><button class='btn' style='width:30%' >&nbsp;BOOK NOW&nbsp;</button></a><a href='home.php?pageName=destination&page=destination.php&id=".$id."'><button class='btn' style='width:30%' >LEARN MORE</button></a>
	</div><a href='home.php?pageName=destination&page=destination.php&id=".$id."'></a></th>
     				</tr>";
			}
		    }
		}*/
	?>
</table>
</div>