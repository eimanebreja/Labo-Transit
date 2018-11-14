<?php
     $full_name = $username = $password  = "";
     $full_nameErr = $usernameErr = $passwordErr  = "";
 

include('dbcon.php'); 
	if (isset($_POST['register'])){

        if (empty ($_POST["fname"])) {
            $full_nameErr = "Required!";
        } else {
            $full_name = $_POST["fname"];
        }

        if (empty ($_POST["username"])) {
            $userErr = "Required!";
        } else {
            $username = $_POST["username"];
        }

        if (empty ($_POST["password"])) {
            $password = "Required!";
        } else {
            $password = $_POST["password"];
        }

	$full_name=$_POST['fname'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$error_user=mysql_query("select * from tbl_admin where admin_name='$full_name'")or die(mysql_error());
	$count=mysql_num_rows($error_user);
	
	
	 if ($count  != 1){
	mysql_query("insert into tbl_admin (admin_name, admin_username, admin_password, role) 
	values('$fullname', '$username', '$password', 'Guess')")or die(mysql_error());
	echo "<script>alert('You successfully register as a Guess user!')</script>";				
	echo "<script>window.open('index.php','_self')</script>";
	}else{ ?>
	   <script type="text/javascript">
                        alert('GUess Already Exist');
           </script>
	<?php
	} }
	?>