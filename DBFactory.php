<?php

/**
 * Created by PhpStorm.
 * User: zakaria
 * Date: 21/12/2016
 * Time: 22:15
 */
class DBFactory
{
    public static function create ($connectionString, $username, $password){
        if (($driverEndPos = strpos ($connectionString, ':')) === false){
            throw new Exception ('Mauvaise chaine de connexion');
        }

        switch (substr ($connectionString, 0, $driverEndPos)){
            case 'mysql':
                $db = new DBMySql ($connectionString, $username, $password);
                break;
            case 'oracle':
                $db = new DBOracle ($connectionString, $username, $password);
                break;
            default:
                throw new Exception ('Type de base inconnu');
        }
        return $db;
    }
}