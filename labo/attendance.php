<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>LABO</title>
  <link rel="icon" type="image/png" href="assets/images/icon.png">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="../assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css" rel="stylesheet" />
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" rel="stylesheet"
    media="screen,projection" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css" rel="stylesheet" />
  <style>
   .input-field input:focus + label {
   color: orange !important;
 }
 /* label underline focus color */
 .row .input-field input:focus {
   border-bottom: 1px solid orange !important;
   box-shadow: 0 1px 0 0 orange !important
 }
  </style>
</head>

<body>
    <div class="whole-body">

    <div class="valign-wrapper row login-box">
  <div class="col card hoverable s10 pull-s1 m6 pull-m3 l4 pull-l4">
    <form role="form" class="form-horizontal" method="POST" action="attend.php">
      <div class="card-content">
          <div class="image-top">
              <center>
          <img style="width:200px; height:200px;" src="../assets/images/attend-icon.png">
          <h2>ATTENDANCE </h2>
</center>
        </div>
      
        <div class="row">
          <div class="input-field col s12">
            <label for="email">Employee ID</label>
            <input type="text" class="validate" name="employ_id" id="username" placeholder="Please Enter your Employee ID" />
          </div>
        </div>
      </div>
      
      <div class="card-action">
          
      <div  class="right-align">
          
     <b style="float:left"> <?php echo date('M d, Y'); ?> </b >
        <input type="submit" name="timein" class="btn orange waves-effect waves-light" value="TIME-IN">
        <input type="submit" name="timeout" class="btn green waves-effect waves-light" value="TIME-OUT">
      </div>
</div>

    
    </form>
  </div>
</div>
</div>

  
  <script src="../assets/js/jquery-2.2.1.min.js"></script>
  <script src="../assets/js/init.js"></script>
  <script src="../assets/js/materialize.min.js"></script>
  <script src="../assets/js/materialize.js"></script>
  

</body>

</html>