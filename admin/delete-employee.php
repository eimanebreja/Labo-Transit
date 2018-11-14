<?php
 include('../dbcon.php');

$id=$_GET['id'];

mysql_query("delete from tbl_user where user_id='$id'") or die(mysql_error());

header('location:index.php');
?>