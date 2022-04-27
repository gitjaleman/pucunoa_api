<?php 
  require "header.php";
  http_response_code(200);
  $return=null;

  switch ($_SERVER['REQUEST_METHOD']){
    case 'GET':
        $return = login();
      break;
  }


  function login(){
    $obj = new conn;
    $sql = "SELECT * FROM `users`";
    $con = $obj->query($sql);
    $num = mysqli_num_rows($con);
    $data['num'] = $num;
    if ($num >= 1) {
      while ($d = mysqli_fetch_assoc($con)) {
        $data['data'][] = $d;
      }
    } else {
      $data['data'] = FALSE;
    }
    return $data;
  }





  echo json_encode($return);
?>