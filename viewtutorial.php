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
   <li class="breadcrumb-item active">viewtutorial</li>
 </ol>

 <?php
 if(isset($_GET['topicid'])){
 $topicid= $_GET['topicid'];
}
 $sql = "SELECT * FROM topics where topicid='$topicid'";
 $result = mysqli_query($conn,$sql);
echo " <div class='row'>";
?>

<div class='col-md-4'>


<?php include "category.php" ?>

</div>
<?php
if(mysqli_num_rows($result) > 0){

while ($row = mysqli_fetch_assoc($result)) {

   echo "
     <!-- Post Content Column -->
     <div class='col-md-8'>

       <!-- Preview Image -->
       <div  class='embed-responsive embed-responsive-16by9'>
       <iframe width='auto' height='auto' src='{$row['topicurl']}'
allowfullscreen></iframe>


       </div>";
       if($row['userid']==$email){
           echo "    <a href='edittutorial.php?topicid=".$row['topicid']."'> <button class='btn btn-primary'>Edit Tutorial</button> </a>";
       }
       echo "

       <hr>
       <!-- Date/Time -->
       <p>Posted on  ".$row['date']."</p>

       <hr>

       <!-- Post Content -->
       <div class='card-body'>
            <h4 class='card-title text-primary'>
              <a>".$row['topicname']."</a>
            </h4>
            <p class='card-title text-primary'>Description:<br></p>
            <pre class='card-text'>".$row['description']."</pre>
            <p class='card-title text-primary'>For Material:</p>
              <p class='card-text'>For Material:<a href='{$row['materialurl']}' target='_blank'><span class='text-success'>Click Here..</span></a></p>
          </div>
       <hr>


   ";
 }
}
?>
</div>


 <!-- /.row -->

 </div>














    <!-- Footer -->
  <?php include "footer.php" ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
