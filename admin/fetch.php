<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "db_lobo");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
 select * from tbl_report LEFT JOIN tbl_user on tbl_user.user_id = tbl_report.user_id
  WHERE tbl_report.report_date LIKE '%".$search."%'
  OR tbl_report.report_content LIKE '%".$search."%' 
  OR tbl_user.user_fname LIKE '%".$search."%' 
  OR tbl_user.user_lname LIKE '%".$search."%' 
 ";

 
}
else
{
 $query = "
 select * from tbl_report LEFT JOIN tbl_user on tbl_user.user_id = tbl_report.user_id ORDER BY report_id DESC
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '

 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
 

   <div class="blockquote-box blockquote-danger">
   <div class="row">
       <div class="col s12 m4 l4">
            <h6><b>' .$row['user_fname']." ". $row['user_lname'].' </b> </h6>
         
        </div>
        <div class="col s12 m8 l8">
             <p>  <b>'.$row['report_date'].'  </b> </p>
             <p>   '.$row['report_content'].'  </p>
        </div>
    </div>
  </div>  
  

  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>