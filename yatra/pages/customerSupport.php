<script>
  function validate(x)
  {
	//alert("hello");
       //var x=document.getElementById("aa").value;
    var patt=/[^a-z ]/i;
    var y=patt.test(x);
    if(y==true)
	{
	   //alert("wrong format");
	}
   }
</script>


<?php include_once('connection/connection.php') ?>
<section id="main-content">
<div class="section2">
<div class="table">
	<div class="pageleft">
		<h2 class="heading">Contact Us</h2>
		<hr color="white"></hr>
		<p>	Address:   <?php echo $row['address'];?><br>
			Email:     <?php echo $row['email'];?><br>
			Mobile No: <?php echo $row['contact'];?><br></p>

		<br> <br>
		<h2 class="heading">Join with Us</h2>
		<hr color="white"></hr>
		&nbsp<a target='_blank' href='<?php echo $row['fb'];?>'><i class='fab fa-facebook fa-4x'></i></a>
		&nbsp&nbsp&nbsp&nbsp<a target='_blank' href='<?php echo $row['gmap'];?>'><i class='fab fa-google-plus-g fa-4x' style='color:red'></i></a>
		&nbsp&nbsp&nbsp&nbsp<a target='_blank' href='<?php echo $row['twit'];?>'><i class='fab fa-twitter fa-4x' aria-hidden='true' style='color:blue'></i></a>
		&nbsp&nbsp&nbsp&nbsp<a target='_blank' href='<?php echo $row['insta'];?>'><i class='fab fa-instagram fa-4x' aria-hidden='true' style='color:darkred'></i></a>
		&nbsp&nbsp&nbsp&nbsp<a target='_blank' href='<?php echo $row['youtube'];?>'><i class='fab fa-youtube-square fa-4x' aria-hidden='true' style='color:darkred'></i></a>
		&nbsp&nbsp&nbsp&nbsp<a target='_blank' href='https://www.linkedin.com'><i class='fab fa-linkedin fa-4x' aria-hidden='true'></i></a>
	</div> 
	<div class="pageleft">
		<h2 class="heading">&nbsp&nbspFeedback</h2>
		<hr color="white"></hr>
		<?php 
		if(isset($_POST['submit']))
		{
        	  $name=$_POST['name'];
		  $email=$_POST['email'];
		  $message=$_POST['message'];
		  echo "<script>validate('".$name."');</script>";
		  if($name==null || $email==null || $message==null)
		  {
		    echo("*Please compulsarily fill all the fields.");
		   }
		  else
		  {
		  if (filter_var($email, FILTER_VALIDATE_EMAIL)) 
  	          {
			$sql= "insert into feedback(name,email,message) values('$name','$email','$message')";
			mysqli_query($con,$sql);
  		  	echo("*Thank you for your feedback.");
		  }
		  else
		  {
		  	echo("*Please enter a valid email address.");
		  }
		  }
		}
		?>
		<form  class="form" method="POST" action="" >
				<input type="text" id="aa" class="input" name="name" placeholder="Name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : '' ?>"><br>
				<input type="text" class="input" name="email" placeholder="Email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>"><br>
				<textarea class="message" name="message" placeholder="Message"><?php echo isset($_POST['message']) ? $_POST['message'] : '' ?></textarea><br>
				<center><input type="submit" name='submit' class="button" value="Submit"></center><br>	
		</form>
	</div>
</div>
</div>
</section>