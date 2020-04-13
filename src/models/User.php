<?php


class User {

    /**
     * @var string
     */
    private  $name;

    /**
     * @var string
     */
    private  $phone;

    /**
     * @var string
     */
    private  $email;

    /**
     * @param string $name
     * @param string $phone
     * @param string $email
     */
    public function __construct(string $name, string $phone, string $email)
    {  
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
    }

    /**
     * @param string $name
     * 
     * @return User
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param string $phone
     * 
     * @return User
     */
    public function setPhone(string $phone): self
    {
        $this->name = $phone;

        return $this;
    }

    /**
     * @param string $email
     * 
     * @return User
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
    */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @return string
    */
    public function getEmail(): string
    {
        return $this->email;
    }
}

