<?php

/**
 * Created by PhpStorm.
 * User: zakaria
 * Date: 21/12/2016
 * Time: 22:10
 */
class DBMysql implements IDB
{
    private $pdo;

    public function getPdo()
    {
        return $this->pdo;
    }

    public function setPdo($pdo)
    {
        $this->pdo = $pdo;
    }
    function __construct($connectionString, $username, $password)
    {
        $this->connect($connectionString, $username, $password); 
    }

    public function connect ($connectionString, $username, $password){
        if($this->pdo==null) {
            $pdo = new PDO($connectionString, $username, $password);
            $this->pdo = $pdo;
        }
            return $this->pdo;
    }
    public function doQuery ($queryString){
        $req=$this->getPDO()->query($queryString);
        $data= $req->fetchAll(PDO::FETCH_CLASS);
        return $data;
    }

}
