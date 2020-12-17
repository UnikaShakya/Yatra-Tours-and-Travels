<?php 
include_once("../configuration/configuration.php");
include_once("../connection/connection.php");
if(isset($_POST['submit'])){
	$package=$_POST['package'];
	$ptype=$_POST['p_type'];
	$fname=$_POST['firstname'];
	$lname=$_POST['lastname'];
	$phone=$_POST['number'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$date=$_POST['date'];
	$sql="select * from package where `id`='$package'";
	$result=mysqli_query($con, $sql);
	while ($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) {
	$packageName= $row['packageName'];
	if($ptype == 'price_economic'){
		$price = $row['price_economic'];
	}
	else{
		$price = $row['price_deluxe'];
	}
}

$sql="INSERT INTO `customer` (`id`, `firstname`, `lastname`, `email`, `address`, `phone`, `package`, `r_date`, `p_type`) VALUES (NULL, '$fname', '$lname', '$email', '$address', '$phone', '$packageName', '$date', '$ptype')";
mysqli_query($con, $sql);
$psc = 0.05*$price;
$txAmt = 0.13*$price;
$tAmt = $price+$psc+$txAmt;
}
?>

<link rel="stylesheet" href="../css/w3.css">
<div class="qfact">
    <table cellspacing="0" width=25% class="w3-table-all" style='overflow: auto;'>
          <tr class="w3-grey w3-hover-red">
		     <th colspan=2>Payment Details</th>
		  </tr>
		  <tr>
            <td><u>First Name:<u></td>
            <td style="text-align:justify"> <?php echo $fname;?></td>
          </tr>
          <tr>
            <td>Last Name:</td>
            <td style="text-align:justify"> <?php echo $lname;?></td>
          </tr>
	  <tr>
            <td>Email:</td>
            <td style="text-align:justify"> <?php echo $email;?></td>
          </tr>
          <tr>
            <td>Package Name:</td>
            <td style="text-align:justify"> <?php echo $packageName;?></td>
          </tr>
          <tr>
            <td>Package Type:</td>
            <td style="text-align:justify"><?php echo $ptype; ?></td>
          </tr>
          <tr>
            <td>Package Price:</td>
            <td style="text-align:justify"><?php echo $price; ?></td>
          </tr>
          <tr>
            <td>Package Service Charge:</td>
            <td style="text-align:justify"><?php echo $psc; ?></td>
          </tr>
          <tr>
            <td>Tax Amount:</td>
            <td style="text-align:justify"><?php echo $txAmt; ?></td>
          </tr>
          <tr>
            <td>Total Amount:</td>
            <td style="text-align:justify"><?php echo $tAmt; ?></td>
          </tr>
        </table><br></div>
<form action="https://uat.esewa.com.np/epay/main" method="POST"> 

	<input value="<?php echo intval($tAmt); ?>" name="tAmt" type="hidden">
	    <input value="<?php echo intval($price); ?>" name="amt" type="hidden">
	    <input value="<?php echo intval($txAmt); ?>" name="txAmt" type="hidden">
	    <input value="<?php echo intval($psc); ?>" name="psc" type="hidden">
	    <input value="0" name="pdc" type="hidden">
	    <input value="test_merchant" name="scd" type="hidden">
	    <input value="ee2c3ca1-696b-4cc5-a6be-2c40d929d453" name="pid" type="hidden">
	    <input value="http://merchant.com.np/page/esewa_payment_success?q=su" type="hidden" name="su">
	    <input value="http://merchant.com.np/page/esewa_payment_failed?q=fu" type="hidden" name="fu">
	    <input type="submit" class="button" name="submit" value="Confirm"></center>
	</form>