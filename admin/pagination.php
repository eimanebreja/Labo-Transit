<?php include 'session.php';?>
<?php include '../dbcon.php';?>
<?php ob_start();?>
<?php
$user_query = mysql_query("select * from tbl_admin where admin_id = '$session_id'") or die(mysql_error());
$admin_row = mysql_fetch_array($user_query);
$admin_name = $admin_row['admin_name'];
$admin_role = $admin_row['role'];

?>

<?php
//pagination.php
$connect = mysqli_connect("localhost", "root", "", "db_lobo");
$record_per_page = 9;
$page = '';
$output = '';
if (isset($_POST["page"])) {
    $page = $_POST["page"];
} else {
    $page = 1;
}
$start_from = ($page - 1) * $record_per_page;
$query = "SELECT * FROM tb_attendance LEFT JOIN tbl_user on tbl_user.user_id = tb_attendance.user_id ORDER BY attend_id DESC LIMIT $start_from, $record_per_page
";
$result = mysqli_query($connect, $query);
$output .= "
      <table class='table table-bordered'>
           <tr>
           <th> No </th>

           <th>Employee ID</th>
             <th>Name</th>
             <th>Date</th>
             <th>Time-In</th>
             <th>Time-Out</th>


           </tr>
 ";
$i = 1;
while ($row = mysqli_fetch_array($result)) {
    $output .= '
           <tr $id;>
                <td> ' . $i . '.' . '</td>
                <td>' . $row["user_number"] . '</td>
                <td>' . $row["user_fname"] . '' . $row["user_lname"] . '</td>
                <td>' . $row["attend_month"] . ' ' . $row["attend_day"] . ', ' . $row["attend_year"] . '</td>
                <td>' . $row["attend_timein"] . '</td>
                <td>' . $row["attend_timeout"] . '</td>

           </tr>


      ';
    $i++;
}

$output .= '</table><br /><div align="center">';
$page_query = "SELECT * FROM tb_attendance LEFT JOIN tbl_user ON tbl_user.user_id = tb_attendance.user_id ORDER BY attend_id DESC";
$page_result = mysqli_query($connect, $page_query);
$total_records = mysqli_num_rows($page_result);
$total_pages = ceil($total_records / $record_per_page);
for ($i = 1; $i <= $total_pages; $i++) {
    $output .= "<span class='pagination_link' style='cursor:pointer; padding:6px; border:1px solid #ccc;' id='" . $i . "'>" . $i . "</span>";
}
$output .= '</div><br /><br />';
echo $output;
