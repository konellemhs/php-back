<?php

require '../src/repository/UserRepository.php';

$userRepository = new UserRepository;

$users = $userRepository->getAll();

if (!empty($users)) {

    echo json_encode($users);

}else {

    http_response_code(404);
}




  
