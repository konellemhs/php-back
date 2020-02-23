<?php

require '../model/User.php';

    $data = file_get_contents("php://input");

    if(isset($data) && !empty($data)) {

        $request = json_decode($data);
    
        // if(trim($request->name) == '' || $request->phone == '' || $request->email == '') {

        //     return http_response_code(400);
        // }

        $user = new User;
        $user->name  = trim($request->name);
        $user->phone = trim($request->phone);
        $user->email = trim($request->email);

        if (!$user->createUser()) {
            http_response_code(422);
        }else {
            http_response_code(201);
        }

    }

?>