<?php 
if (isset($_GET['id'])) {
  $_SESSION['id'] = $_GET['id'];
  $sql = "SELECT * FROM `feedback` WHERE `id`=".$_GET['id'];
        $result = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_array($result)){
            $data = $row;
        }
}
?>
<section id="main-content" class="content">
<!--overview start-->
<div class="row">
  <div class="col">
    <ol class="block">
         <i class="fa fa-home"></i> <?php echo "<a href='".ROOT_URL."/admin/admin.php?page=home'>Home</a>" ?> | Feedbacks
    </ol>
  </div>
</div>
<!-- End of overview-->

<div class="row">
  <div class="col">
    <ol class="block">
         Name:<?php echo $data['name']; ?> 
    </ol>
  </div>
</div>

<div class="row">
<center>
	<td style='text-align:justify'><?php echo $data['message']; ?></td>	
</center>
</div>
</section>