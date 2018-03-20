<?php
include "access.php";
include "dbcon.php";
$topicid = $_GET['topicid'];

$query =  "DELETE from topics where topicid='$topicid'";
$result=mysqli_query($conn,$query);
if(!$result){
  echo mysqli_error($conn);
}else {
  header('Location:mytutorials.php');
}



?>
