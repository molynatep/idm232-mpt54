<?php
include_once __DIR__ . '/../../_global/header2.php';

// Build Query
$query = "SELECT * FROM recipes";
$db_results = mysqli_query($db_connection, $query);

?>
<div class="viewall">
   <div class="strike move">
      <div class="recipes">
      <h1>View All Recipes</h1>
      </div>
   </div>
<?php
   // Build Query
$query = 'SELECT * ';
$query .= 'FROM recipes';
$db_results = mysqli_query($db_connection, $query);
?>
    <?php
    // Check if the results returned anything
    if ($db_results && $db_results->num_rows > 0) {
        include '../../_components/list-recipes.php';
    } else {
        echo '<p>There are currently no recipes in the database</p>';
    }
    ?>
   <a class="add" href="create.php">
   <h2 class="add">CREATE RECIPE</h2>
   </a>

   <?php
include_once __DIR__ . '/../../_global/footer.php';
?>