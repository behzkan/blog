<?php

$server = '127.0.0.1';
$user = 'root';
$password = '0000';
$db = 'test_db';

$connection = new mysqli($server, $user, $password, $db);

if(!$connection){
    echo 'error';
    exit();
}

