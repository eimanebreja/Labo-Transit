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
        height: 330px;
        color:black;
     
}

.blockquote-box{border-left:5px solid #E6E6E6;margin-bottom:25px;padding-left:20px;padding-right:20px;background-color:#eee;padding-top:25px}
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

 .profile-body {
   padding-top: 30px;
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
}

.field-textarea {
    height: 100px; }

    textarea{
    box-sizing: border-box !important;
    -webkit-box-sizing: border-box !important;
    -moz-box-sizing: border-box !important;
    border:1px solid orange !important;
    padding: 7px !important;
    margin:0px !important;
    -webkit-transition: all 0.30s ease-in-out !important;
    -moz-transition: all 0.30s ease-in-out !important;
    -ms-transition: all 0.30s ease-in-out !important;
    -o-transition: all 0.30s ease-in-out !important;
    outline: none !important;  
}

    textarea:focus {
    -moz-box-shadow: 0 0 8px orange !important;
    -webkit-box-shadow: 0 0 8px  orange !important;
    box-shadow: 0 0 8px  orange !important;
    border: 1px solid  orange !important;
}

.btn {
    background-color: orange;
}
hr {
    display: block;
    height: 1px;
    border: 0;
    border-top: 2px solid orange;
    margin: 1em 0;
    padding: 0; }

.report-body {
  padding-top: 30px;
}

.user-profile {
padding-left: 20px;
}

.image-photo img {
  weight: 100%;
  border-style: solid;
}
.edit {
  color:orange;
}

.btn{
  margin-top:20px;
}

.profile-body .container {
  width: 400px;
  margin: 120px auto 120px;
  background-color: #fff;
  padding: 0 20px 20px;
  border-radius: 6px;
  -webkit-border-radius: 6px;
  -moz-border-radius: 6px;
  box-shadow: 0 2px 5px orange;
  -webkit-box-shadow: 0 2px 5px orange;
  -moz-box-shadow: 0 2px 5px orange;
  text-align: center;
}
.profile-body .container:hover .avatar-flip {
  transform: rotateY(180deg);
  -webkit-transform: rotateY(180deg);
}
.profile-body .container:hover .avatar-flip img:first-child {
  opacity: 0;
}
.profile-body .container:hover .avatar-flip img:last-child {
  opacity: 1;
}
.avatar-flip2 {
  border-radius: 100px;
  overflow: hidden;
  height: 150px;
  width: 150px;
  position: relative;
  margin: auto;
 
  transition: all 0.3s ease-in-out;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  box-shadow: 0 0 0 13px #f0f0f0;
  -webkit-box-shadow: 0 0 0 13px #f0f0f0;
  -moz-box-shadow: 0 0 0 13px #f0f0f0;
}
.avatar-flip {
  border-radius: 100px;
  overflow: hidden;
  height: 150px;
  width: 150px;
  position: relative;
  margin: auto;
  top: -60px;
  transition: all 0.3s ease-in-out;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  box-shadow: 0 0 0 13px #f0f0f0;
  -webkit-box-shadow: 0 0 0 13px #f0f0f0;
  -moz-box-shadow: 0 0 0 13px #f0f0f0;
}
.avatar-flip img {
  position: absolute;
  left: 0;
  top: 0;
  border-radius: 100px;
  transition: all 0.3s ease-in-out;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
}
.avatar-flip img:first-child {
  z-index: 1;
}
.avatar-flip img:last-child {
  z-index: 0;
  transform: rotateY(180deg);
  -webkit-transform: rotateY(180deg);
  opacity: 0;
}
.profle-body h2 {
  font-size: 32px;
  font-weight: 600;
  margin-bottom: 15px;
  color: #333;
}
.profle-body  h4 {
  font-size: 14px;
  color: orange;
  letter-spacing: 1px;
  margin-bottom: 25px
}
.profle-body  p {
  font-size: 16px;
  line-height: 26px;
  margin-bottom: 20px;
  color: #666;
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
      </style>
</head>

<body>
<?php include('../dbcon.php'); ?>
<?php ob_start(); ?>
<?php
$user_query  = mysql_query("select * from tbl_user where user_id = '$session_id'")or die(mysql_error());
$user_row =mysql_fetch_array($user_query);

$user_name  = $user_row['user_fname']. " ".$user_row['user_lname'] ;

?> 
<ul id="dropdown1" class="dropdown-content">
  <li><a href="profile.php">My Profile</a></li>
  <li class="divider"></li>
  <li><a href="logout.php">Logout</a></li>
</ul>
<ul id="dropdown2" class="dropdown-content">
  <li><a href="profile.php">My Profile</a></li>
  <li class="divider"></li>
  <li><a href="logout.php">Logout</a></li>
</ul>
<nav>
    
      <div class="nav-wrapper">
      <a href="dashboard.php" class="brand-logo">LABO-IOS-TRANSIT</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
        <li><a class="dropdown-trigger" href="#!" data-target="dropdown2">@<?php echo $user_row['user_username']; ?><i class="material-icons right">arrow_drop_down</i></a></li>

        </ul>
      </div>
    
  </nav>

  <ul class="sidenav" id="mobile-demo">
  <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">@<?php echo $user_row['user_username']; ?><i class="material-icons right">arrow_drop_down</i></a></li>

  </ul>

<div class="banner">]
<div class="avatar-flip2">
  
    <img src="<?php echo  $user_row['user_image']; ?>" height="150" width="150">
    <img src="upload/user.png" height="150" width="150">
    
  </div>
<h1><?php echo $user_name; ?></h1>

</div>


<div class="container">
<div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s6"><a href="#test1">Update Report</a></li>
        <li class="tab col s6"><a class="active" href="#test2">View Attendance</a></li>
      </ul>
    </div>
    <div id="test1" class="col s12">
        <div class="report-body">
        
            <div class="row">


                   <div class="col s12 m12 l12">
                   <h5> Update your works here </h5>
                     <form method="POST" action="addreport.php">
                            <div class="container">
                                <input name="id" type="hidden" value="<?php echo $user_row['user_id']; ?>">
                            <textarea name="message" id="textarea2" class="field-long field-textarea" data-length="500" placeholder="Type Here"></textarea> <br>
                            <button name="addreport" type="submit" class="right btn btn-success"><i class="glyphicon glyphicon-save"></i>&nbsp;Save</button>
                            </div>
                     </form>

                               


                     </div> 

                     <div class="col s12 m12 l12">


                    <?php $report_query=mysql_query("select * from tbl_report LEFT JOIN tbl_user on tbl_user.user_id = tbl_report.user_id where tbl_report.user_id='$session_id'")or die(mysql_error());
                                        while($report_row=@mysql_fetch_array($report_query)){
                                        $id=$report_row['report_id'];  ?>
                            <p> Date posted : <b><?php echo $report_row['report_date']; ?> </b></p>
                            <p class="text-align:left"><?php echo $report_row['report_content']; ?> </p>
                            <hr>
                                                        <?php } ?>



                     </div>
             </div>
          </div>
    </div>

    <div id="test2" class="col s12">
        <div class="attendance-list-body">

    <h4> Your Attendance List</h4>
<table class="responsive-table highlight striped">
        <thead>
          <tr>
             <th>No.</th>
              <th>Date</th>
              <th>TimeIn</th>
              <th>TimeOut</th>
           
          </tr>
        </thead>

        <tbody>
        <?php $attend_query=mysql_query("select * from tb_attendance LEFT JOIN tbl_user on tbl_user.user_id = tb_attendance.user_id where tb_attendance.user_id='$session_id'")or die(mysql_error());
											  $i=1;
											while($attend_row=@mysql_fetch_array($attend_query)){
											$id=$attend_row['attend_id'];  ?>
								
									 <tr class="del<?php echo $id ?>">
									 <td width="10"><?php echo "$i"."."; ?>	</td>
									 
									<td width="90"><?php echo $attend_row['attend_month'].' '.$attend_row['attend_day'].', '. $attend_row['attend_year']; ?></td> 
									<td width="5"><?php echo $attend_row['attend_timein']; ?></td>
									
									<td width="5"><?php echo $attend_row['attend_timeout']; ?></td>
                                  
									   
								
                                    </tr>
									<?php $i++;} ?>
        </tbody>
      </table>
                                            </div>
    </div>

   
   
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