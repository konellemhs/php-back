<?php


class DBC {

    private $host = '127.0.0.1';
    private $port= '3306';
    private $db   = 'test';
    private $user = 'root';
    private $pass = '';
    private $charset = 'utf8';

    private  $opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
   
    public function getPDO()
    {
        $dsn = "mysql:host=$this->host;port=$this->port;dbname=$this->db;charset=$this->charset";

        return new PDO($dsn, $this->user,  $this->pass,  $this->opt);
    }
}
