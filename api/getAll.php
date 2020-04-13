<?php
include './src/config/dbc.php';
include './src/services/UserService.php';
include './src/repository/UserRepository.php';
include './src/models/User.php';

$userRepository = new UserRepository;

$users = $userRepository->getAll();

if (!empty($users)) {

    echo json_encode($users);

}else {

    http_response_code(404);
}




  
