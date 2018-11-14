<div id="editpic<?php echo $id; ?>" class="modal modal-fixed-footer">
    <div class="modal-content">
        <h4 style="text-align:center">Edit Profile Information</h4>
        <div class="row">
      

 


	<form class="form-horizontal" method="post" enctype="multipart/form-data">	
					
					<div style="padding-top:50px;; padding-left:10%; padding-right: 10%">
					<div class="input-group">
					<input placeholder="Enter the firstname..." id="employid" name="id" type="hidden" value="<?php echo $user_row['user_id']; ?>" class="validate">

<div class="file-field input-field">
      <div class="btn">
        <span>Image</span>
        <input type="file" name="image" class="font">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>
		   </div>
		   </div>
		   
		   
	   
				
					   
				
						   <button name="edit_picture" type="submit" class="btn btn-success"><i class="glyphicon glyphicon-save"></i>&nbsp;Update</button>
				
			   </form>

         </div>
    </div>
</div>

<?php
	if (isset($_POST['edit_picture'])){
	
		$user_id=$_POST['id'];
		$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                                $image_name = addslashes($_FILES['image']['name']);
                                $image_size = getimagesize($_FILES['image']['tmp_name']);
                                move_uploaded_file($_FILES["image"]["tmp_name"], "upload/" . $_FILES["image"]["name"]);
                                $location = "upload/" . $_FILES["image"]["name"];
								
	mysql_query("update tbl_user set user_image='$location' where user_id='$user_id'")or die(mysql_error());

	?>

	<?php
	echo "<script>alert('Profile information is successfully updated!')</script>";				
	echo "<script>window.open('profile.php?id=1','_self')</script>";
	}
	?>
