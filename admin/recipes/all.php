<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/_global/header.php';
?>
<div class="viewall">
   <div class="strike move">
      <div class="recipes">
      <h1>View All Recipes</h1>
      </div>
   </div>
   <div class="editbox">
      <h3 class="recipename">Korean Fried Chicken</h3>
      <h3 class="delete">Delete</h3>
      <h3 class="edit">Edit</h3>
      <h3 class="date">Date: 1/1/21</h3>
   </div>
   </div>
   <a class="add" href="/admin/recipes/create.php">
   <h2 class="add">CREATE RECIPE</h2>
   </a>

   <?php
include_once $_SERVER['DOCUMENT_ROOT'] .'/_global/footer.php';
?>