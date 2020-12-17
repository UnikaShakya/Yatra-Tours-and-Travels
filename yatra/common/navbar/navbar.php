<?php include_once("connection/connection.php");
  $result=mysqli_query($con,"select * from company");
  $row=mysqli_fetch_array($result);
  $logo=$row['logo'];
  //ob_start();
?>
     <!-- Start of navbar -->
      <div class="tnav" id="topnav">
  <!-- Start of logo -->
      <div class="logo">
        <a href='<?php echo ROOT_URL."/home.php";?>'><img src='<?php echo 'data:image/jpeg;base64,'.base64_encode($logo); ?>' height='38px' width='40px'></a>
<h2 style="color: #ffffff; float: right; top:0 "><?php echo $row['c_name'];?></h2>
      </div><!-- <br><br><br> -->
      <!-- End of logo -->

        <div align="right" id="nav">
            <a class='active' href='<?php echo ROOT_URL."/home.php";?>'><i class='fa fa-home'></i>&nbspHome</a>
            <div class="dropdown">
        <div class="dropbtn"><?php echo "<a href='".ROOT_URL."/home.php?page=packages'>Packages</a>" ?></div>
        <div class="dropdown-content">
            <?php echo "<a href='".ROOT_URL."/home.php?page=economic'>Economic Packages</a>" ?>
            <a href="home.php?pageName=pages&page=deluxe.php">Deluxe Pakage</a>
            <a href="home.php?pageName=pages&page=combo.php">Combo Package</a>
        </div>
    </div>
            
            <?php echo "<a href='".ROOT_URL."/home.php?page=gallery'>Gallery</a>" ?>
            <?php echo "<a href='".ROOT_URL."/home.php?page=companyInfo'>CompanyInfo</a>" ?>
            <?php echo "<a href='".ROOT_URL."/home.php?page=customerSupport'>CustomerSupport</a>" ?>
        </div>
      </div>
      <!-- End of navbar   -->
      <div class="nonfooter" >
      <div class="section" >
    <?php 
        $pagepath = $pageName.'/'.$page;
        if($pagepath!=NULL)
        {
          require_once $pagepath;
        }
    ?>
</div>
</div>