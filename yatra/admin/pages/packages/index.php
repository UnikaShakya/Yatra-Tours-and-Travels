<section id="main-content" class="content">
<!--overview start-->
<div class="row">
  <div class="col-99">
    <ol class="block">
         <i class="fa fa-home"></i> <?php echo "<a href='".ROOT_URL."/admin/admin.php?page=home'>Home</a>" ?> | Packages
         <div class="right">
          <?php echo "<a href='".ROOT_URL."/admin/admin.php?page=packages&pageName=create.php' style='text-decoration:none;'><i class='fa fa-plus'></i> Add</a>" ?>
         </div>
    </ol>
  </div>
</div>
<!-- End of overview-->
<!-- Start of package -->
<div class="row">
  <div class="col-65">
  <?php
  $_SESSION['table'] = 'package';   
    require_once("pagination/pagination.php");
    while($row = mysqli_fetch_array($res_data)){
        $id=$row['id'];
        $img=$row['image'];
        $image='data:image/jpeg;base64,'.base64_encode($img);
        $name=$row['packageName'];
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
         echo '<a href="'.ROOT_URL.'/admin/admin.php?page=packages&pageName=edit.php&action=update&id='.$row["id"].'" style="margin-right: 20px;text-decoration: none;"><i class="fa fa-edit" aria-hidden="true"></i> Edit</a>';
               echo '<a href="'.ROOT_URL.'/admin/admin.php?page=packages&pageName=function.php&action=delete&id='.$row["id"].'" style="text-decoration: none;"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>';
      echo'</div>';
    echo'</div>';
  }
  unset($_SESSION["table"]);
    ?>
    <div class="row">
  <div class="col">
    <center>
        <ul class="pagination">
          <?php 
          $i=1;
          for($i=1;$i<=$total_pages;$i++)
          {
            echo "<li><a href='".ROOT_URL."/admin/admin.php?page=packages&pageName=index.php&pageno=".$i."'>".$i."</a></li>";
          }
          ?>
        </ul>
    </center>
  </div>
</div>
  </div>  

<!-- End of package Image -->
<?php
  $sql1="select * from packageinfo";
  $result1=mysqli_query($con,$sql1);
  $row1=mysqli_fetch_array($result1);
  mysqli_close($con);
?>
<!-- Start of Package Info management -->
<!-- start of Package Info management block -->
  <form method="POST" action="pages/packages/function.php" enctype="multipart/form-data">
  <div class="col-35">
    <div class="col">
      <ol class="block" style="margin-top: 9px;width: 90%;">
           <i class="fa fa-sliders-h"></i> Package Information Management
      </ol>
    </div>


      <div class="row">
        <div class="col-label">
          <div class="label"><label>Our Packages Includes:</label></div>
        </div>
        <div class="col-input">
        <input type="text" style="padding :0.4em; height:200px" placeholder="<?php echo $row1['p_details'];?>" value="<?php echo $row1['p_details'];?>" name="p_details" size=35% class="inputtext">
      </div>
      </div>

      <div class="row">
      <div class="col-label">
        <div class="label"><label>Reporting Time:</label></div>
      </div>
      <div class="col-input">
        <input type="text"  placeholder="<?php echo $row1['r_time'];?>" value="<?php echo $row1['r_time'];?>" name="r_time" size=35% class="inputtext"> 
      </div>
    </div>
      <br>
  <!-- Start of Update Inforamtion -->
    <div class="row">
        <div class="col">
          <ol class="block" style="width: 90%;">
               <input class="btn" type="submit" name="pinfoupdate" value="Update">
          </ol>
        </div>
      </div>
  <!-- End of Update Inforamtion -->
  </div>
  </form>
</div>
</section>