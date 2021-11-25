<?php
$page_title = 'Edit Recipe';
include_once $_SERVER['DOCUMENT_ROOT'] . '/_global/header.php';

if (isset($_GET['id'])) {
    $user_id = $_GET['id'];

    // Build Query
    $query .= 'SELECT * ';
    $query .= 'FROM recipes ';
    $query .= 'WHERE id=' . $user_id;

    $db_results = mysqli_query($db_connection, $query);
    if ($db_results && $db_results->num_rows > 0) {
        // Get row from results and assign to $user variable;
        $user = mysqli_fetch_assoc($db_results);
    } else {
        // Redirect user if ID does not have a match in the DB
        redirectTo('/admin/users?error=' . mysqli_error($db_connection));
    }
} else {
    // Redirect user if no ID is passed in URL
    redirectTo('/admin/recipes/all.php');
}
?>

<div class="container">
    <h1><?php echo $user['title']; ?>
    </h1>
    <p><b>Category:</b> <?php echo $user['category']; ?>
    </p>
    <p><b>Time to Make:</b> <?php echo $user['make_time']; ?>
    </p>
    <p><b>Ingredients:</b> <?php echo $user['ingredients']; ?>
    </p>
    <p><b>Recipe:</b> <?php echo $user['steps']; ?>
    </p>
    <p><b>Date Created:</b> <?php echo $user['date_created']; ?>
    </p>
    <p><b>Last Updated:</b> <?php echo $user['date_updated']; ?>
    </p>
    <p><a class="btn btn-primary"
            href="/admin/recipes/edit.php?id=<?php echo $user['id']; ?>">Edit</a>
        <a class="btn btn-secondary"
            href="/admin/recipes/delete.php?id=<?php echo $user['id']; ?>">Delete</a>
    </p>
</div>
<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/_global/footer.php';
?>