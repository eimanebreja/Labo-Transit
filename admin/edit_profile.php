<?php
 include "../dbcon.php";
	if (isset($_POST['editprof'])){
	
	$admin_id=$_POST['id'];
	$full_name=$_POST['fname'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$position=$_POST['position'];

	mysql_query("update tbl_admin set admin_name='$full_name', admin_position='$position', admin_username = '$username', admin_password = '$password' where admin_id='$admin_id'")or die(mysql_error()); ?>
	
	
	
	
<?php
	echo "<script>alert('Your information is successfully updated!')</script>";				
	echo "<script>window.open('index.php?id=1','_self')</script>";
	}
	?>