<?php
$page_title = 'Delete Recipe';
include_once __DIR__ . '/../../_global/header2.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // Build Query
    $query .= 'DELETE FROM recipes WHERE id=' . $id;

    $db_results = mysqli_query($db_connection, $query);
    if ($db_results) {
        redirectTo('/admin/recipes/all.php?success=RecipewasDeleted');
    } else {
        redirectTo('/admin/recipes/view.php?&error=' . mysqli_error($db_connection));
    }
}

include_once __DIR__ . '/../../_global/footer.php';
?>
