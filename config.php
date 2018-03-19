<?php
	session_start();
	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("67654922017-l5bpppiste78mbqlsj65e361kukn8t5r.apps.googleusercontent.com");
	$gClient->setClientSecret("P9HM1m5LN9mgDbPUFB3lxfRe");
	$gClient->setApplicationName("teach for friend");
	$gClient->setRedirectUri("http://www.teachforfriend.com/access.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
