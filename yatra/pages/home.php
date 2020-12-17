<section id="hmain-content">
<div class="section">
<div class="slideshow-container" id="slideshow-container">
  <?php
  include_once("connection/connection.php");
  $sql="SELECT * from `slider`";
  $result=mysqli_query($con,$sql);
  $num=mysqli_num_rows($result);  
  if(mysqli_num_rows($result)>0)
  { 
    $i=1;
    while ($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) {
      $id=$row['id'];
      $img=$row['image'];
      $image='data:image/jpeg;base64,'.base64_encode($img);
      $name=$row['name'];
      $title=$row['title'];
      /*$index=$row['index'];
      $status=$row['status']; */
      echo '<div class="mySlides fade">';
        echo "<a href='#'><img id='slide-img' src='$image' style='width:100%' height='700px'><a>";
        echo "<div class='bottom-left'><div class='slider-content' id='slider-content'>$title</div></div>";
        echo "<div class='centered' style='color: white;'' ><h2>YATRA TOUR</h2><hr><h3>Explore the beauty of Kathmandu Valley</h3><BR><hr><a href='home.php?pageName=destination&page=form.php'><button class='btn' style='width:50%;'>&nbsp;BOOK NOW&nbsp;</button></a><br><a href='home.php?pageName=pages&page=packages.php'><button class='btn' style='width:50%;' >LEARN MORE</button></a></div>";
      echo '</div>';
    }
  }
  echo "<div class='top-right'>
    <div class='circle-btn'><h2><a href='home.php?pageName=pages&page=combo.php'>Book now!!<br>Limited Offer!!</a></h2>
    Check out our combo package.<br>Explore Kathmandu Valley in <br>super valued package.
  </div>";
echo '<a class="prev" onclick="plusSlides(-1)">&#10094;</a>';
echo '<a class="next" onclick="plusSlides(1)">&#10095;</a>';

echo '</div>';
echo '<br>';

echo '<div style="text-align:center">';
  while($num!==0)
  {
    echo '<span class="dot" onclick="currentSlide($i)"></span>';
    $i++;
    $num--;
  }
echo '</div>';
?>
</div>
 <!-- <div class="mySlides fade">
   <a href="home.php?pageName=destination&page=form.php"><img id="slide-img" src="image/slides/pas4.jpg" style="width:100%" height="700px"></a>
   <div class="bottom-left">
    <div class="content">Holy Pashupatinath Darshan</div>
  </div>
  <div class="centered" style="color: white;" ><h2>NAGARKOT TOUR</h2><hr><h3>Explore the beauty of Nagarkot</h3><BR><button class="btn" >BOOK NOW</button><button class="btn" >LEARN MORE</button></div> 
</div>
<div class="mySlides fade">
  <a href="home.php?pageName=destination&page=form.php"><img id="slide-img" src="image/slides/nag1.jpg" style="width:100%" height="700px"></a>
  <div class="bottom-left"><div class="content">Amazing view from Nagarkot</div></div>
  <div class="centered" style="color: white;" ><h2>NAGARKOT TOUR</h2><hr><h3>Explore the beauty of Nagarkot</h3><BR><button class="btn" >BOOK NOW</button><button class="btn" >LEARN MORE</button>
</div>
</div>

<div class="mySlides fade">
  <a href="home.php?pageName=destination&page=form.php"><img id="slide-img" src="image/slides/bas9.jpg" style="width:100%" height="700px"></a>
  <div class="bottom-left"><div class="content">Lively Basantapur</div></div>
   <div class="centered" style="color: white;" ><h2>NAGARKOT TOUR</h2><hr><h3>Explore the beauty of Nagarkot</h3><BR><button class="btn" >BOOK NOW</button><button class="btn" >LEARN MORE</button>
   </div>
</div>
<div class="mySlides fade">
  <a href="home.php?pageName=destination&page=form.php"><img id="slide-img" src="image/slides/bkt10.jpg" style="width:100%" height="700px"></a>
  <div class="bottom-left"><div class="content">Monuments of Bhaktapur</div></div>
   <div class="centered" style="color: white;" ><h2>NAGARKOT TOUR</h2><hr><h3>Explore the beauty of Nagarkot</h3><BR><button class="btn" >BOOK NOW</button><button class="btn" >LEARN MORE</button>
</div>
</div>
<div class="mySlides fade">
  <a href="home.php?pageName=destination&page=form.php"><img id="slide-img" src="image/slides/swa4.jpg" style="width:100%" height="700px"></a>
  <div class="bottom-left"><div class="content">The Monkey Temple:Swyambhunath</div></div>
  <div class="centered" style="color: white;" ><h2>NAGARKOT TOUR</h2><hr><h3>Explore the beauty of Nagarkot</h3><BR><button class="btn" >BOOK NOW</button><button class="btn" >LEARN MORE</button></div>
</div>
<div class="top-right">
    <div class="circle-btn"><h2>Book now!!<br>Limited Offer!!</h2>
    Check out our combo package.<br>Explore Kathmandu Valley in <br>super valued package.
  </div>
</div>
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentslide(4)"></span>
  <span class="dot" onclick="currentslide(5)"></span> 
</div> -->

<H1><center><b class="heading" id="head">Welcome to Yatra Tours & Travels</center></b></h1><br>
 <center>
  <table cellspacing=10 cellpadding=20>
  <tr>
    <td>
  <p><font id="font" size=5px>Yatra Travel and Tours Destination Management Unit of Nepal Combined Holidays of kathmandu valley The foundation of the company was laid by Ms Ipseeka Malla,Manisha Kasalawat,Sandhya Basnet and Unika shakya in the year 2018, at the age of 20, pursuing higher education research on Economics and MBA had passion for travelling all by themselves.It is dedicated to making travel simple. We specialize in a complete range of travel-related services and adventure activities, from five-star to budget class. In providing this full range of travel...........<a href="home.php?page=companyInfo"> Read more</a></font></p></td>
</tr>
</table >
 <div class="boxed">
  <p style="text-align:justify" id="font"><b><h2><center><font id="boxed" size=10px>Places you may want to visit in Kathmandu Valley</font></center></h2></b></p>
      </div>
</center>
<div class="boxed">
  <b><h2><center id="boxed2">“Travel makes one modest. You see what a tiny place you occupy in the world.” -Gustav Flaubert</center></h2></b></p>
      </div>
</center><br>
<?php
  include_once("connection/connection.php");
  $sql="SELECT * from `package` where status=1";
  $result=mysqli_query($con,$sql);
  if(mysqli_num_rows($result)!==0)
  { 
    $i=1;
    while ($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) { 
      $id = $row['id'];
      $img=$row['image'];
      $packageName = $row['packageName'];
      $packageDesc = $row['packageDesc'];
      $image='data:image/jpeg;base64,'.base64_encode($img);
      if($i%2 !== 0){
        echo "<div class='row'>";
          echo "<div class='col-50' id='col-50'>";
              echo '<div class="container">';
                echo '<div class="border-img">';
                  echo "<img src='$image' style='border-radius: 50%;' height='300px' width='300px'>";
                echo '</div>';
                 echo '<div class="overlay">';
                  echo $packageName;
                echo '</div>';
               echo '</div>';
               echo "</div>";
               echo "<div class='col-50'  id='col-50' height='300px' width='100%'>";
              echo '<p><font id="font" size=5px>'.$packageDesc.'</font></p>';
              echo '<a href="'.ROOT_URL.'/pages/destination/destination.php?pid='.$id.'">';
                echo '<div class="button" >';
                  echo 'Read more';
                echo '</div>';
              echo '</a>';
              echo "</div>";
          echo '</div>';
      }
      else
      {
        echo "<div class='row'>";
          echo "<div class='col-50' id='evencol-50'>";
           echo '<font id="font" size=5px>'.$packageDesc.'</font>';
           echo '<a href="'.ROOT_URL.'/pages/destination/destination.php?pid='.$id.'">';
             echo '<div class="button" >';
              echo 'Read more';
             echo '</div>';
           echo '</a>';
          echo '</div>';
          echo "<div class='col-50' id='evenimagecol-50'>";
            echo '<div class="container">';
              echo '<div class="border-img">';
                echo "<img src='$image' style='border-radius: 50%;' height=300 width=300>";
              echo '</div>';
              echo '<div class="overlay">';
                echo $packageName;
              echo '</div>';
            echo '</div>';
          echo '</div>';
        echo '</div>';
      }
      $i++;
    }
  }
?>









<!-- <table cellspacing="30" >
  <tr >
    <td>
      <div class="container">
        <div class="border-img"><img src="image/Bkt db/bkt5.jpg" style="border-radius: 50%;" height=300 width=300></a></div>
         <div class="overlay">Bhaktapur</div></div>
         </td>
         <td>
          <font size=5px>Bhaktapur, literally translates to Place of devotees. Also known as Khwopa, it is an ancient Newa city in the east corner of the Kathmandu Valley, Nepal, about 8 miles from the capital city, Kathmandu. It is located in Bhaktapur District in the Bagmati Zone......</font><a href="https://en.wikipedia.org/wiki/Bhaktapur">
      <div class="button" >Read more</div></a></td>

       
      </div>
    </tr>
    <tr>
      <td>
       <font size=5px>Swayambhunath is an ancient religious architecture atop a hill in the Kathmandu Valley, west of Kathmandu city. The Tibetan name for the site means 'Sublime Trees', for the many varieties of trees found on the hill......</font><a href="https://en.wikipedia.org/wiki/Swayambhunath"><div class="button" >Read more</div></a></td>
       <td>
      <div class="container">
       <img src="image/Swyambhunath/swa5.jpg"style="border-radius: 50%;" height=300 width=300>
       <div class="overlay">Swyambhunath</div></div></td>
       <td>
         </div>
    </tr>
    <tr>
       <td>
      <div class="container">
       <img src="image/Patan db/pat1.jpg"style="border-radius: 50%;" height=300 width=300>
         <div class="overlay">Patan</div>
       </div></td>
       <td>
       <font size=5px>Lalitpur Metropolitan City, historically Patan, is the third largest city of Nepal after Kathmandu and Pokhara and it is located in the south-central part of Kathmandu Valley which is a new metropolitan city of Nepal. Lalitpur is also known as Manigal.....</font><a href="https://wikitravel.org/en/Patan"><div class="button" >Read more</div></a></td>
    </div>
</td>
 </tr>
 <tr>
    <td>
       <font size=5px>Kailashnath Mahadev Statue (Nepali: ???????? ??????) is the world's tallest Shiva statue. It is second tallest Hindu deity after Garuda Wisnu Kencana Statue in Bali, Indonesia. It is situated in Sanga, on the border of the Bhaktapur and Kavrepalanchwok districts in Nepal, about 20 km from Kathmandu.....</font><a href="https://en.wikipedia.org/wiki/Kailashnath_Mahadev_Statue"><div class="button" >Read more</div></a></td>
       <td>
      <div class="container">
       <img src="image/mahadev/mah4.jpg"style="border-radius: 50%;" height=300 width=300>
         <div class="overlay">Sanga</div></td>
      
          </div>
         <tr>
<tr>
     <td>
      <div class="container">
       <img src="image/Nagarkot/nag4.jpg"style="border-radius: 50%;" height=300 width=300>
        <div class="overlay">Nagarkot</div>
          </td>
          <td>
       <font size=5px>Nagarkot,located 32 km east of Kathmandu, Nepal in Bhaktapur District in the Bagmati Zone.Nagarkot commands one of the broadest views of the Himalayas in the Kathmandu valley (8 Himalayan ranges of Nepal out of 13 from here)......</font><a href="https://en.wikipedia.org/wiki/Nagarkot"><div class="button" >Read more</div></a></td>
         </div>
</tr>
     <tr>
      
          <td>
       <font size=5px>Kathmandu Durbar Square (Basantapur Darbar Kshetra) in front of the old royal palace of the former Kathmandu Kingdom is one of three Durbar (royal palace) Squares in the Kathmandu Valley in Nepal, all of which are UNESCO World Heritage Sites.The Kathmandu Durbar Square held the palaces of the Malla and Shah kings who ruled over the city.....</font><a href="https://en.wikipedia.org/wiki/Kathmandu_Durbar_Square"><div class="button" >Read more</div></a>
     </td>
     <td>
      <div class="container">
       <img src="image/ktm db/bas1.jpg"style="border-radius: 50%;" height=300 width=300>
        <div class="overlay">Basantapur</div>
          </td>
         </div>
  </tr>
<tr>
   <td>
      <div class="container">
       <img src="image/pahupatinath/pas1.jpg" style="border-radius: 50%;"height=300 width=300>
        <div class="overlay">Pashupatinath</div>
          </td>
           <td>
       <font size=5px>The Pashupatinath Temple (Nepali: ????????? ??????) is a famous and sacred Hindu temple complex that is located on the banks of the Bagmati River, approximately 5 kilometres north-east of Kathmandu in the eastern part of Kathmandu Valley, the capital of Nepal. The temple serves as the seat of Nepal's national deity, Lord Pashupatinath. ....</font><a href="https://en.wikipedia.org/wiki/Pashupatinath_Temple"><div class="button" >Read more</div></a>
     </td>

</div>
</tr>
<tr>
  
           <td>
       <font size=5px>The Garden of Dreams (Nepali:?????? ??????), also, the Garden of Six Seasons, is a neo-classical garden in Kaiser Mahal Kathmandu, Nepal, built in 1920. Designed by Kishore Narshingh, it consists of 6,895 square metres (74,220 sq ft) of gardens with three pavilions, an amphitheater, ponds, pergolas, and urns.....</font><a href="https://en.wikipedia.org/wiki/Garden_of_Dreams"><div class="button" >Read more</div></a></td>
       <td>
      <div class="container">
       <img src="image/god/god1.jpg" style="border-radius: 50%;"height=300 width=300>
        <div class="overlay">Garden of dreams</div>
          </td>

</tr>
<tr>
   <td>     
    <div class="container">
       <img src="image/godawari/goda1.jpg"style="border-radius: 50%;" height=300 width=300>
        <div class="overlay">Godawari</div>
          </td>
          <td>
       <font size=5px>Godawari lies in the southern town in Godawari Municipality in Lalitpur District in the Bagmati Zone of central Nepal. In year 2014 Dec, Nepal government merged five Village Development Committees including Godawari to create Godawari Municipality in Nepal. In 2011, it had a population of 15,572 in 1,825 individual households in this region. .....</font><a href="https://en.wikipedia.org/wiki/Godawari_Municipality"><div class="button" >Read more</div></a></td>
 </div>
     </td>
     <tr>
   
</table> -->
</div>

<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>
<?php include('common/footer/footer.php') ?> 
</section> 