<?php

$db_connection = mysqli_connect( //This connects to mySQL database, with the three parameters.
    $db_hostname = 'host',
    $db_user = 'username',
    $db_password = 'password',
    $db_database_name = 'databasename',
);

if (!$db_connection) {
    echo "Connection failed sad: " . mysqli_connect_error();
    exit();
  }
  ?>