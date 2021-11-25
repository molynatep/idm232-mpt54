<?php
$page_title = 'Create a Recipe';
include_once $_SERVER['DOCUMENT_ROOT'] . '/_global/header.php';
?>


   <div class="viewall">
   <div class="strike move">
      <div class="recipes">
      <h1>Create a New Recipe</h1>
      </div>
      <form action="" method ="POST">

         <div class="inside">
         <input class="pickimage" type="image" src="/imgs/blankimage.jpg" alt= "Submit"> 
         <input type="file" id="myFile" name="image">
         <input type="text" value="" name="recipe_name" placeholder="Recipe Name">
         <input type="text" value="" name="time" placeholder="Time to Make">
         <input type="text" value="" name="steps" placeholder="Steps">
         <input type="text" value="" name= "ingredients" placeholder="Ingredients">
         <input class="button" type="submit" value="Submit">
         </div>
      </form>
      </div>
   </div> 

<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/_global/footer.php';
?>