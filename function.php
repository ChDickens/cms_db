<?php

function insertCategory() {
    global $connection;
    if (isset($_POST['insert'])) {
        $title = $_POST['title'];

        $sql_insert_category = "INSERT INTO categories(title) VALUES ('$title')";
        $result_inserting_cat = mysqli_query($connection, $sql_insert_category);
        confirmQuery($result_inserting_cat);
    }
}

function allCategories() {
    global $connection;

    $sql_cat = "SELECT * FROM categories";
    $cat_query = mysqli_query($connection, $sql_cat);
    confirmQuery($cat_query);

    foreach ($cat_query as $item) { ?>
        <tr>
            <td><?= $item['id'] ?></td>
            <td><?= $item['title'] ?></td>
            <td><a href="categories.php?edit=<?= $item['id'] ?>" class="btn btn-success">Edit</a></td>
            <td><a href="categories.php?delete=<?= $item['id'] ?>" class="btn btn-danger">Delete</a></td>
        </tr>
        <?php
    }
}

function deleteCategory() {
    global $connection;

    if (isset($_GET['delete'])) {
        $the_cat_id = $_GET['delete'];

        $query_cat_delete = "DELETE FROM categories WHERE id = $the_cat_id";
        $cat_delete = mysqli_query($connection, $query_cat_delete);
        confirmQuery($cat_delete);
    }
}


?>