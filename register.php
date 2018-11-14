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
            $usernameErr = "Required!";
        } else {
            $username = $_POST["username"];
        }

        if (empty ($_POST["password"])) {
            $passwordErr = "Required!";
        } else {
            $password = $_POST["password"];
        }

        if ($full_name && $username && $password) {


	$full_name=$_POST['fname'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$error_user=mysql_query("select * from tbl_admin where admin_name='$full_name'")or die(mysql_error());
	$count=mysql_num_rows($error_user);
	
	
	 if ($count  != 1){
	mysql_query("insert into tbl_admin (admin_name, admin_username, admin_password, role) 
	values('$full_name', '$username', '$password', 'Guess')")or die(mysql_error());
	echo "<script>alert('You successfully register as a Guess user!')</script>";				
	echo "<script>window.open('index.php','_self')</script>";
	}else{ ?>
	   <script type="text/javascript">
                        alert('Guess Already Exist');
           </script>
	<?php
	} } }
	?>
    
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>LABO | Register</title>
  <link rel="icon" type="image/png" href="assets/images/icon.png">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css" rel="stylesheet" />
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" rel="stylesheet"
    media="screen,projection" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css" rel="stylesheet" />
  <style>
     @import url('https://fonts.googleapis.com/css?family=Rajdhani|Teko');
     @import url('https://fonts.googleapis.com/css?family=Bungee|Press+Start+2P');

body {
  font-family: 'Teko', sans-serif;
font-family: 'Rajdhani', sans-serif;
}
   .input-field input:focus + label {
   color: orange !important;
 }
 
 .row .input-field input:focus {
   border-bottom: 1px solid orange !important;
   box-shadow: 0 1px 0 0 orange !important
 }


 .image-top p{
     text-align:center;
    font-size: 500%; 
    font-weight: bold;

 }
 .error {
        color:red;
    }



  </style>
</head>

<body>
    <div class="whole-body">

    <div class="valign-wrapper row login-box">
  <div class="col card hoverable s10 pull-s1 m6 pull-m3 l4 pull-l4">
    <form role="form" class="form-horizontal" method="POST" action="">
      <div class="card-content">
          <div class="image-top">
          <p> REGISTER </p>
        </div>
      
        <div class="row">
        <div class="input-field col s12">
            <label for="email">Enter your name </label> 
            <input type="text" class="validate" name="fname" id="username" value="<?php echo $full_name; ?>" />  <span class="error"> <?php echo $full_nameErr; ?> </span>
          </div>
          <div class="input-field col s12">
            <label for="email">Enter your username </label>
            <input type="text" class="validate" name="username" id="username" value="<?php echo $username; ?>" /> <span class="error"> <?php echo $usernameErr; ?> </span>
          </div>
          <div class="input-field col s12">
            <label for="password">Enter your password </label>
            <input type="password" class="validate" name="password" id="password" value="<?php echo $password; ?>" /> <span class="error"> <?php echo $passwordErr; ?> </span>
          </div>
        </div>
      </div>
      <div class="card-action right-align">
        <input type="submit" name="register" class="btn orange waves-effect waves-light" value="Register"> <br><br>
      </div>
    </form>
  </div>
</div>
</div>

  
  <script src="assets/js/jquery-2.2.1.min.js"></script>
  <script src="assets/js/init.js"></script>
  <script src="assets/js/materialize.min.js"></script>
  <script src="assets/js/materialize.js"></script>
  

</body>

</html>