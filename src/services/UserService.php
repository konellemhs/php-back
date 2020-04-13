<?php


class UserService
{   
    /**
     * @var UserRepository
     */
    private $userRepository;

    public function __construct()
    {
        $this->userRepository = new UserRepository;
    }

    /**
     * @param string $name
     * @param string $phone
     * @param string $email
     * 
     * @return bool
     */
    public function create(string $name, string $phone, string $email): bool
    {
        return $this->userRepository->createUser(new User(trim($name), trim($phone), trim($email)));
    }

    /**
     * @param int $id
     * 
     * @return bool
     */
    public function delete(int $id): bool
    {
        return $this->userRepository->deleteUser($id);
    }
}