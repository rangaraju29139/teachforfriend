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

      <h1 class="my-4"> <?php echo $_SESSION['givenName'].$_SESSION['familyName'] ?></h1>

 <ol class="breadcrumb">
   <li class="breadcrumb-item">
     <a href="home.php">Home</a>
   </li>
   <li class="breadcrumb-item active">help</li>
 </ol>
 <div class="row">

   <div class="card">
     <div class="card-header"><h2 class="text-primary">May I help you!!!!!</h2></div>
     <div class="card-body">
   <div class="row">
     <?php
     $sql = "SELECT * FROM topics where subjectid=17";
     $result = mysqli_query($conn,$sql);
    echo " <div class='row'>";
    if(mysqli_num_rows($result) > 0){

    while ($row = mysqli_fetch_assoc($result)) {
       echo "<div class='col-lg-4 col-sm-6 portfolio-item'>
         <div class='card h-100'>
           <a href='viewhelp.php?topicid=".$row['topicid']."'>";
           echo "<div style='pointer-events:none;' class='embed-responsive embed-responsive-16by9'>
             <iframe class='embed-responsive-item' src='{$row['topicurl']}' allowfullscreen></iframe>
           </div>"."</a>".
       "       <div class='card-body'>
             <h4 class='card-title'>
               <a href='viewhelp.php?topicid=".$row['topicid']."'>".$row['topicname']."</a>
             </h4>
             <pre class='card-text'>".$row['description']."</pre>
           </div>
         </div>
       </div>";
     }
    }
    ?>
     </div>





   </div>
 </div>

 </div >



 </div>




    <!-- Footer -->
  <?php include "footer.php" ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
