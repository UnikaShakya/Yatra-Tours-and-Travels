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
<!-- Start of table -->
	<!-- start of table head -->
      <table class="table">
        <thead>
          <tr>
            <th>S.N.</th>
            <th>Name</th>
            <th>Email</th>      
            <th colspan="3" style="text-align: center;">Setting</th>
          </tr>
        </thead>
    <!-- End of table head -->

    <!-- Start of table data -->
    <?php
    $sql="SELECT * from feedback";
    $result=mysqli_query($con,$sql);   
    $num_row = mysqli_num_rows($result);
    if($num_row>0)
    {
      $sn=1;
      while ($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) {
          $id=$row['id'];
          $name=$row['name'];
          $email=$row['email'];
          echo "<tbody>";
            echo "<tr>";
            echo "<td>".$sn."</td>";
            echo "<td>".$name."</td>";
            echo "<td>".$email."</td>";  
            echo '<td style="text-align: center;"><a href="'.ROOT_URL.'/admin/admin.php?page=feedback&pageName=view.php&action=update&id='.$row["id"].'"><i class="fa fa-eye" aria-hidden="true"></i> View</a></td>';
            echo '<td style="text-align: center;"><a href="'.ROOT_URL.'/admin/admin.php?page=feedback&pageName=function.php&action=delete&id='.$row["id"].'" ><i class="fa fa-trash" aria-hidden="true"></i> Delete</a></td>';
            echo  '</tr>';
          echo "</tbody>";
        $sn=$sn+1;
      }
    }       
    mysqli_close($con);
    ?>
    <!-- End of table data -->
      </table>
<!-- End of table -->
</section>