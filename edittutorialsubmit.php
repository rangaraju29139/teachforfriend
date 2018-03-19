<?php
include "dbcon.php";
$topicid=$_POST['topicid'];
$userid = $_POST['userid'];
$subjectid = $_POST['subjectid'];
$chapterid = $_POST['chapterid'];
$topicname = $_POST['topicname'];
$topicurl = $_POST['topicurl'];
$description = $_POST['description'];
$materialurl = $_POST['materialurl'];

$result = mysqli_query($conn,"update topics set subjectid='$subjectid',chapterid='$chapterid',topicname='$topicname',
topicurl='$topicurl' ,description = '$description', materialurl='$materialurl' where topicid='$topicid'");
if($result){
  echo "success";
  header('Location:viewtutorial.php?topicid='.$topicid);
}else{
  echo "not successful";
  echo mysqli_error($conn);
}

?>
