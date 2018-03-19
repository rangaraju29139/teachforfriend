<?php
include "dbcon.php";
$userid = $_POST['userid'];
$subjectid =  $_POST['subjectid'];
$chapterid = $_POST['chapterid'];
$topicname = $_POST['topicname'];
$topicurl = $_POST['topicurl'];
$description = $_POST['description'];
$materialurl = $_POST['materialurl'];

$result = mysqli_query($conn, "insert into topics (userid,subjectid,chapterid,topicname,topicurl,description,materialurl)
values('$userid','$subjectid','$chapterid','$topicname','$topicurl','$description','$materialurl')");

if($result){
echo "successful";
header('Location:profile.php');
}else{
  echo "not success";
  echo mysqli_error($conn);

}




?>
