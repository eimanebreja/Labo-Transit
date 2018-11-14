<?php
include('../dbcon.php'); 
	if (isset($_POST['addemploy'])){
	$firstname=$_POST['fname'];
	$lastname=$_POST['lname'];
	$gender=$_POST['gender'];
	$address=$_POST['address'];
	$mnumber=$_POST['mnumber'];
	$employid=$_POST['employid'];
	$error_user=mysql_query("select * from tbl_user where user_number='$employid'")or die(mysql_error());
	$count=mysql_num_rows($error_user);
	
	
	 if ($count  != 1){
	mysql_query("insert into tbl_user (user_fname, user_lname, user_gender, user_address, user_mnumber, user_number, user_image, user_status) 
	values('$firstname', '$lastname', '$gender', '$address', '$mnumber','$employid','photos/user.png', 'Non-Active')")or die(mysql_error());
	echo "<script>alert('You successfully register a new employee!')</script>";				
	echo "<script>window.open('index.php#1','_self')</script>";
	}else{ ?>
	   <script type="text/javascript">
                        alert('Employee Already Exist');
           </script>
	<?php
	} }
	?>