<?php

$db_connection = mysqli_connect(
    $app['db_hostname'],
    $app['db_username'],
    $app['db_password'],
    $app['db_database_name']
);

//Check if connection has been established
if(!$db_connection) {
    echo 'Connection Error: '.mysqli_connect_error();
    exit();
}
