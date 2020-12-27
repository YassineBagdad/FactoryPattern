<?php
require 'IDB.php';
require 'DBMysql.php';
require 'DBOracle.php';
require 'DBFactory.php';


$db1 = DBFactory::create ('mysql:dbname=blog;host=localhost', 'root', '');


$query = $db1->doQuery('select * from article');


var_dump($db1);
var_dump($query);