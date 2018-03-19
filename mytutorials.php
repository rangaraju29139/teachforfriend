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

      <h1 class="my-4">teach for friend</h1>
 <ol class="breadcrumb">
   <li class="breadcrumb-item">
     <a href="home.php">Home</a>
   </li>
   <li class="breadcrumb-item active">my tutorials</li>
 </ol>
 <h2>my tutorials</h2>

 <div class="row">
   <div class="col-lg-4">

<?php include "category.php"; ?>
   </div>
   <div class="col-lg-8">
 <?php
 $sql = "SELECT * FROM topics where userid='$email'";
 $result = mysqli_query($conn,$sql);
echo " <div class='row'>";
if(mysqli_num_rows($result) > 0){

while ($row = mysqli_fetch_assoc($result)) {

   echo "<div class='col-lg-4 col-sm-6 portfolio-item'>
     <div class='card h-100'>
       <a href='viewtutorial.php?topicid=".$row['topicid']."'>";
       echo "<div style='pointer-events:none;' class='embed-responsive embed-responsive-16by9'>
         <iframe class='embed-responsive-item' src='{$row['topicurl']}' allowfullscreen></iframe>
       </div>"."</a>".
   "       <div class='card-body'>
         <h4 class='card-title'>
           <a href='viewtutorial.php?topicid=".$row['topicid']."'>".$row['topicname']."</a>
         </h4>
         <p class='card-text'>".$row['description']."</p>
       </div>
     </div>
   </div>";
 }
}
?>
 </div>

</div>
</div>















    <!-- Footer -->
  <?php include "footer.php" ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
