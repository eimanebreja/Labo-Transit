<?php
 include('../dbcon.php');

$id=$_GET['id'];

mysql_query("delete from tb_attendance where attend_id='$id'") or die(mysql_error());

header('location:index.php');
?>