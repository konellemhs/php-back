<?php

require '../model/User.php';


$users = User::getAll();

if (!empty($users)) {

    echo json_encode($users);

}else {

    http_response_code(404);
}




  
