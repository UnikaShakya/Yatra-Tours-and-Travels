<?php
  $id=$_GET['id'];
  $sql="select * from package where id='$id'";
  $result=mysqli_query($con,$sql);
  $row=mysqli_fetch_array($result);
  $img=$row['image'];
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
#more {display: none;}
.mySlides {display:none;}
</style>

<div class="section2">
	<br><br>
 <center><h1 class="heading">To <?php echo $row['destination'];?> From <?php echo $row['s_point'];?></h1>
</center>
<div style="width:100%; height: auto;">
<div class="w3-content w3-display-container" id="slider2" style="" >
  <button class="w3-button w3-black w3-display-left " onclick="plusDivs(-1)" style="max-width:1%; height:auto; " >&#10094;</button>
  <button class="w3-button w3-black w3-display-right " onclick="plusDivs(1)" style="max-width:1%; height:auto;">&#10095;</button>
  <img class="mySlides" src="<?php echo 'data:image/jpeg;base64,'.base64_encode($img);?>" style="width:100%; height: 100%; float: left;" >
<?php
  $sql2="select * from gallery where pid='$id'";
  $result2=mysqli_query($con,$sql2);
  if(mysqli_num_rows($result2)>0)
  {
  	while($row2=mysqli_fetch_array($result2))
	{
  	$img=$row2['image'];
	?>
  	<img class="mySlides fade" src="<?php echo 'data:image/jpeg;base64,'.base64_encode($img);?>" style="width:100%; height: 100%; float: left;">
   <?php
     }
  }
 ?> 
</div>
	<div class="qfact"> <?php echo $row['caption'];?><br>
    <table cellspacing="0" width=25% class="w3-table-all" style='overflow: auto;'>
          <tr class="w3-grey w3-hover-red">
		     <th colspan=2>QUICK FACTS</th>
		  </tr>
		  <tr>
            <td><u>Route:<u></td>
            <td style="text-align:justify text-decoration:none"> <?php echo $row['route'];?></td>
          </tr>
          <tr>
            <td>Price(Economic):</td>
            <td style="text-align:justify"> <?php echo $row['price_economic'];?></td>
          </tr>
	  <tr>
            <td>Price(Deluxe):</td>
            <td style="text-align:justify"> <?php echo $row['price_deluxe'];?></td>
          </tr>
          <tr>
            <td>Duration</td>
            <td style="text-align:justify"> <?php echo $row['days'];?></td>
          </tr>
	<?php
		 $sql="select * from packageinfo";
  		$result2=mysqli_query($con,$sql);
  		$row2=mysqli_fetch_array($result2);
	?>

          <tr>
            <td>Our Packages Includes:</td>
            <td style="text-align:justify"><?php echo $row2['p_details'];?></td>
          </tr>
          <tr>
            <td>Reporting time</td>
            <td style="text-align:justify"><?php echo $row2['r_time'];?></td>
          </tr>
          
        </table><br><br><br></div>
</div></div>
<div class="col" width=100%>
  <div class="box" >
     <center><h2 class="heading">OUTLINE ITINERY</h2></center>
      <?php
     $sql="select * from schedule where `pid`=$id";
      $result3=mysqli_query($con,$sql);
      while($row = mysqli_fetch_array($result3)){
        echo "<b>Day 0".$row['day']."</b>";
        echo $row['schedule'];
      }

  ?>
  
<center> <a href="home.php?pageName=destination&page=form.php&id=<?php echo $id;?>" >
      <input type="submit" class="button" name="orderticket" value="Order Ticket"></a>
    </form>  </center>
    
</div>
  <br>


	<div class="comment">
	<h2>Recent Comments</h2>
		<?php
			$sql="SELECT * FROM feedback Order by id DESC";
			 $result3=mysqli_query($con,$sql);
			 if(mysqli_num_rows($result3)>0)
			 {
				 $count=0;
				while($count<3)
				{	$count++;
					if($row3=mysqli_fetch_array($result3))
					{
					?><hr ><font color="red">
					<?php echo $row3['message'];?><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-
					<?php echo $row3['name'];?></font>
					<?php
					}
				}
			 }
		?>


    </div>
    </div> 
  

 
<br><br>
<center><h2 class="heading">You may also like</h2>  

<table cellspacing="30px">
  <tr>
	<?php
	$count=1;
	$sql="select * from gallery";
  	$result=mysqli_query($con,$sql);
	 if(mysqli_num_rows($result)>0)
   		{
		   while($row=mysqli_fetch_array($result))
		    {
			if($count>4)
				break;
			$img=$row['image'];
			$count++;
	?>
       <td> 
       		<div class="container">
        	<div class="border-img"><img src="<?php echo 'data:image/jpeg;base64,'.base64_encode($img);?>" style="border-radius: 25%;" height="350" width="300">
		</div></div>
      </td>
<?php
     	}
     }
?>
</tr>
</table>
</center>
  
</div>

<script>
       
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>