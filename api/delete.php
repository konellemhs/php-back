<?php

require '../model/User.php';

    $id = ($_GET['id'] !== null && (int)$_GET['id'] > 0)?  (int)$_GET['id'] : false;

    if(!$id)
    {
      return http_response_code(400);
    }
    
    if (User::deleteUser($id)) {
        
        http_response_code(204);
        
    }else {

      return http_response_code(422);
    }



?>