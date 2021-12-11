<?php
$page_title = 'Search';
include_once __DIR__ . '/_global/header.php';

// If Keyword param exist, update query to show search results instead of everything
if (isset($_GET['category'])) {
    $category = $_GET['category'];
}

$query = "SELECT * FROM recipes WHERE  category = '$category'";;
$db_results = mysqli_query($db_connection, $query);
?>

<div class="center">
      <div class="hero">
   <h1>Categories</h1>
   <h2>What are you looking for today?</h2>
   </div>
   </div>
      <div class="grid2">
         <div>         
         <a href="category-list.php?category=Breakfast">
         <img src="imgs/breakfast.png" alt="chicken"></a>
         </div>
         <div>
         <a href="category-list.php?category=Lunch">
         <img src="imgs/lunch.png" alt="chicken"></a>
         </div>
         <div>
         <a href="category-list.php?category=Dinner">
         <img src="imgs/dinner.png" alt="chicken"></a>
         </div>
         <div>
         <a href="category-list.php?category=Appetizer">
         <img src="imgs/appetizers.png" alt="chicken"></a>
         </div>
         <div>
         <a href="category-list.php?category=Dessert">
            <img src="imgs/dessert.png" alt="chicken"></a>
         </div>
         </div>
<div class= "recipemargin categoryresults">
    <div class="strike">
        <div class="recipes">
        <h1>Category Results</h1>
        </div>
    </div>
<div class="grid">
<?php
    while ($row = mysqli_fetch_assoc($db_results)) {
        echo '<div class="list">
        <a href="view.php?id=' . $row['id'] . '">
        <div class="image">
            <img src="imgs/fullbanana.png" alt="image"></a>
        </div>
        <div class="recipetitle">
            <h2>' . $row['title'] . '</h2></a>
        </div>
        <div class="recipetime">
        <h2>' . $row['make_time'] . '</h2></a>
    </div></a>
        </div>';
    }
    ?>
</div>
<?php
include_once __DIR__ . '/_global/footer.php';
?>