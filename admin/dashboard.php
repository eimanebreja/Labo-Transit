<?php include('session.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>LABO</title>
  <link rel="icon" type="image/png" href="assets/images/icon.png">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css" rel="stylesheet" />
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" rel="stylesheet"
    media="screen,projection" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css" rel="stylesheet" />

  <style>
    @import url('https://fonts.googleapis.com/css?family=Bree+Serif|Righteous');
     @import url('https://fonts.googleapis.com/css?family=Rajdhani|Teko');

body {
  font-family: 'Teko', sans-serif;
font-family: 'Rajdhani', sans-serif;
}

      h1 {
    font-size: 1.90rem;
    font-weight: bold;
} 
h2 {
    font-size: 1.25rem;
  
}
.banner {
 
 background-color: #fff3e0;
   background-repeat:no-repeat;
       background-position:center center;
       -webkit-background-size: cover;
       -o-background-size: cover;
       background-size: cover;
       -moz-background-size: cover;
       padding:70px 0 20px 0;
       text-align:center;
      
       color:black;
    
}

.tabs {
  text-align: center;
}
.tabs .tab a{
color:orange;
}
.tabs .tab a:focus, .tabs .tab a:focus.active {
background-color: #fff3e0;
outline: none;
}
.tabs .tab a:hover,tabs .tab a:active,.tabs .tab a.active {
background-color:transparent;
color:orange;
}
.tabs .tab.disabled a,.tabs .tab.disabled a:hover {
color:rgba(102,147,153,0.7);
}
.tabs .indicator {
background-color:#F27620;
}

.attendance-list-body {
    margin-top: 30px;
}

table.highlight tbody tr:hover {
    background-color: orange !important;
}

.employee-list-body {
    margin-top: 30px;
}
.input-field input:focus + label {
   color: orange !important;
 }
 
 .row .input-field input:focus {
   border-bottom: 1px solid orange !important;
   box-shadow: 0 1px 0 0 orange !important
 }
 .file-field .btn {
   background-color: orange;
 

 }
 .modal.modal-fixed-footer .modal-footer {
  
    position: absolute;
    bottom: 0;
    padding-right: 60px;
}
.modal.modal-fixed-footer.modal-delete {
  padding-top:60px;
    padding: 0;
    height: 25%;
}

a.delete i {
  color:red;
  font-size:25px;
}
a.edit i {
  color:sky;
  
}
 form .container {
   padding-top: 40px;
 }

 .report-body {
   margin-top: 30px;
   background-color: #eee;
   padding:20px;
 }
 

 .blockquote-box{border-left:5px solid #E6E6E6;margin-bottom:25px;padding-left:20px;background-color:#eee}
.blockquote-box .square{width:100px;min-height:50px;margin-left:22px;text-align:center!important;background-color:#E6E6E6;padding:20px 0}
.blockquote-box.blockquote-primary{border-color:#357EBD}
.blockquote-box.blockquote-primary .square{background-color:#428BCA;color:#FFF}
.blockquote-box.blockquote-success{border-color:#4CAE4C}
.blockquote-box.blockquote-success .square{background-color:#5CB85C;color:#FFF}
.blockquote-box.blockquote-info{border-color:#46B8DA}
.blockquote-box.blockquote-info .square{background-color:#5BC0DE;color:#FFF}
.blockquote-box.blockquote-warning{border-color:#EEA236}
.blockquote-box.blockquote-warning .square{background-color:#F0AD4E;color:#FFF}
.blockquote-box.blockquote-danger{border-color:orange}
.blockquote-box.blockquote-danger .square{background-color:#D9534F;color:#FFF}


  
 

.search-report {
  padding-top: 30px;

}

.input-field .prefix.active {
  color: orange;
}

.input-group{
  display:table;
  width:100%;
}
.input-group .input-field,
.input-group .input-group-addon{
  display:table-cell;
}
nav {
  background: orange;
  padding-right:20px;
  padding-left:20px;
  position: fixed;
  z-index: 1;
}

.brand-logo {
  font-family: 'Bree Serif', serif;
font-family: 'Righteous', cursive;
}
.dropdown-content li>a, .dropdown-content li>span {
    font-size: 16px;
    color: orange;
    display: block;
    line-height: 22px;
    padding: 14px 16px;
}

.dropdown-content li>a:hover, .dropdown-content li>span {
    font-size: 16px;
    color: orange;
    background-color: #fff3e0;
    display: block;
    line-height: 22px;
    padding: 14px 16px;
}
@media only screen and (max-width: 600px) {
    nav .brand-logo {
    position: absolute;
    color: #fff;
    display: inline-block;
    font-size: 1.2rem;
    padding: 0;
}
}

.btn {
  z-index: 0 !important;
}

.select {
    position: relative;
    display: block;
    margin: 0 auto;
    width: 100%;
    max-width: 600px;
    color: #0ea0b7;
    vertical-align: middle;
    text-align: left;
    -webkit-user-select: none;
       -moz-user-select: none;
        -ms-user-select: none;
            user-select: none;
    -webkit-touch-callout: none;
    border: 1px solid #0ea0b7;
    border-radius: 0px;
    transition: 0.5s;
  }
  

  .select .placeholder {
    position: relative;
    display: block;
    background-color: white;
    z-index: 1;
    padding: 1em;
    border-radius: 2px;
    cursor: pointer;
    border-radius: 10px;
    transition: 0.5s;
  }
  .select .placeholder:after {
    position: absolute;
    right: 1em;
    top: 50%;
    -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
    font-family: 'FontAwesome';
    content: '\f078';
    z-index: 10;
    transition: 0.5s;
  }
  .select.is-open .placeholder:after {
    content: '\f077';
    transition: 0.5s;
  }
  .select.is-open ul {
    display: block;
    transition: 0.5s;
  }
  .select.select--white .placeholder {
    background: #fff;
    color: #999;
    transition: 0.5s;
  }
  .select.select--white .placeholder:hover {
    background: #fafafa;
    transition: 0.5s;
  }
  .select ul {
    display: none;
    position: absolute;
    overflow: hidden;
    overflow-y: auto;
    width: 100%;
    background: #fff;
    border-radius: 2px;
    top: 100%;
    left: 0;
    list-style: none;
    margin: 5px 0 0 0;
    padding: 0;
    z-index: 100;
    max-height: 240px;
    border: 1px solid #0ea0b7;
    border-radius: 0px;
    transition: 0.5s;
  }
  .select ul li {
    display: block;
    text-align: left;
    padding: 0.8em 1em 0.8em 1em;
    color: #999;
    cursor: pointer;
    transition: 0.5s;
  }
  .select ul li:hover {
    background: #0ea0b7;
    color: #fff;
    transition: 0.5s;
  }

 @media print {
    
    .banner {
      display: none !important;
    }
    .tabs {
      display: none !important;
    }
    .reports-btn {
      display: none !important;
    }
    .attendance-list-body h4{
      text-align:center;
    }
    .sort-button {
      display: none !important;
    }
    .report-body p {
      line-height : 1.5;
    }
    .search-report {
      display: none !important;
  
  }
  nav {
      display: none !important;
  
  }
  .header-report h5 {
    font-weight: bold;
  
  }
  .blockquote-box h6 {
    font-size: 25px;
  }
  
  img {
    display: none !important;
  }
  .delete {
    display: none !important;
  }
  
    .blockquote-box{border-left:0px solid #E6E6E6;margin-bottom:25px;padding-left:20px;background-color:#eee}
   
  .header-report {
    text-align:center;
    font-weight: bold;
    font-family: tahoma;
  }
  .report-body {
     margin-top: 0px;
     background-color: #eee;
     padding:0px;
   }
  }
      </style>
</head>

<body>
<?php include('../dbcon.php'); ?>
<?php ob_start(); ?>
<?php
$user_query  = mysql_query("select * from tbl_admin where admin_id = '$session_id'")or die(mysql_error());
$admin_row =mysql_fetch_array($user_query);
$admin_name  = $admin_row['admin_name'];
$admin_role  = $admin_row['role'];

?> 

<ul id="dropdown1" class="dropdown-content">
  <li><a class="modal-trigger" href="#modal2">Profile</a></li>
  <li class="divider"></li>
  <li><a class="modal-trigger" href="logout.php">Logout</a></li>
</ul>
<ul id="dropdown2" class="dropdown-content">
  <li><a class="modal-trigger" href="#modal2">My Profile</a></li>
  <li class="divider"></li>
  <li><a href="logout.php">Logout</a></li>
</ul>
<nav>
    
      <div class="nav-wrapper">
      <a href="dashboard.php" class="brand-logo">LABO-IOS-TRANSIT</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
        <li><a class="dropdown-trigger" href="#!" data-target="dropdown2">@<?php echo $admin_row['admin_username']; ?><i class="material-icons right">arrow_drop_down</i></a></li>

        </ul>
      </div>
    
  </nav>


<!---

  <nav>
    <div class="nav-wrapper">
    <a href="dashboard.php" class="brand-logo center">LABO-IOS-TRANSIT</a>
    </div>
  </nav> -->

  <div id="modal2" class="modal modal-fixed-footer">
    <div class="modal-content">
        <h4 style="text-align:center">Edit Information</h4>
        <div class="row">
        <form class="col s12" method="post" action="edit_profile.php">
                 <div class="container">
                      <div class="input-field col s12 m6 l6">
                      <input placeholder="Enter the firstname..." id="employid" name="id" type="hidden" value="<?php echo $admin_row['admin_id']; ?>" class="validate">
                          <input placeholder="Enter the firstname..." id="first_name" name="fname" type="text" value="<?php echo $admin_row['admin_name']; ?>" class="validate">
                           <label for="first_name">Full Name</label>
                       </div>
                       <div class="input-field col s12 m6 l6">
                            <input placeholder="Enter the lastname..." value="<?php echo $admin_row['admin_position']; ?>" id="last_name" name="position" type="text" class="validate">
                            <label for="last_name">Position</label>
                       </div> 
                        <div class="input-field col s12 m6 l6">
                          <input id="address" type="text" value="<?php echo $admin_row['admin_username']; ?>" name="username" class="validate">
                          <label for="address">Username</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                          <input id="mnumber" value="<?php echo $admin_row['admin_password']; ?>" type="password" name="password" class="validate">
                          <label for="mnumber">Password</label>
                        </div>         
                  </div>
                  <div class="modal-footer">
                  <button name="editprof" type="submit" class="btn btn-success"><i class="glyphicon glyphicon-save"></i>&nbsp;Save</button></div>
             </form>
         </div>
    </div>
</div>
        
          <div class="banner">
              <h1>  <?php if ($admin_role == 'Guess'){
                ?>  Hello <?php } ?><?php echo $admin_row['admin_name']; ?></h1>
              <h2><?php echo $admin_row['admin_position']; ?></h2>
          </div>


        <div class="container">
            <div class="row">
                 <div class="col s12">
                 <?php if ($admin_role == 'Admin'){
					          ?> 
                    <ul class="tabs">
                    
                        <li class="tab col s3 m3 l3"><a href="#test1">Employee List</a></li>
                   
                        <li class="tab col s3 m3 l3"><a class="active" href="#test2">Attendance List</a></li>
                        <li class="tab col s3 m3 l3"><a  href="#test3">Employee Daily Report</a></li>
                      
                        <li class="tab col s3 m3 l3"><a  href="#test4">Our Guest</a></li>
                     
                    </ul>
                    <?php } ?>
                    <?php if ($admin_role == 'Guess'){
					          ?> 
                  <ul class="tabs">
                     
                     
                   
                        <li class="tab col s6 m6 l6"><a class="active" href="#test2">Attendance List</a></li>
                        <li class="tab col s6 m6 l6"><a  href="#test3">Employee Daily Report</a></li>
                      
                   
                    </ul>
                    <?php } ?>
                  </div>
                   <?php if ($admin_role == 'Admin'){
					          ?>  
                  <div id="test1" class="col s12">
                       <div class="employee-list-body">
                            <h4> List of Employee</h4>
                           <div style="float:right; padding-bottom:20px">
<!-- Modal Structure -->
                              <div id="modal1" class="modal modal-fixed-footer">
                                  <div class="modal-content">
                                      <h4 style="text-align:center">Add Employee</h4>
                                      <div class="row">
                                          <form class="col s12" method="post" action="add.php">
                                              <div class="container">
                                                    <div class="input-field col s12 m6 l6">
                                                        <input placeholder="Enter the firstname..." id="first_name" name="fname" type="text" class="validate">
                                                        <label for="first_name">First Name</label>
                                                    </div>
                                                    <div class="input-field col s12 m6 l6">
                                                          <input placeholder="Enter the lastname..." id="last_name" name="lname" type="text" class="validate">
                                                          <label for="last_name">Last Name</label>
                                                    </div> 
                                                      <div class="input-field col s12 m6 l6">
                                                          <select name="gender">
                                                              <option value="" disabled selected>Choose your Gender</option>
                                                              <option>Male</option>
                                                              <option>Female</option>
                                                            </select>
                                                        <label>Gender</label>
                                                      </div>
                                                      <div class="input-field col s12 m6 l6">
                                                        <input id="address" type="text" name="address" class="validate">
                                                        <label for="address">Address</label>
                                                      </div>
                                                      <div class="input-field col s12 m6 l6">
                                                        <input id="mnumber" type="text" name="mnumber" class="validate">
                                                        <label for="mnumber">Phone Number</label>
                                                      </div>
                                                      <div class="input-field col s12 m6 l6">
                                                        <input id="employeeid" type="text" name="employid" class="validate">
                                                        <label for="employeeid">Employee ID</label>
                                                      </div>
                                                </div>
                                                <div class="modal-footer">
                                                <button name="addemploy" type="submit" class="btn btn-success"><i class="glyphicon glyphicon-save"></i>&nbsp;Save</button></div>
                                          </form>
                                      </div>
                                  </div>
                              </div>
                                  <?php if ($admin_role == 'Admin'){
			                          		?>  
                                  <a class="btn orange waves-effect waves-light modal-trigger" href="#modal1" > ADD </a>
                                  <?php } ?>
                             </div>
    
<table class="responsive-table">
        <thead>
          <tr>
             <th>No.</th>
            <th>Employee ID</th>
              <th>Name</th>
              <th>Gender</th>
              <th>Mobile Number</th>
              <th>Address</th>
              <?php if ($admin_role == 'Admin'){
					?>  
              <th>Action</th>
              <?php } ?>
           
          </tr>
        </thead>

        <tbody>
        <?php $user_query=mysql_query("select * from tbl_user")or die(mysql_error());
											  $i=1;
											while($user_row=@mysql_fetch_array($user_query)){
											$id=$user_row['user_id'];  ?>
								
									 <tr class="del<?php echo $id ?>">
									 <td width="10"><?php echo "$i."; ?>	</td>
									 <td width="60"> <?php echo $user_row['user_number']; ?></td>  
                 <td width="200"><?php echo $user_row['user_fname']; ?> &nbsp;<?php echo $user_row['user_lname']; ?> 
									<td width="5"><?php echo $user_row['user_gender']; ?></td> 
									<td width="5"><?php echo $user_row['user_mnumber']; ?></td>
									
									<td width="200"><?php echo $user_row['user_address']; ?></td>
                  <?php if ($admin_role == 'Admin'){
					?>  
                  <td width="120">
                  <a rel="tooltip"  title="Delete" class="modal-trigger delete" id="<?php echo $id; ?>" href="#delete_user<?php echo $id; ?>"> <i class="fa fa-trash-o fa-2x"  aria-hidden="true"></i> </a> &nbsp;&nbsp;
                  <?php include('modal-delete-user.php'); ?>
										<a rel="tooltip"  title="Edit" class="modal-trigger edit" id="e<?php echo $id; ?>" href="#edit<?php echo $id; ?>" data-toggle="modal" class="btn btn-success"><i class="fa fa-pencil fa-2x" aria-hidden="true"></i></a>
                                <?php include('modal-edit-user.php'); ?>
									</td>
									<?php include('toolttip_edit_delete.php'); ?>   
                  <?php } ?>          
                                    </tr>
									<?php $i++;} ?>
        </tbody>
      </table>
      
                </div>
    </div>
                  <?php } ?>

    <div id="test2" class="col s12">
        <div class="attendance-list-body">
          <div class="row">
        <div class="col s12 m6 l6 wow slideInRight">
          <div class="select">
              <span class="placeholder">オプションを選択</span>
              <ul id="style-9">
                  <li data-value="es">Option1</li>
                  <li data-value="en">Option2</li>
                  <li data-value="fr">Option3</li>
                  <li data-value="de">Option4</li>
              </ul>
              <input type="hidden" name="changeme"/>
          </div>
        </div>
                  </div>
    <h4> Attendance List</h4>
    <?php if ($admin_role == 'Admin'){
					?>  
    <div class="row right reports-btn">
    <a class="btn  blue-grey darken-1 waves-effect waves-light modal-trigger"  href="javascript:window.print()">Print Report </a> 
    </div>
    <?php }?>
<table class="responsive-table highlight striped">
        <thead>
          <tr>
             <th>No.</th>
            <th>Employee ID</th>
              <th>Name</th>
              <th>Date</th>
              <th>Time</th>
              <th>Content</th>
              <?php if ($admin_role == 'Admin'){
					?>   
              <th class="delete">Action</th>
              <?php } ?>
           
          </tr>
        </thead>

        <tbody>
        <?php $attend_query=mysql_query("select * from tb_attendance LEFT JOIN tbl_user on tbl_user.user_id = tb_attendance.user_id ORDER BY attend_id DESC")or die(mysql_error());
											  $i=1;
											while($attend_row=@mysql_fetch_array($attend_query)){
											$id=$attend_row['attend_id'];  ?>
								
									 <tr class="del<?php echo $id ?>">
									 <td width="10"><?php echo "$i."; ?>	</td>
									 <td width="55"> <?php echo $attend_row['user_number']; ?></td>  
                      <td width="200"><?php echo $attend_row['user_fname']; ?> &nbsp;<?php echo $attend_row['user_lname']; ?> 
									<td width="90"><?php echo $attend_row['attend_date']; ?></td> 
									<td width="5"><?php echo $attend_row['attend_time']; ?></td>
									
									<td width="55"><?php echo $attend_row['attend_description']; ?></td>
                  <?php if ($admin_role == 'Admin'){
					?>  
                  <td width="60" class="delete">
                  <a rel="tooltip"  title="Delete" class="modal-trigger delete" id="<?php echo $id; ?>" href="#delete_attendance<?php echo $id; ?>"> <i class="fa fa-trash-o fa-2x"  aria-hidden="true"></i> </a> &nbsp;&nbsp;
                  <?php include('modal-delete-attendance.php'); ?>
                                  
                  <?php } ?>
								
                                    </tr>
									<?php $i++;} ?>
        </tbody>
      </table>
                                            </div>
    </div>
    
    <div id="test3" class="col s12">        
          <div class="container search-report">
              <div class="row">
                   <div class="col s12 m12 l12 right">
                       <div class="container">
                          <?php if ($admin_role == 'Admin'){
                          ?>  
                        <div class="input-group">
                            <div class="input-field">
                                <i class="material-icons prefix">search</i>
                                <input type="text" name="search_text" id="search_text"  class="autocomplete">
                                <label for="autocomplete-input">Search anything here..</label>
                            </div>
                              <a class="btn  blue-grey darken-1 waves-effect waves-light modal-trigger"  href="javascript:window.print()">Print Report </a> 
                          </div>
                         <?php } ?>
                         </div>
                      </div>
               </div>
           </div>
           <div class="header-report">
                <h5>Daily Report</h5>
          </div>
          <div id="result"></div>           
      </div>  

      <?php if ($admin_role == 'Admin'){
					?>  
      <div id="test4" class="col s12">
            <div class="container">
            <table class="responsive-table">
        <thead>
          <tr>
             <th>No.</th>
              <th>Name</th>
              <th>Role</th>
             
              <th>Role</th>
             
           
          </tr>
        </thead>

        <tbody>
        <?php $admin_query=mysql_query("select * from tbl_admin")or die(mysql_error());
											  $i=1;
											while($admin_row=@mysql_fetch_array($admin_query)){
                      $id=$admin_row['admin_id']; 
                      $admin_rolee  = $admin_row['role']; ?>
									 <tr class="del<?php echo $id ?>">
									 <td width="10"><?php echo "$i."; ?>	</td>
									 <td width="120"> <?php echo $admin_row['admin_name']; ?></td>  
									<td width="5"><?php echo $admin_row['role']; ?></td> 
								
                 
			
                  <td width="120">
                  <?php if ($admin_rolee == 'Admin'){
					          ?>  
                  <a   class="btn btn-small orange waves-effect waves-light modal-trigger" id="<?php echo $id; ?>" href="#remove_admin<?php echo $id; ?>">  <i class="fa fa-times" aria-hidden="true"></i> Admin </a> &nbsp;&nbsp;
                  <?php include('modal-remove-admin.php'); ?>

                  <?php } ?>
                  <?php if ($admin_rolee == 'Guess'){
					          ?>  
                 <a class="btn btn-small orange waves-effect waves-light modal-trigger" id="<?php echo $id; ?>" href="#add_admin<?php echo $id; ?>"> <i class="fa fa-check" aria-hidden="true"></i> Admin </a> &nbsp;&nbsp;
                 <?php include('modal-add-admin.php'); ?>
                  <?php } ?>
									</td>
							 
                       
                                    </tr>
									<?php $i++;} ?>
        </tbody>
      </table>
      
            </div>


      </div>

      <?php  } ?>
                   </div>
            </div>
        </div>
  

  
  <script src="assets/js/jquery-2.2.1.min.js"></script>
  <script src="assets/js/init.js"></script>
  <script src="assets/js/materialize.min.js"></script>
  <script src="assets/js/materialize.js"></script>
  <script>
        $(document).ready(function(){
    $('.tabs').tabs();
  });
  </script>
  <script>
       document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.modal').modal();
  });
      </script>

      <script>
           document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('select').formSelect();
  });
    </script>

    <script>
       $(document).ready(function() {
    $('input#input_text, textarea#textarea2').characterCounter();
  });

        
      </script>

      <script>
      $(".dropdown-trigger").dropdown();
      </script>

</body>

</html>