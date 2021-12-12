<?php
$page_title = 'Case Study';
include_once __DIR__ . '/_global/header.php';
?>
<div class="centerpls">
    <div class="casestudy">
    <h1> Happy Recipes Case Study</h1>
    <img src="imgs/herocasestudy.png" alt="hero">
    <h2>OVERVIEW</h2>
        <p>
        Happy Recipes is a recipe site that uses PHP and mySQL to take information from a database to list, create, update, delete, search, and filter recipes. It creates new recipe pages without having to code each recipe page manually. The goal of the project was for a fully functional website that can update both the database and website which turned out to be a success despite the challenges along the way.
        </p>
    <h2>CONTEXT & CHALLENGE</h2>
        <p>
        This project is a recipe site that takes information from a database to create multiple webpages without having to code each page separately. I used PHP, mySQL, HTML, and CSS during this process. The project is meant to help make inputting similar pages more efficiently by using a database. In this case, it was to create new recipes and have each recipe show up in the correct format. The main goals were to have my database working, be able to create, edit, delete, and update recipes, as well as be able to search and sort the recipes by categories.
        </p>
    <h2>PROCESS & INSIGHT</h2>
    <h3>ALPHA</h3>
        <p>
        Planning for the alpha, I was focused on the design of the website and the key pages that needed to be coded out. I wanted to keep most of the design very similar across all the pages so I can focus more on the main problem of the website which was creating a functional database. I kept most of the design similar in my current design but changed it in the future to make it more functional. I coded this all in HTML and CSS and planned to later change it to PHP for my beta.
        </p>
        <div class="casegrid">
        <img src="imgs/home.jpg" alt="home">
        <img src="imgs/searchrecipe.jpg" alt="search">
        <img src="imgs/viewall.jpg" alt="viewall">
        <img src="imgs/editrecipe.jpg" alt="edit">
        <img src="imgs/categories.jpg" alt="categories">
        <img src="imgs/viewrecipe.jpg" alt="view">
        </div>
    <h3>CHALLENGES</h3>
    <p>
    I found that my main challenge was that I designed the site to have a round shape on the home page and found that it was difficult to code this while making it responsive. Once I coded in the shape, I used media queries to change the size of it. It took trial and error to get it correct and still have the ramen in the center of it as well. I also had to change my design for my forms to make it more practical as well. 
    </p>
    <h3>BETA</h3>
    <p>
    At this stage, I had to code my HTML files to PHP. I had to get my database working, and my create, edit, update, and delete pages to be functional. I got it to work so my database updated and new recipes would be added to the site or deleted depending on the page.  My other pages were not functional at this point yet.
    </p>
    <h3>CHALLENGES</h3>
    <p>
    My main challenge was that my PHP was not showing up on my domain despite everything working locally. I was able to fix this by changing the code for everywhere includes was from $_SERVER[‘DOCUMENT__ROOT’] to __DIR__. My pages inside folders also would not show up, and I solved this by creating two headers that are linked depending on which folder the PHP page was in. This was due to document root not working, so I had to create multiple files. Lastly, an error I could not fix was that my webpage does not redirect when I submit my forms or delete an item. The way to solve this is still unknown, however, it still updates my database, so it works. 
    </p>
    <h3>FINAL</h3>
    <p>
    For the final, I made all my pages functional. When you click on a category image underneath all the recipes with that category appears. The search page is functional by keywords in the recipe title.  I made the homepage have all the recipes that are added to the database, so I had to change the design of the recipe cards to make it functional. When the recipes are clicked on, it’s formatted in the standard recipe format. I changed the formatting on the forms pages such as the create and update pages as well. I made category select from a drop down and changed the ingredients and recipe steps to be text areas for improved formatting.
    </p>
    <h3>CHALLENGES</h3>
    <p>
    While many of the changes I added took some trial and error, the main challenge had was inputting images. The code for adding images to the database is in my code, however, nothing would upload to the files section of my database. I am still not sure what to do to solve it, because it sometimes ended up breaking the entire code for the form instead. I ended up just keeping one default image on all my recipes. 
    </p>
    <div class="casegrid">
        <img src="imgs/1.png" alt="1">
        <img src="imgs/2.png" alt="2">
        </div>
    <h2>CHANGES I WOULD MAKE</h2>
    <p>If I had more time, I would figure out how to add images to my database as I think it’s a key feature to the site. I also would make some minor changes, like changing the design of the mobile screen. I would also consider adding a user log in so users can access the admin page by logging in from the home screen.</p>
    <h2>THE SOLUTION</h2>
    <p>
    I followed through most of my design choices during the planning process. When you click on the hamburger menu from the homepage, the user only has access to the home screen, categories, and search. When the user clicks on a recipe, an image, ingredients, time it takes to make, and steps are shown. The category page filters recipes while the search page finds recipes by keywords. On the admin pages ‘Admin’ appears in the navigation. It takes the user to all the recipes in a list format. On this page the user can click on ‘create a recipe’ to make a new recipe.  When the user clicks on a recipe on this list, it had all the information about the recipe and the option to edit and delete the recipe. When anything is changed or added, it updates the database and website. 
    <br><b><a href="https://molynatep.com/idm232-mpt54/index.php" target="_blank">
    To view the website, click here.</b>
    </a>
    </p>
    <div class="casegrid">
        <img src="imgs/3.png" alt="1">
        <img src="imgs/4.png" alt="2">
        <img src="imgs/5.png" alt="3">
        <img src="imgs/6.png" alt="4">
        </div>
    <h2>THE RESULTS</h2>
    <p>Overall, I believe this project was a success because most of my planning was able to be followed through and my database works by updating the site. I also think I was able to code it very similarly to my initial designs. I was able to do the main functions that I needed done which was searching for recipes, categorizing them, create, update, edit, and delete them as well.</p>
    </div>
</div>

<?php
include_once __DIR__ . '/_global/footer.php';
?>