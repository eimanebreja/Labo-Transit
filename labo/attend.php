<?php
include('db.php'); 
						if(isset($_POST['timein']))
						{

						$emp_idd=$_POST['employ_id'];

						$emp_id = mysqli_real_escape_string($con,$emp_idd);
						date_default_timezone_set('Asia/Manila');
						$month = date("F");
						$day = date("d");
						$year = date("Y");
						$time = date("H:i");
						$week = date("l");

						$query=mysqli_query($con,"select * from tbl_user where user_number='$emp_id'")or die(mysqli_error($con));
						$row=mysqli_fetch_array($query);
						$id=$row['user_id'];
						$counter=mysqli_num_rows($query);
						 $_SESSION['emp_id']=$row['user_id'];
			
					
						if ($counter == 0) 
						{	
						echo "<script type='text/javascript'>alert('Unregistered Employee!');
						document.location='attendance.php'</script>";
						}
							
						elseif ($counter > 0  )
						{
						mysqli_query($con,"INSERT INTO tb_attendance (user_id, attend_month, attend_day, attend_year, attend_timein, attend_week ) VALUES('$id','$month','$day','$year','$time', '$week')")or die(mysqli_error($con));     
						echo "<script>alert('Successful!')</script>";	
						echo "<script type='text/javascript'>document.location='attendance.php'</script>";
						}else{ ?>
						<script type="text/javascript">
							alert('Employee Already in Attendance list');
						</script>
						<?php
						} }
						?>
<?php
include('db.php'); 
						if(isset($_POST['timeout']))
						{

						$emp_idd=$_POST['employ_id'];

						$emp_id = mysqli_real_escape_string($con,$emp_idd);
						date_default_timezone_set('Asia/Manila');
                        $date = date("M d, Y");
                        $time = date("H:i");
						$day = date("d");
						$query=mysqli_query($con,"select * from tbl_user where user_number='$emp_id'")or die(mysqli_error($con));
						$row=mysqli_fetch_array($query);
						$id=$row['user_id'];
						$counter=mysqli_num_rows($query);
						 $_SESSION['emp_id']=$row['user_id'];
			
					
						if ($counter == 0) 
						{	
						echo "<script type='text/javascript'>alert('Unregistered Employee!');
						document.location='attendance.php'</script>";
						}
							
						elseif ($counter > 0  )
						{

									
						mysqli_query($con,"UPDATE tb_attendance set attend_timeout='$time' WHERE user_id='$id' AND attend_day='$day' ")or die(mysqli_error($con));     
						echo "<script>alert('Successful!')</script>";	
						echo "<script type='text/javascript'>document.location='attendance.php'</script>";
						}else{ ?>
						<script type="text/javascript">
							alert('Employee Already in Attendance list');
						</script>
						<?php
						} }
						?>