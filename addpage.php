<?php
$page_title = 'Create a Recipe';
include_once __DIR__ . '/_global/header.php';
?>


   <div class="viewall">
   <div class="strike move">
      <div class="recipes">
      <h1>Create a New Recipe</h1>
      </div>
      <form action="" method ="POST">

         <div class="inside">
         <input class="pickimage" type="image" src="imgs/blankimage.jpg" alt= "Submit"> 
         <input class="recipenaming" type="text" placeholder="Recipe Name">
         <input class="time" type="text" placeholder="Time to Make">
         <input class="eachsteps" type="text" placeholder="Steps">
         <input class="ingredientsfood" type="text" placeholder="Ingredients">
         <button type="button">Submit</button> 
         </div>
      </form>
      </div>
   </div> 

<?php
include_once __DIR__ . '/_global/footer.php';
?>