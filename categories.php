<?php
$page_title = 'Categories';
include_once __DIR__ .  '/_global/header.php';
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

<?php
include_once __DIR__ . '/_global/footer.php';
?>