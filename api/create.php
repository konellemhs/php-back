<?php
include './src/config/dbc.php';
include './src/services/UserService.php';
include './src/repository/UserRepository.php';
include './src/models/User.php';

    $userService = new UserService;

    $data = file_get_contents("php://input");

    if(isset($data) && !empty($data)) {

        $request = json_decode($data);

        $userService->create($request->name, $request->phone, $request->email) ? http_response_code(201) : http_response_code(422);
       
    }

?>