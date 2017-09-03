<?php



  $data = array();

  switch($_SERVER['REQUEST_METHOD']) 
  {
    case 'GET': 

      //if(empty($_GET['time'])) return;

      $log = "Click:\t" .  time() . "\t" . $_GET['time'] . "\t" . $_SERVER['HTTP_USER_AGENT'] . "\n";

      $data[] = $log;
      file_put_contents('request.log', $log, FILE_APPEND);
      break;
    case 'POST': 

      break;

    default:
      $log = "Request:\t" . time() . "\t" . $_SERVER['REQUEST_METHOD'] . $_SERVER['HTTP_USER_AGENT'] . "\n";
      
      $data[] = $log;
      file_put_contents('request.log', $log, FILE_APPEND);
  }

  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  echo json_encode($data);
?>