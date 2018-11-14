<?php
 include('../dbcon.php');

$id=$_GET['id'];

mysql_query("update tbl_admin set  role='Guess' where admin_id='$id'")or die(mysql_error()); 


header('location:index.php');
?>