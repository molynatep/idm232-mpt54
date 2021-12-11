<?php
$page_title = ' Recipe';
include_once __DIR__ . '/../../_global/header2.php';

if (isset($_POST['update'])) {
    //  Parse Data
    $title = mysqli_real_escape_string($db_connection, $_POST['title']);
    $category = mysqli_real_escape_string($db_connection, $_POST['category']);
    $make_time = mysqli_real_escape_string($db_connection, $_POST['make_time']);
    $ingredients = mysqli_real_escape_string($db_connection, $_POST['ingredients']);
    $steps = mysqli_real_escape_string($db_connection, $_POST['steps']);
    $current_date = getFormattedDateTime();

    // Build Query
    $query = 'UPDATE recipes ';
    $query .= 'SET ';
    $query .= "title = '{$title}', ";
    $query .= "category = '{$category}', ";
    $query .= "make_time = '{$make_time}', ";
    $query .= "ingredients = '{$ingredients}', ";
    $query .= "steps = '{$steps}', ";
    $query .= "date_updated = '{$current_date}' ";
    $query .= "WHERE id = {$_POST['recipe_id']}";

    // Execute Query
    $db_results = mysqli_query($db_connection, $query);

    if ($db_results) {
        // Success
        redirectTo('admin/recipes/all.php?success=Recipe Updated');
    } else {
        // Error
        redirectTo('admin/recipes/all.php?id=&error=' . mysqli_error($db_connection));
    }
} elseif (isset($_GET['id'])) {
    $recipe_id = $_GET['id'];
    // Build Query
    $query = "SELECT * FROM recipes WHERE id=" . $recipe_id;

    $db_results = mysqli_query($db_connection, $query);
    if ($db_results) {
        $user = $row = mysqli_fetch_assoc($db_results);
    } else {
        // Redirect user if ID does not have a match in the DB
        redirectTo('/all.php?error=' . mysqli_error($db_connection));
    }
} else {
    // Redirect user if no ID is passed in URL
    redirectTo('/all.php');
}
?>
   <div class="viewall">
   <div class="strike move">
      <div class="recipes">
      <h1>Update Recipe</h1>
      </div>

      <?php include '../../_components/alert.php'; ?>
      <form action="" method ="POST">
         <div class="inside">

         <input class="pickimage" type="image" src="../../imgs/blankimage.jpg" alt= "Submit"> 
         <input type="file" id="myFile" name="image">

         <input type="text" 
         value="<?php echo $user['title'];?>""
         name="title" >

         <select name="category" id="">
      <option selected value=<?php echo $user['category'];?>><?php echo $user['category'];?></option>
      <option value="Breakfast">Breakfast</option>
      <option value="Lunch">Lunch</option>
      <option value="Dinner">Dinner</option>
      <option value="Appetizer">Appetizer</option>
      <option value="Dessert">Dessert</option>
    </select>

         <input type="text"
         value="<?php echo $user['make_time'];?>"
         name="make_time">

         <textarea class="mytextarea" 
         name="ingredients">
         <?php echo $user['ingredients'];?>
        </textarea>

         <textarea class="mytextarea" 
         name="steps">
         <?php echo $user['steps'];?>
        </textarea>

         <input class="button" name="update" type="submit" value="Update">
         <input name="recipe_id" type="hidden" value="<?php echo $recipe_id; ?>">
         </div>
      </form>
      </div>
   </div> 

  </form>
</div>
<?php
include_once __DIR__ . '/../../_global/footer.php';
?>