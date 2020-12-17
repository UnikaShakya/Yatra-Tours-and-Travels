<?php include('../../configuration/configuration.php') ?>
<?php 
if(isset($_POST['submit']))
{
    echo '<script type="text/javascript">';
    echo "window.location = '".ROOT_URL."/home.php';";
    echo '</script>';
}
?>
<?php include_once('../../common/header/header.php') ?>
<?php include_once('../../common/navbar/navbar.php') ?>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
#more {display: none;}
.mySlides {display:none;}
</style>
<div class="section">
  <br><br>
  <?php
    include_once("../../connection/connection.php");
    $id=$_GET['pid'];
    $sql="SELECT * from `package` WHERE `id` = '$id'";
    $result=mysqli_query($con,$sql);  
    if(mysqli_num_rows($result)>0)
    {
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
      $title = $row['title'];
      $imageDesc = $row['imageDesc'];
      echo "<center><h1 class='heading'>".$title."</h1></center>";

      $sql1="SELECT * from `gallery` WHERE `pid` = '$id' AND `index` != 1";
      $result1=mysqli_query($con,$sql1);
      if(mysqli_num_rows($result1)>0)
      {
        echo '<div class="w3-content w3-display-container ">';
        echo '<button class="w3-button w3-black w3-display-left " onclick="plusDivs(-1)">&#10094;</button>';
        echo '<button class="w3-button w3-black w3-display-right " onclick="plusDivs(1)">&#10095;</button>';
        while($galleryRow = mysqli_fetch_array($result1, MYSQLI_ASSOC))
        {
          $image = $galleryRow['image'];
          echo "<img class='mySlides' src='$image' style='width:100%' height=550px>";
        }
        echo '</div>';
      }
      echo "<center><font size=5px color='Purple'>".$imageDesc."</font></center>";
      echo '<br><br><center><h2 class="heading">Experience</h2></center>';
      
      $sql2="SELECT * from `packageinfo` WHERE `pid` = '$id'";
      $result2=mysqli_query($con,$sql2);
      if(mysqli_num_rows($result2)>0)
      {
        echo '<center>';
          echo '<div class="boxed">';
            echo '<table>';
            while($pInfoRow = mysqli_fetch_array($result2, MYSQLI_ASSOC))
            {
              $index = $pInfoRow['index'];
              $topic = $pInfoRow['topic'];
              $topicDesc = $pInfoRow['topicDesc'];
              echo '<tr>';
                echo "<th width='110px'>".$topic."</th>";
                echo "<td style='text-align:justify'>".$topicDesc."</td>";
              echo '</tr>';
            }
            echo '</table>';
          echo '</div>';
        echo '</center>';
      }

    }
  ?>    
            <!-- <tr>
            <th>Full description</th>
            <td style="text-align:justify">Meet your guide and vehicle at your hotel. Drive 14 kms East from Kathmandu to visit ancient city of Bhaktapur. Bhaktapur Durbar Square is one of seven UNESCO heritage site located inside Kathmandu valley. Kathmandu valley is also known as only living cultural museum in the world as this place is dotted with many ancient royal complexes, temples, monasteries with colorful traditional culture and rituals of local Newari people.<br><br><span id="dots">...</span><span id="more">

Brace yourself to local tradition and culture of local people at Bhaktapur. Explore narrow lanes to witness the lifestyle. Visit Bhaktapur Durbar Square dotted with ancient Royal Palace and temples. The major attractions includes Bhaktapur Durbar Square, 55 Window palace, Royal Bath, Taleju Temple (Outside) with most fascinating carved door and Royal Golden Gate.<br><br>

Continue walk to Nayatapola Square located 5 minutes walk from Durbar Square following narrow lane with Handicraft, Painting and Thankas shops. Nayatapola temple is the highest Hindu temple located in Nepal in terms of structure.<br><br>

Also visit Dattatraya temple area and Pottery Square located inside old city to explore rituals and heritage. In Pottery Square you will see traditional way of mud work to make pots, souvenir and other daily use items. </span>
<button onclick="myFunction()" id="myBtn">Read more</button></td>
          </tr> -->
        <br> 
 <center>
 <table border="3" width="500">
      <tr>
        <td rowspan="2" style="text-align:justify">
       <font size=5px>Select participants and date:<br><br>
        People:<input type="number"><br><br>
        <input type="date"><br><br>
        <input type="button" value="Check Availability"></font>
      </table></center>
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
<center> <form action="#" method="POST">
      <a href="../pages/hotel.php" class="button">BOOK NOW</a>
    </form>  </center><br><br>
<center><h2 class="heading">You may also like</h2></center>
<table cellspacing="30px">
  <tr>
    <td> 
       <div class="container">
        <div class="border-img"><img src="../image/Bkt db/bkt11.jpg" style="border-radius: 25%;" height="350" width="300">
        <div class="overlay">Changunarayan</div>
      </td>
<td>
  <div class="container">
    <div class="border-img"><img src="../image/Bkt db/bkt12.jpg" style="border-radius: 25%;" height=350" width="300">
    <div class="overlay">55 Window place</div>
  </td>
<td>
   <div class="container"><div class="border-img"><img src="../image/Bkt db/bkt13.jpg" style="border-radius: 25%;" height="350" width="300">
   <div class="overlay">Siddha pokhari</div>
 </td>
<td>
   <div class="container">
    <div class="border-img"><img src="../image/Bkt db/bkt14.jpg" style="border-radius: 25%;" height="350" width="300">
      <div class="overlay">Kamal pokhari</div>
</td>
</tr>
</table>

  <?php include_once('../../common/footer/footer.php') ?>