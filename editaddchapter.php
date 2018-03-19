<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

  <?php include "title.php"?>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- this is the sample comment -->
    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <?php include "profilenavigation.php" ?>
<!-- this is the corosoul -->


    <!-- Page Content -->
    <div class="container">

      <h1 class="my-4"></h1>

 <ol class="breadcrumb">
   <li class="breadcrumb-item">
     <a href="home.php">Home</a>
   </li>
   <li class="breadcrumb-item active">add chapter</li>
 </ol>


 <form class="col-md-10" action="editaddchaptersubmit.php?topicid='<?php echo $_GET['topicid']  ;?>'"  method="POST">
   <div class="form-item">
     <label for="userid">Email address</label>
     <input type="email" name="userid" class="form-control" id="userid" value="<?php echo $_SESSION['email'];?>" readonly>
   </div>

 <div class="form-item">
    <label for="subject">select an subject</label>
 <select class='form-control' id="subject" name="subjectid">
   <option value=''>select an subject</option>
 <?php
 $email = $_SESSION['email'];
 $sql = "SELECT * FROM subjects where userid='$email'";
 $result = mysqli_query($conn,$sql);
 if(mysqli_num_rows($result) > 0){

 while ($row = mysqli_fetch_assoc($result)) {
     echo "<option value='" . $row['subjectid'] ."'>" . $row['subjectname'] ."</option>";
 }
 }
 echo "</select>";
 ?>
 <div class="form-control ">
 <a class="button-primary" href="editaddsubject.php">Add subject</a><span class="text-danger">If the subject is new?</span>
 </div>
 </div>
 <div class="form-item">
   <label for="subject">enter the chapter</label>
 <input class="form-control" type="text" placeholder="enter the chapter" name="chaptername">


 </div>




   <button type="submit" class="btn btn-success">Submit</button>
 </form>







    <!-- Footer -->
  <?php include "footer.php" ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
