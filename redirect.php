<?php

  if(empty($_GET['dl'])) {
    echo "empty";
    header( 'Location: /', true, 307 );
    exit;
  }

  $dl = $_GET['dl'];
  $log = "Redirect:\t" . time() . "\t" . $_GET['dl'] . "\t" . $_SERVER['HTTP_USER_AGENT'] . "\n";

  file_put_contents('request.log', $log, FILE_APPEND);

  echo $dl;
  //header("Location: $dl", true, 302);
?>