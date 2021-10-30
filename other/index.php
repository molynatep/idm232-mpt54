<?php include 'includes/header.php' ?>
   <nav role="navigation">
      <div id="menuToggle">
         <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>
               <ul id="menu">
                  <a href="index.html"><li>Home</li></a>
                  <a href="categories.html"><li>Categories</li></a>
                  <a href="search.html"><li>Search</li></a>
                  <a href="#"><li>Admin</li></a>
               </ul>
         </div>
         <div class="search">
            <img src="imgs/search.svg" alt="search">
         </div>
         <div class="logo">
            <img src="imgs/logo.svg" alt="logo">
         </div>
      </nav>
      <header class="nav">
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
      </header> 
   <div class= "recipemargin">
   <main>
      <div class="strike">
         <div class="recipes">
         <h1>Featured Recipes</h1>
         </div>
      </div>
   </main>   
   <div class="grid">
      <div>
      <img src="imgs/chicken.png" alt="chicken">
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
</body>
</html>