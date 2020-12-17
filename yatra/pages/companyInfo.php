<?php $result=mysqli_query($con,"SELECT * from about");
  $row=mysqli_fetch_array($result);
  $img=$row['coverimmg'];
  $image='data:image/jpeg;base64,'.base64_encode($img);
 ?>
<section id="main-content">
<div class="section2">
<br>
 <center><h1 class="heading">About Us</h1>
  <img id="aboutimage" src="<?php echo $image;?>" height='700px' width='1000px'>
 </center>
<br><br>
<center>
  <div class="boxed">
    <center><p style="text-align:justify" align="center"><?php echo $row['description']; ?></p> </center> 
    
    <table cellspacing="5px">
      <tr>
        <th width="110px">Vision:</th>
        <td style="text-align:justify" width="2500px">&nbsp<?php echo $row['vision']; ?></td>
      </tr>

        <tr>
        <th>Mission:</th>
        <td style="text-align:justify">&nbsp<?php echo $row['mission']; ?></td>
      </tr>

        <tr>
        <th>Motto:</th>
        <td style="text-align:justify">&nbsp<?php echo $row['motto']; ?></td>
      </tr>
    </table>
</div>
<br>
</center>
<pre><h1 class="heading">      Core Values</h1></pre>
<center>
     <table class="boxed">
  <?php
      echo "<tr>
                   <td>".$row['coreValues']."</td>
            </tr>";
  ?>
    </table>
  </center>
<pre><h1 class="heading">      Our Team</h1></pre>
<center>
     <table class="boxed">
  <?php
    $result1=mysqli_query($con,"select * from team");
     if(mysqli_num_rows($result1)>0)
      {
       while($row1=mysqli_fetch_array($result1))
        {
      echo "<tr>
                   <td>".$row1['name']."(".$row1['contact'].")</td>
            </tr>";
        }
    }
  ?>
    </table>
  </center>
</div><br>
</div>
</section>