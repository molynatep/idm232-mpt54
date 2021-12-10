<?php

//Required files for the app 

include __DIR__ . '/../config.php';
include __DIR__ . '/../_includes/helper.php';
include __DIR__ . '/../_includes/functions.php';


if (isset($page_title)) {
    $page_title = $page_title . '';
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
   <link rel="normalize" href="css/normalize.css">
   <link rel="stylesheet" href="css/stylesheet.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,500;1,600;1,700&display=swap" rel="stylesheet">
</head>
<body>

  <!-- Main Navigation -->
  <nav>
      <div id="menuToggle">
         <input type="checkbox" />
         <span></span>
         <span></span>
         <span></span>
         <ul id="menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="categories.php">Categories</a></li>
            <li><a href="search.php">Search</a></li>
         </ul>
      </div>
      <div class="search">
      <a href="search.php"><img src="imgs/search.svg" alt="search"></a>
      </div>
      <div class="logo">
         <img src="imgs/logo.svg" alt="logo">
      </div>
   </nav>
