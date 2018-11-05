<?php
if (isset($_GET['post_id'])) {
    $post_id = $_GET['post_id'];
    $post_sql = "SELECT * FROM posts WHERE id = $post_id";
    $post_query = mysqli_query($connection, $post_sql);
    confirmQuery($post_query);

    foreach ($post_query as $post) {
        $title = $post['title'];
        $content = $post['content'];
        // по аналогии далее
    }
}



if (isset($_POST['update_post'])) {

    // Получаем данные из формы и записываем в переменные
    $title = $_POST['title'];
    $category_id = $_POST['category_id'];
    $author = $_POST['author'];
    $date = date('d-m-Y');
    $tags = $_POST['tags'];
    $status = $_POST['status'];
    $content = $_POST['content'];
    $image_name = $_FILES['image']['name']; // для записи в БД
    $image_tmp = $_FILES['image']['tmp_name']; // для записи на диск

    if(empty($image_name)) {
        $sql_image_select = "SELECT * FROM posts";
        $post_query_image = mysqli_query($connection, $sql_image_select);

        foreach ($post_query_image as $image) {
            $image_name = $image['image'];
        }

    }

    $sql_create_post = "INSERT INTO posts ";
    $sql_create_post .= "(title, category_id, author, date, tags, content, image, status, comments_count, views_count) ";
    $sql_create_post .= "VALUES('$title', $category_id, '$author', now(), '$tags', '$content', '$image_name', $status, 0, 0)";

    $result_create_post = mysqli_query($connection, $sql_create_post);
    confirmQuery($result_create_post);

    // todo не работает загрузка на сервер
    move_uploaded_file($image_tmp,"../images" );
}


?>

<form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="">
            Title
        </label>
        <input type="text" name="title" class="form-control" value="<?= $title; ?>">
    </div>
    <div class="form-group">
        <label for="">
            Category
        </label>
        <select name="category_id" id="" class="form-control">
            <?php
            $sql_cat = "SELECT * FROM categories";
            $cat_query = mysqli_query($connection, $sql_cat);
            confirmQuery($cat_query);
            foreach ($cat_query as $category) {
                echo "<option value=". $category['id'].">".$category['title']."</option>";
            }
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="">
            Author
        </label>
        <input type="text" name="author" class="form-control" value="<?= $content?>">
    </div>
    <div class="form-group">
        <label for="">
            date
        </label>
        <input type="text" name="date" class="form-control">
    </div>
    <div class="form-group">
        <label for="">
            Tags
        </label>
        <input type="text" name="tags" class="form-control">
    </div>
    <div class="form-group">
        <img src="../images/<?= $img_name?>" alt="" width="100">
        <label for="">
            File
        </label>
        <input type="file" name="image" class="form-control">
    </div>
    <div class="form-group">
        <label for="">
            Status
        </label>
        <input type="text" name="status" class="form-control">
    </div>
    <div class="form-group">
        <label for="">
            Content
        </label>
        <textarea name="content" class="form-control"> </textarea>
    </div>
    <input type="submit" class="btn btn-primary" name="update_post" value="Отредактировть пост">
</form>
