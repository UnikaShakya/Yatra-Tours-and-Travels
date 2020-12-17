<section id="main-content" class="content">
<!--overview start-->
<div class="row">
  <div class="col-99">
    <ol class="block">
         <i class="fa fa-home"></i> <?php echo "<a href='".ROOT_URL."/admin/admin.php?page=home'>Home</a>" ?> | Schedule
         <div class="right">
          <?php echo "<a href='".ROOT_URL."/admin/admin.php?page=schedule&pageName=create.php' style='text-decoration:none;'><i class='fa fa-plus'></i> Add</a>" ?>
         </div>
    </ol>
  </div>
</div>
<!-- End of overview-->
<!-- Start of table -->
	<!-- start of table head -->

  <?php
  $pid = $_SESSION['pid'];
  $nam = "SELECT * FROM package WHERE `package`.`id` = $pid";
  $name = mysqli_query($con,$nam); 
  $res = mysqli_fetch_array($name);
  echo "Package Name: ".$res['packageName']; 
  ?>
      <table class="table">
        <thead>
          <tr>
            <th>S.N.</th>
            <th>Day</th>
            <th colspan="3" style="text-align: center;">Setting</th>
          </tr>
        </thead>
    <!-- End of table head -->

    <!-- Start of table data -->
    <?php
    /*$sql="SELECT * from package";
    $result=mysqli_query($con,$sql);   
    if(mysqli_num_rows($result)>0)
    {
        $sn=1;
        while ($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) {*/
            $sn=1; 
            if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
            } else {
                $pageno = 1;
            }
            $no_of_records_per_page = 12;
            $offset = ($pageno-1) * $no_of_records_per_page;

            $total_pages_sql = "SELECT COUNT(*) FROM schedule";
            $res = mysqli_query($con,$total_pages_sql);
            $total_rows = mysqli_fetch_array($res)[0];
            $total_pages = ceil($total_rows / $no_of_records_per_page);

            $sql = "SELECT * FROM schedule WHERE `pid` = $pid LIMIT $offset, $no_of_records_per_page";
            $res_data = mysqli_query($con,$sql); 
            while($row = mysqli_fetch_array($res_data)){
            $id=$row['id'];
            $day=$row['day'];
            
            echo "<tr>";
            echo "<td>".$sn."</td>";
            echo "<td>".$day."</td>";
            echo '<td style="text-align: center;"><a href="'.ROOT_URL.'/admin/admin.php?page=schedule&pageName=edit.php&action=update&id='.$row["id"].'"><i class="fa fa-edit" aria-hidden="true"></i> Edit</a></td>';
            echo '<td style="text-align: center;"><a href="'.ROOT_URL.'/admin/admin.php?page=schedule&pageName=function.php&action=delete&id='.$row["id"].'" ><i class="fa fa-trash" aria-hidden="true"></i> Delete</a></td>'; 
            echo  '</tr>';
        $sn=$sn+1;
        }       
        mysqli_close($con);
        ?>
    <!-- End of table data -->
      </table>
<!-- End of table -->
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
</section>