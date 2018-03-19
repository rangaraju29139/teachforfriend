<?php
include "dbcon.php";
$chaptername =$_POST['chaptername'];
$userid = $_POST['userid'];
$subjectid =$_POST['subjectid'];


$result = mysqli_query($conn,"INSERT INTO chapters (userid,subjectid,chaptername)
values('$userid','$subjectid','$chaptername')");
if($result){
echo "successful";
header('Location:edittutorial.php');
}else{
  echo "not success";
  echo mysqli_error($conn);

}
?>
