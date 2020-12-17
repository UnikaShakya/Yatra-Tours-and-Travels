<section id="main-content" class="content">
<!--overview start-->
<div class="row">
  <div class="col-99">
    <ol class="block">
         <i class="fa fa-home"></i> <?php echo "<a href='".ROOT_URL."/admin/admin.php?page=home'>Home</a>" ?> | Team
         <div class="right">
          <?php echo "<a href='".ROOT_URL."/admin/admin.php?page=team&pageName=create.php' style='text-decoration:none;'><i class='fa fa-plus'></i> Add</a>" ?>
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
            <th>Image</th>
            <th>Name</th>
            <th>Position</th>
            <th>Email</th>                    
            <th>Contact</th>
            <th colspan="3" style="text-align: center;">Setting</th>
          </tr>
        </thead>
    <!-- End of table head -->

    <!-- Start of table data -->
    <?php
    $sql="SELECT * from team";
    $result=mysqli_query($con,$sql);   
    if(mysqli_num_rows($result)>0)
    {
        $sn=1;
        while ($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $id=$row['id'];
            $img=$row['image'];
            $image='data:image/jpeg;base64,'.base64_encode($img);
            $name=$row['name'];
            $position=$row['position'];
            $email=$row['email'];
            $phone=$row['contact'];
            //echo "<td><img src="{{url($data->imagefile)}}" alt="" width="50" height="50" /></td>";
            
            echo "<tr>";
            echo "<td>".$sn."</td>";
            echo "<td>"."<img src='".$image."' height='50px' width='50px'>"."</td>";
            echo "<td>".$name."</td>";
            echo "<td>".$position."</td>";
            echo "<td>".$email."</td>";                    
            echo "<td>".$phone."</td>";
            echo '<td style="text-align: center;"><a href="'.ROOT_URL.'/admin/admin.php?page=team&pageName=edit.php&action=update&id='.$row["id"].'"><i class="fa fa-edit" aria-hidden="true"></i> Edit</a></td>';
            echo '<td style="text-align: center;"><a href="'.ROOT_URL.'/admin/admin.php?page=team&pageName=function.php&action=delete&id='.$row["id"].'" ><i class="fa fa-trash" aria-hidden="true"></i> Delete</a></td>';            
            /*echo '<td style="text-align: center;"><a href="#"><i class="fa fa-arrow-up" aria-hidden="true"></i> Up</a></td>';
           echo  '<td style="text-align: center;"><a href="#"><i class="fa fa-arrow-down" aria-hidden="true"></i> Down</a></td>';*/
            echo  '</tr>';
        $sn=$sn+1;
        }
    }       
        mysqli_close($con);
        ?>
    <!-- End of table data -->
      </table>
<!-- End of table -->
</section>