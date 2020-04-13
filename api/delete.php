<?php

require '../src/services/UserService.php';

    $userService = new UserService;

    $id = ($_GET['id'] !== null && (int)$_GET['id'] > 0)?  (int)$_GET['id'] : false;

    if(empty($id)) {
       http_response_code(400);
    }

    $userService->delete($id) ? http_response_code(204) : http_response_code(422);
    
?>