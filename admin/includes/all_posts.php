<table class="table table-hover table-bordered table-striped">
    <tr>
        <th>id</th>
        <th>category_id</th>
        <th>title</th>
        <th>author</th>
        <th>date</th>
        <th>tags</th>
        <th>image</th>
        <th>content</th>
        <th>status</th>
<!--        <th>comments_count</th>-->
<!--        <th>views_count</th>-->
        <th>Редактировать</th>
        <th>Удалить</th>
    </tr>

<?php

$sql_all_posts = "SELECT * FROM posts";
$all_posts_result = mysqli_query($connection, $sql_all_posts);
confirmQuery($all_posts_result);

foreach ($all_posts_result as $post) {
    ?>

    <tr>
        <td><?= $post['id'];?></td>
        <td><?= $post['category_id'];?></td>
        <td><?= $post['title'];?></td>
        <td><?= $post['author'];?></td>
        <td><?= $post['date'];?></td>
        <td><?= $post['tags'];?></td>
        <td><img src="../images/<?= $post['image'];?>" alt="" width="100"></td>
        <td><?= $post['content'];?></td>
        <td><?= $post['status'];?></td>
<!--        <td>--><?//= $post['comments_count'];?><!--</td>-->
<!--        <td>--><?//= $post['views_count'];?><!--</td>-->
        <td><a href="posts.php?source=edit_post&post_id=<?= $post['id'];?>" class="btn btn-success">Редактировать</a></td>
        <td><a href="" class="btn btn-danger">Удалить</a></td>
    </tr>

    <?php
        }
    ?>
</table>
