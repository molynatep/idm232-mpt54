<?php

//Required files for the app 
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/_includes/database.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/_includes/helper.php';


// Set Page Title

if (isset($page_title)) {
    $page_title = $page_title . 'Happy Recipes';
} else {
    $page_title = 'Happy Recipes';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?php echo $page_title; ?>
  </title>
   <link rel="normalize" href="/css/normalize.css">
   <link rel="stylesheet" href="/css/stylesheet.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,500;1,600;1,700&display=swap" rel="stylesheet">
</head>
<body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/_components/navigation.php';?>
    