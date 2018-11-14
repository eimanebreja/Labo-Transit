<div id="edit<?php echo $id; ?>" class="modal modal-fixed-footer">
    <div class="modal-content">
        <h4 style="text-align:center">Edit Profile Information</h4>
        <div class="row">
            <form class="col s12" method="post" action="">
                
                      <div class="input-field col s12 m6 l6">
                      <input placeholder="Enter the firstname..." id="employid" name="id" type="hidden" value="<?php echo $user_row['user_id']; ?>" class="validate">
                          <input placeholder="Enter the firstname..." id="first_name" name="fname" type="text" value="<?php echo $user_row['user_fname']; ?>" class="validate">
                           <label for="first_name">First Name</label>
                       </div>
                       <div class="input-field col s12 m6 l6">
                            <input placeholder="Enter the lastname..." value="<?php echo $user_row['user_lname']; ?>" id="last_name" name="lname" type="text" class="validate">
                            <label for="last_name">Last Name</label>
                       </div> 
                        <div class="input-field col s12 m6 l6">
                             <select name="gender">
                                <option  disabled selected><?php echo $user_row['user_gender']; ?></option>
                                <option>Male</option>
                                <option>Female</option>
                              </select>
                          <label>Gender</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                          <input id="address" type="text" value="<?php echo $user_row['user_address']; ?>" name="address" class="validate">
                          <label for="address">Address</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                          <input id="mnumber" value="<?php echo $user_row['user_mnumber']; ?>" type="text" name="mnumber" class="validate">
                          <label for="mnumber">Phone Number</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                          <input id="employeeid" type="text" disabled value="<?php echo $user_row['user_number']; ?>" name="employid" class="validate">
                          <label for="employeeid">Employee ID</label>
                        </div>
                  
                  <div class="modal-footer">
                  <button name="editemploy" type="submit" class="btn btn-success"><i class="glyphicon glyphicon-save"></i>&nbsp;Save</button></div>
             </form>
         </div>
    </div>
</div>

<?php
	if (isset($_POST['editemploy'])){
	
	$user_id=$_POST['id'];
	$firstname=$_POST['fname'];
	$lastname=$_POST['lname'];
	$gender=$_POST['gender'];
	$address=$_POST['address'];
	$mnumber=$_POST['mnumber'];
	$employid=$_POST['employid'];
	mysql_query("update tbl_user set  user_fname='$firstname', user_lname='$lastname',user_gender = '$gender', user_address = '$address', user_mnumber = '$mnumber', user_number = '$employid' where user_id='$user_id'")or die(mysql_error()); ?>
	
	
	
	
<?php
	echo "<script>alert('Employee information is successfully updated!')</script>";				
	echo "<script>window.open('profile.php?id=1','_self')</script>";
	}
	?>