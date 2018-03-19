<?php
$servername ="localhost";
$username = "root";
$password = "";
$dbname = "teachfriend";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
  die("could not connect!");
}
$query = "insert into topics (userid,subjectid,chapterid,topicname,topicurl,description,materialurl)
values(1,3,4,'this is the tutorial about sample insertion','https://www.youtube.com/embed/jCEdTq3j-0U',
,'this is the ssample description about the sample video tutorial','http://www.pdf995.com/samples/pdf.pdf')";

mysqli_query($conn,$query);
?>
