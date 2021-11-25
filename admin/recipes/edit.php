<?php
$page_title = 'Edit Recipe';
include_once $_SERVER['DOCUMENT_ROOT'] . '/_global/header.php';

if (isset($_POST['update'])) {
    $user_id = $_POST['user_id'];
    // Make sure GET ID == post ID
    if ($_GET['id'] != $user_id) {
        redirectTo('/admin/recipes/edit.php?id=' . $_GET['id'] . '&error=User ID does not match current user.');
    }
    //  Parse Data
    $image = mysqli_real_escape_string($db_connection, $_POST['image']);
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
    $query .= "WHERE id = {$user_id}";


    // Execute Query
    $db_results = mysqli_query($db_connection, $query);

    if ($db_results && $db_results->num_rows > 0) {
        // Success
        redirectTo('/admin/recipes/all.php?success=User Updated');
    } else {
        // Error
        redirectTo('/admin/recipes/edit.php?id=' . $user_id . '&error=' . mysqli_error($db_connection));
    }
} elseif (isset($_GET['id'])) {
    $user_id = $_GET['id'];
    // Build Query
    $query .= 'SELECT * ';
    $query .= 'FROM recipes ';
    $query .= 'WHERE id=' . $user_id;

    $db_results = mysqli_query($db_connection, $query);
    if ($db_results) {
        $user = $row = mysqli_fetch_assoc($db_results);
    } else {
        // Redirect user if ID does not have a match in the DB
        redirectTo('/admin/recipes/all.php?error=' . mysqli_error($db_connection));
    }
} else {
    // Redirect user if no ID is passed in URL
    redirectTo('/admin/recipes/all.php');
}
?>
   <div class="viewall">
   <div class="strike move">
      <div class="recipes">
      <h1>Update Recipe</h1>
      </div>

      <?php include $_SERVER['DOCUMENT_ROOT'] . '/_components/alert.php'; ?>
      <form action="" method ="POST">
         <div class="inside">

         <input class="pickimage" type="image" src="/imgs/blankimage.jpg" alt= "Submit"> 
         <input type="file" id="myFile" name="image">

         <input type="text" 
         value="<?php echo $user['title'];?>""
         name="title" >

         <input type="text" 
         value="<?php echo $user['category'];?>" 
         name="category">

         <input type="text"
         value="<?php echo $user['make_time'];?>"
         name="make_time">

         <input type="text" 
         value="<?php echo $user['ingredients'];?>"
         name= "ingredients">

         <input type="text"
         value="<?php echo $user['steps'];?>"
         name="steps">

         <input type="hidden"
         value="<?php echo $user['id']; ?>"
         name="user_id">

         <input class="button" name="update" type="submit" value="Update">
         </div>
      </form>
      </div>
   </div> 

  </form>
</div>
<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/_global/footer.php';
?>