
        <?php


while ($row = mysqli_fetch_assoc($recipes)) {
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
        </div>';}
        ?>