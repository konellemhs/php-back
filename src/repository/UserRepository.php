<?php

class UserRepository 
{   
    /**
     * @var PDO
     */
    private $pdo;

    public function __construct()
    {
        $this->pdo = new DBC;
    }

    /**
     * @param User $user
     * 
     * @return bool
     */
    public function createUser(User $user): bool
    {
        $sql = "INSERT INTO users (name,phone,email) VALUES (:name, :phone, :email)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':name', $this->name);
        $stmt->bindValue(':phone', $this->phone);
        $stmt->bindValue(':email', $this->email);

        return $stmt->execute() ? false : true;
    }

    /**
     * @param int $id
     * 
     * @return bool
     */
    public function deleteUser(int $id): bool
    {
        $sql = "DELETE FROM users WHERE id =  :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id',$id , PDO::PARAM_INT);   

        return $stmt->execute() ? false : true;
    }

    /**
     * @return array
     */
    public function getAll(): array
    {
        $sql ='SELECT * FROM users';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $i = 0;
        while ($row = $stmt->fetch()) {
            $array[$i] =$row;
            $i++;
        }

        return $array;
    }
}