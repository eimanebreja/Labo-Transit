<?php
include('dbcon.php'); 
	if (isset($_POST['addreport'])){
        $user_id=$_POST['id'];
    $content=$_POST['message'];
    date_default_timezone_set('Asia/Manila');
	$date = date("F d, Y");
	mysql_query("insert into tbl_report (report_content, report_date, user_id) 
	values('$content', '$date', '$user_id')")or die(mysql_error());
	echo "<script>alert('You successfully update your works today!')</script>";	
    echo "<script>window.open('dashboard.php?id=1','_self')</script>";
	
	}
	?>