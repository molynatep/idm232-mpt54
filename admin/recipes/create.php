
<?php
$page_title = 'Create a Recipe';
include_once __DIR__ . '/../../_global/header2.php';

// Form has been submitted
if (isset($_POST['submit'])) {

     // Parse Data
     $temp_name = $_FILES['image']['tmp_name'];
     // dist/uploads/image-name.png
     $file_path = '/imgs/uploads/' . $file_title;
 
     // idm232/public_html/ + dist/uploads/image-name.png
     $file_destination =  '/../../imgs/uploads/' . $file_path;
     $current_date = getFormattedDateTime();
 
     // Build Query
     $query = 'INSERT INTO files(file_path, file_title, date_created)';
     $query .= "VALUES ('{$file_path}', '{$file_title}', '{$current_date}')";
 
     // Execute Query
     $db_results = mysqli_query($db_connection, $query);
     $new_uploaded_file_id = null;
     if ($db_results) {
         // file was inserted into the db
         if (move_uploaded_file($temp_name, $file_destination)) {
             // File was uploaded successfully
 
             // Build Query to get the recently uploaded image and get that ID
             $query = 'SELECT * ';
             $query .= 'FROM files ';
             $query .= "WHERE file_path='{$file_path}'";
 
             $db_results = mysqli_query($db_connection, $query);
             if ($db_results) {
                 // Get row from results and assign to $user variable;
                 $new_uploaded_file_id = mysqli_fetch_assoc($db_results)['id'];
             } else {
                 redirectTo('/admin/recipes/create.php?error=Could not find image in database');
             }
         } else {
             redirectTo('/admin/recipes/create.php?error=Error moving file');
         }
     } else {
         // Error
         redirectTo('/admin/recipes/create.php?error=' . mysqli_error($db_connection));
     }

   //  Parse Data
   $file_id = (float)$new_uploaded_file_id;
   $title = mysqli_real_escape_string($db_connection, $_POST['title']);
   $category = mysqli_real_escape_string($db_connection, $_POST['category']);
   $make_time = mysqli_real_escape_string($db_connection, $_POST['make_time']);
   $ingredients = mysqli_real_escape_string($db_connection, $_POST['ingredients']);
   $steps = mysqli_real_escape_string($db_connection, $_POST['steps']);
   $current_date = getFormattedDateTime();

  


   // Build Query
   $query = 'INSERT INTO recipes(file_id, title, category, make_time, ingredients, steps, date_created, date_updated)';
   $query .= "VALUES ('{$file_id}', '{$title}', '{$category}','{$make_time}', '{$ingredients}', '{$steps}', '{$current_date}', '{$current_date}')";

   // Execute Query
   $db_results = mysqli_query($db_connection, $query);
   if ($db_results) {
       // Success
       redirectTo('/admin/recipes/all.php?success=RecipewasCreated');
   } else {
       // Error
       redirectTo('/admin/recipes/all.php?error=' . mysqli_error($db_connection));
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
         <img class="pickimage" src="../../imgs/blankimage.jpg" alt= "Submit"> 
         <input type="file" id="myFile" value="" name="image">
         <input type="text" value="" name="title" placeholder="Recipe Name">
         <label for="">Category</label>
         <br>
    <select name="category" id="">
      <option selected value="Breakfast">Breakfast</option>
      <option value="Lunch">Lunch</option>
      <option value="Dinner">Dinner</option>
      <option value="Appetizer">Appetizer</option>
      <option value="Dessert">Dessert</option>
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