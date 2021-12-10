<?php
include_once __DIR__ . '/_global/header.php';

// If Keyword param exist, update query to show search results instead of everything
if (isset($_GET['keyword'])) {
   $keyword = $_GET['keyword'];
   $recipes = search_recipe_with_keyword($keyword);
} else {
   // Build Query
   $recipes = get_recipes();
}
?>

<div class="center">
      <div class="hero">
         <h1>Find your favorite recipes.</h1>
         <h2>What will you cook today?</h2>
         <div class="ramenpic">
            <picture>
            <img srcset="imgs/ramen-sm.png,
                        imgs/ramen-med.png 1.5x,
                        imgs/ramen.png 2x"
                  src="imgs/ramen-sm.png"
                  alt="ramen">
            </picture>
         <h2 class="ramen">Miso Ramen</h2>
         </div>
      </div>
      </div>
      <div class="bg"></div>
   <div class="featuredrecipes">
      <div class="strike">
         <div class="recipes">
         <h1>Featured Recipes</h1>
         </div>
      </div>
   <div class="grid">
   <?php
    // Check if the results returned anything
    if ($recipes) {
        include __DIR__ . '/_components/list-recipes2.php';
    } else {
        echo '<p>There are currently no recipes in the database</p>';
    }
    ?>
   </div>
<?php
include_once __DIR__ .  '/_global/footer.php';
?>