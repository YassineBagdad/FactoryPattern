<?php
require 'IDB.php';
require 'DBMysql.php';
require 'DBOracle.php';
require 'DBFactory.php';
require 'Client.php';


$db = DBFactory::create ('mysql:dbname=gestion-news-test;host=localhost', 'root', '');

$client=new Client();
$users = $client->getUserFromDB($db);


var_dump($db);
var_dump($users);