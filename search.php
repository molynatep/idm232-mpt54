<?php
$page_title = 'Search';
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



</nav>
<div class="center">
    <div class= "hero">
        <h1>Find your favorite recipes.</h1>
        <h2>What will you cook today?</h2>

        <form class="search-form" action="" method="GET">
        <input class="searchbar" name="keyword" type="text" placeholder="Search for..."
            value="<?php echo @$_GET['keyword']; ?>">
        <input type="submit" value="submit">
</form>

</div>
</div>
<div class= "recipemargin">
    <div class="strike">
        <div class="recipes">
        <h1>Search Results</h1>
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
include_once __DIR__ . '/_global/footer.php';
?>
