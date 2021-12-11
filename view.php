
<?php
$page_title = 'Recipe';
include_once __DIR__ . '/_global/header.php';

if (isset($_GET['id'])) {
    $user_id = $_GET['id'];

    // Build Query
    $query = "SELECT * FROM recipes WHERE id=" . $user_id;

    $db_results = mysqli_query($db_connection, $query);
    if ($db_results && $db_results->num_rows > 0) {
        // Get row from results and assign to $user variable;
        $recipe = mysqli_fetch_assoc($db_results);
    } else {
        // Redirect user if ID does not have a match in the DB
        redirectTo('/admin/users?error=' . mysqli_error($db_connection));
    }
} else {
    // Redirect user if no ID is passed in URL
    redirectTo('/admin/recipes/all.php');
}
?>

<div class="recipegrid">
         <div class="leftrecipe">
         <img src="imgs/fullbanana.png" alt="bananabread">
         <div class="ingredients">
         <h1>Ingredients</h1>
         <p><?php echo $recipe['ingredients'];?></p>
      </div>
      </div>
      <div class="rightrecipe">
         <h1><?php echo $recipe['title'];?></h1>
         <h2><?php echo $recipe['make_time'];?></h2>
         <p class="step"><?php echo $recipe['steps'];?></p>
      </div>
      </div>
   </div>
   <?php
include_once __DIR__ . '/_global/footer.php';
?>