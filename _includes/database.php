<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

//Connecting to mysql with database info
$db_connection = mysqli_connect(
    $app['db_hostname'],
    $app['db_username'],
    $app['db_password'],
    $app['db_database_name']
);

//check if connection has established
if(!$db_connection){
    echo 'Connection Error: '.mysqli_connect_error();
    exit();
}