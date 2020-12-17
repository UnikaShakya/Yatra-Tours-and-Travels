<!DOCTYPE html>

//<?php 
//if(isset($_POST['submit']))
//{
	//{if(isset($_GET['pid']))
		//{
			//$sql= "SELECT packamt from package";
			//$amt=mysqli_query($con,$sql);
			////$amt=$_POST['packamt']; //package price
			//echo "package price:" .$amt;
			//$taxamt=0.13*$amt;  //tax amount
			//echo "tax amount:" .$taxamt;
			//$psc=0.05*$amt;    //product service charge
			//echo "product service charge:" .$psc;
			//$pdc=0;            //product delivery charge
			//echo "product delivery charge:" .$pdc;
			//$tamount=$amt+$taxamt+$psc+$pdc;
			//echo "Total amount:" .$tamount;
		//}	
//	}
//}

//?>
<div class="section2">
 	<center>
 	<div class="form-border">
  	<div class="form-container">
  		<form action="destination/payment.php" method="POST"> 	   

 	   <h1>BOOKING FORM</h1>

<font color="red">
<?php 
/*if(isset($_POST['submit']))
{
// function check_number($phone='$_POST["number"]'){
//  if(preg_match("//^9+([7-8][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]+)//", $input_email)) { return true; }
// }



	  $phone=$_POST['number'];
	//    if(!isset($_POST['hotel'])  || !isset($_POST['check']))
	// // {
	// //   echo("*Please compulsarily fill all the fields.");
	// // }
	// else
	// {
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$phone=$_POST['number'];
	$package=$_POST['package'];
	//otel=$_POST['hotel'];
	$r_date=$_POST['in'];
	// checkdate(month, day, year)
	//ansport=$_POST['transport'];
	$check=$_POST['check'];
		  if($firstname==null || $lastname==null ||  $email==null || $address==null || $phone==null || $package==null ||$r_date==null || $check==NULL)
		  {
		    echo("*Please compulsarily fill all the fields.");
		   }
		  else
		  {
		  if (filter_var($email, FILTER_VALIDATE_EMAIL)) 
  	          {
			$sql= "insert into customer values(NULL,'$firstname','$lastname','$email','$address','$phone','$package','$r_date')";
			mysqli_query($con,$sql);
			//mysqli_close($con);
			 echo '<script type="text/javascript">';
   			echo'alert("Your Ticket Has Been Successfully Booked");';
    			echo "window.location = '".ROOT_URL."/home.php';";
   			 echo '</script>';		
		  }
		  else
		  {
		  	echo("*Please enter a valid email address.");
		  }
		  }
	}
*/
?>
</font>
		<table style="width: 100%; font-size: 30px; font-family: Georgia;">
		<tr>
		   <td>First Name:</td>
		   <td><input  class="form-fill" type="text" pattern="[A-Z][a-z]{1,15}" name="firstname" value="<?php echo isset($_POST['firstname']) ? $_POST['firstname'] : '' ?>"></td>
		</tr>
		<tr>
 		<td>Last Name:</td>
		<td><input class="form-fill" type="text" pattern="[A-Z][a-z]{1,15}" name="lastname" value="<?php echo isset($_POST['lastname']) ? $_POST['lastname'] : '' ?>"></td>
		</tr>
		<tr>
 		<td>Email:</td>
		<td><input class="form-fill" type="text" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>"></td>
		</tr>
		<tr>
 		<td>Address:</td>
		<td><input class="form-fill"  type="text" pattern="[A-Z][a-z]{1,15}" name="address" value="<?php echo isset($_POST['address']) ? $_POST['address'] : '' ?>"></td>
		</tr>
		<tr>
 		<td>Phone-no:</td>
		<td><input class="form-fill" type="tel" pattern="^(9\W*8\W*(?:\d\W*){8})$" required name="number"  value="<?php echo isset($_POST['number']) ? $_POST['number'] : '' ?>"></td>
		</tr>
	
	<tr>
       		<td>Packages:</td>
		<td><select class="form-fill" name="package" >
       	         <font size=50px>
		<?php
		$result1=mysqli_query($con,"select * from package");
		 if(mysqli_num_rows($result1)>0)
   		{
		   while($row1=mysqli_fetch_array($result1))
		    {
		?>
			<option value="<?php echo $row1['id'];?>"><?php echo $row1['packageName']?></option>
		 <?php
   		     
		    }
		}
		?>
       	       

       	        <!-- <a href="home.php?page=ourpackages" class="button" target="_blank">View Packages</a></td>
 -->	</tr>
 <tr>
 	 </select>
       <td>Packages type:</td>
		<td><select class="form-fill" name="p_type" ><font size=50px>
       	         	<option value="price_economic">Economic</option>
       	         	<option value="price_deluxe">Deluxe</option>
       	     </select>
       	     </tr>
	<tr>
     		<!-- <td>Hotel:</td>
		<td><select class="form-fill" name="hotel">
		<?php
		$result1=mysqli_query($con,"select * from hotel");
		 if(mysqli_num_rows($result1)>0)
   		{
		   while($row1=mysqli_fetch_array($result1))
		    {
		?>
			<option value="<?php echo $row1['name'];?>"><?php echo $row1['name']?></option>
		<?php
   		     
		    }
		}
		?>
       	       </select>
       	    </font>
       	        <a href="home.php?page=hotel" class="button" target="_blank">View Hotels</a></td>
	</tr>
	<tr>   -->
    		<td>Reporting date:</td>
		<td><input class="form-fill" type="date" name="date" min="<?php echo date('Y-m-d',strtotime(date('Y-m-d').'+7 days')); ?>" value="<?php echo isset($_POST['in']) ? $_POST['in'] : '' ?>"></td>
	</tr>
	<tr>
    		                   </table></td>
	</tr>
	</table>
    </div>
    <div class="form-container">
    Payment:

    
	

    <br>
    </div>

     <div class="form-container">
    <input type="checkbox" name="check"><a href="destination/terms.html" target="_blank">I agree the terms and conditions</a>
     <br>
    <center>
	<input type="submit" class="button" name="submit" value="Order Ticket"></center>
	    	
    
    	</div>
 </div>
</center>
 </div>


