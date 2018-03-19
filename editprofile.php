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
   <li class="breadcrumb-item active">Edit profile</li>
 </ol>
 <div class="row">
   <div class="col-lg-4">

     <img class="img-fluid rounded-circle"  height="auto" src="<?php echo $_SESSION['picture'] ?>"><br>
<?php include "category.php"?>
   </div>
   <div class="col-lg-8 ">
    <div class="card">
    <div class="card-header">YOUR DETAILS:</div>
<div class="card-body">

      <form action="editprofilesubmit.php" method="post">

     <b>mail id:</b><input type="text" name="userid" class="form-control" value="<?php echo $_SESSION['email']?>" readonly><br>
<b>firstname:</b>
<input type="text" name="givenName" class="form-control" value="<?php echo $_SESSION['givenName']?>"><br>
<b>Last Name:</b>
<input type="text" name="familyName" class="form-control" value="<?php echo $_SESSION['familyName']?>"><br>

<b>mobile number:</b>
<input type="number" name="number" class="form-control" placeholder="you have no mobile number"></br>
<b>educational qualification:</b>
<select name="eduqual" class="form-control">
  <option value="">Select your qualification</option>
  <option value="ug">UG</option>
  <option value="pg">PG</option>
  <option value="hignschool">HIGH SCHOOL</option>
  <option value="secondaryschool">SECONDARY SCHOOL</option>

</select>
<input type="submit" value="Submit" class="btn btn-success">
</div>
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
