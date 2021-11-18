<?php
include_once __DIR__ . '/_global/header.php';
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
      <div class="recipehover"><a href="recipepage.html">
      <img class="banana" src="imgs/bananabread.png" alt="bananabread"></a>
      </div>
      <div>
      <img src="imgs/chicken.png" alt="chicken">
      </div>
      <div>
      <img src="imgs/chicken.png" alt="chicken">
      </div>
      <div>
      <img src="imgs/chicken.png" alt="chicken">
      </div>
   </div>
   </div>
<?php
include_once __DIR__ . '/_global/footer.php';
?>