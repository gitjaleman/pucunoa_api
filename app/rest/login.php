<?php 
  require "header.php";
  $obj=new conn;
  http_response_code(200);
  $return=null;

  switch ($_SERVER['REQUEST_METHOD']){
    case 'GET':
        $return = login();
      break;
  }


  function login(){
    echo "usted esta tratando de acceder al sistema";
  }





  echo json_encode($return);
?>