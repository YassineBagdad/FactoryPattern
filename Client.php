<?php


class Client
{
    public function getUserFromDB(IDB $DBInstance){
        return $DBInstance->doQuery('select * from user');
    }
}