<?php
$page_title = 'Delete Recipe';
include '../../_global/header2.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // Build Query
    $query .= 'DELETE ';
    $query .= 'FROM recipes ';
    $query .= 'WHERE id=' . $id;
    // Sanity check to make sure we're only deleting a single record.

    $db_results = mysqli_query($db_connection, $query);
    if ($db_results) {
        redirectTo('all.php?success=Recipe was deleted');
    } else {
        redirectTo('view.php?id=' . $_GET['id'] . '&error=' . mysqli_error($db_connection));
    }
} else {
    // Redirect user if no ID is passed in URL
    redirectTo('/admin/recipes/all.php');
}
?>

<?php
include '../../_global/footer.php';
?>
