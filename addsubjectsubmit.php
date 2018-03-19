<?php
include "dbcon.php";

$userid = $_POST['userid'];
$subjectname =$_POST['subjectname'];
 echo "this is the subject name:".$subjectname;


$result = mysqli_query($conn, "insert into subject (userid,subjectname)
values('$userid','$subjectname')");
if($result){
echo "successful";
header('Location:addtutorial.php');
}else{
  echo "not success";
  echo mysqli_error($conn);

}
?>
