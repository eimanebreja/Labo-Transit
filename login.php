<?php
session_start();

?>
<?php
include('dbcon.php');
								if (isset($_POST['submit'])){
								
								$username = $_POST['username'];
								$password = $_POST['password'];
								$query = "SELECT * FROM tbl_admin WHERE admin_username='$username' AND admin_password='$password'";
								$result = mysql_query($query)or die(mysql_error());
								$num_row = mysql_num_rows($result);
									$row=mysql_fetch_array($result);
									if( $num_row > 0 ) {
										header('location:admin/index.php');
								      $_SESSION['id']=$row['admin_id'];
									}
									else{  echo "<script type='text/javascript'>alert('Invalid Username or Password!');
									document.location='index.php'</script>"; ?>
									<br/>
								
								<?php
								}} 
									
									
									?>
									