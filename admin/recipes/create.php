<?php
$page_title = 'Create a Recipe';
include_once __DIR__ . '/../../_global/header2.php';

// Form has been submitted
if (isset($_POST['submit'])) {
   //  Parse Data
   $image = mysqli_real_escape_string($db_connection, $_POST['image']);
   $title = mysqli_real_escape_string($db_connection, $_POST['title']);
   $category = mysqli_real_escape_string($db_connection, $_POST['category']);
   $make_time = mysqli_real_escape_string($db_connection, $_POST['make_time']);
   $ingredients = mysqli_real_escape_string($db_connection, $_POST['ingredients']);
   $steps = mysqli_real_escape_string($db_connection, $_POST['steps']);
   $current_date = getFormattedDateTime();



   // Build Query
   $query = 'INSERT INTO recipes(image, title, category, make_time, ingredients, steps, date_created, date_updated)';
   $query .= "VALUES ('{$image}', '{$title}', '{$category}','{$make_time}', '{$ingredients}', '{$steps}', '{$current_date}', '{$current_date}')";

   // Execute Query
   $db_results = mysqli_query($db_connection, $query);
   if ($db_results) {
       // Success
       redirectTo('/admin/recipes/all.php?success=RecipewasCreated');
   } else {
       // Error
       redirectTo('/admin/recipes//all.php?error=' . mysqli_error($db_connection));
   }
}
?>



   <div class="viewall">
   <div class="strike move">
      <div class="recipes">
      <h1>Create a New Recipe</h1>
      </div>
      <form action="" method ="POST" enctype="multipart/form-data">
         <div class="inside">

         <input class="pickimage" type="image" src="../../imgs/blankimage.jpg" alt= "Submit"> 
         <input type="file" id="myFile" value="" name="image">
         <input type="text" value="" name="title" placeholder="Recipe Name">
         <label for="">Category</label>
         <br>
    <select name="category" id="">
      <option selected value="breakfast">Breakfast</option>
      <option value="lunch">Lunch</option>
      <option value="dinner">Dinner</option>
      <option value="appetizer">Appetizer</option>
      <option value="dessert">Dessert</option>
      <option value="vegetarian">Vegetarian</option>
    </select>
         <input type="text" value="" name="make_time" placeholder="Time to Make">
         <textarea class="mytextarea" value="" name="ingredients" placeholder="List ingredients here."></textarea>
         <textarea class="mytextarea" value="" name="steps" placeholder="Type recipe steps here."></textarea>
         <input class="button" name="submit" type="submit" value="Submit">

         </div>
      </form>
      </div>
   </div> 

<?php
include_once __DIR__ . '/../../_global/footer.php';
?>