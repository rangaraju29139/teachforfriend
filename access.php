<?php
  require_once "config.php";
  include  "dbcon.php";

  if (isset($_SESSION['access_token']))
    $gClient->setAccessToken($_SESSION['access_token']);
  else if (isset($_GET['code'])) {
    $token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
    $_SESSION['access_token'] = $token;
  } else {
    header('Location: login.php');
    exit();
  }

  $oAuth = new Google_Service_Oauth2($gClient);
  $userData = $oAuth->userinfo_v2_me->get();

  $_SESSION['id'] = $userData['id'];
  $_SESSION['email'] = $userData['email'];
  $_SESSION['gender'] = $userData['gender'];
  $_SESSION['picture'] = $userData['picture'];
  $_SESSION['familyName'] = $userData['familyName'];
  $_SESSION['givenName'] = $userData['givenName'];



  $givenName=$_SESSION['givenName'];
  $familyName=$_SESSION['familyName'];
  $email=$_SESSION['email'];
  $gender=$_SESSION['gender'];
  $picture=$_SESSION['picture'];

  $rset = mysqli_query($conn,"select userid from users where userid='$email'");

  if(!$rset){

  }else{

    $image = base64_encode($picture);

    $r = mysqli_query($conn,"INSERT INTO users(userid,givenName,familyName,gender,picture)
values('$email','$givenName','$familyName','$gender','$image')");

  }



 header('Location: profile.php');
  exit();
?>
