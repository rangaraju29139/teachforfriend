<?php
//load_data.php
include "dbcon.php";
$output = '';
if(isset($_POST["subjectid"]))
{
     if($_POST["brand_id"] != '')
     {
          $sql = "SELECT * FROM chapters WHERE subjectid = '".$_POST["subjectid"]."'";
     }
     else
     {
          $sql = "SELECT * FROM chapters";
     }
     $result = mysqli_query($conn, $sql);
     while($row = mysqli_fetch_array($result))
     {
          $output .= '<option value=".$row['chapterid'].">".$row['chaptername']."</option>';
     }
     echo $output;
}
?>
