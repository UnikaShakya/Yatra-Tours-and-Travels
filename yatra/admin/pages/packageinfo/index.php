<!--overview start-->
<div class="row">
  <div class="col-99">
    <ol class="block">
         <i class="fa fa-home"></i> <?php echo "<a href='".ROOT_URL."/admin/admin.php?page=home'>Home</a>" ?> | Packages Inforamtion
         <div class="right">
          <?php echo "<a href='".ROOT_URL."/admin/admin.php?page=packageinfo&pageName=create.php' style='text-decoration:none;'><i class='fa fa-plus'></i> Add</a>" ?>
         </div>
    </ol>
  </div>
</div>
<!-- End of overview-->
<!-- Start of table -->
	<!-- start of table head -->
      <table class="table">
        <thead>
          <tr>
            <th>S.N.</th>
            <th>Package Name</th>
            <th>Title</th>
            <th>Topic</th>
            <th>Index</th>
            <th colspan="3" style="text-align: center;">Setting</th>
          </tr>
        </thead>
    <!-- End of table head -->

    <!-- Start of table data -->
    <?php
    /*$sql="SELECT * from packageinfo";
    $result=mysqli_query($con,$sql);   
    if(mysqli_num_rows($result)>0)
    {
        $sn=1;
        while ($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) {*/
        $sn=1;
        $_SESSION['table'] = 'packageinfo';   
        require_once("pagination/pagination.php");
        while($row = mysqli_fetch_array($res_data)){
          $id=$row['id'];
          $pid=$row['pid'];
          $topic=$row['topic'];
          $index=$row['index'];
          
          echo "<tr>";
          echo "<td>".$sn."</td>";
          $sql1="SELECT * from package WHERE `package`.`id` = '$pid'";
          $result1=mysqli_query($con,$sql1); 
          if(mysqli_num_rows($result1)>0)
            {
              $packageRow = mysqli_fetch_array($result1, MYSQLI_ASSOC);
              $packageName = $packageRow['packageName'];
              $title = $packageRow['title'];
              echo "<td>".$packageName."</td>";
              echo "<td>".$title."</td>";
            }
          else
            {
              echo "<td>    </td>";
              echo "<td>    </td>";
            }
            echo "<td>".$topic."</td>";
            echo "<td>".$index."</td>";
            echo '<td style="text-align: center;"><a href="'.ROOT_URL.'/admin/admin.php?page=packageinfo&pageName=edit.php&action=update&id='.$row["id"].'"><i class="fa fa-edit" aria-hidden="true"></i> Edit</a></td>';
            echo '<td style="text-align: center;"><a href="'.ROOT_URL.'/admin/admin.php?page=packageinfo&pageName=function.php&action=delete&id='.$row["id"].'" ><i class="fa fa-trash" aria-hidden="true"></i> Delete</a></td>';            
            /*echo '<td style="text-align: center;"><a href="#"><i class="fa fa-arrow-up" aria-hidden="true"></i> Up</a></td>';
            echo  '<td style="text-align: center;"><a href="#"><i class="fa fa-arrow-down" aria-hidden="true"></i> Down</a></td>';*/
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
            echo "<li><a href='".ROOT_URL."/admin/admin.php?page=packageinfo&pageName=index.php&pageno=".$i."'>".$i."</a></li>";
          }
          ?>
        </ul>
    </center>
  </div>