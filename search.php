<?php include_once "includes/db.php";?>
<?php include_once "includes/header.php";?>

<!-- Navigation -->
<?php include_once "includes/navigation.php";?>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <?php

            if (isset($_POST['search'])) {
                $search = $_POST['search'];

                $sql_search = "SELECT * FROM posts WHERE tags LIKE '%$search%'";
                $search_query = mysqli_query($connection, $sql_search);
                $count = mysqli_num_rows($search_query);
                if ($count == 0) {
                    echo "<h1>По вашему запросу ничего не найдено</h1>";
                } else {
                    echo "Найдено " . $count . " постов";
                foreach ($search_query as $post) {

                    ?>
                    <!-- First Blog Post -->
                    <h2>
                        <a href="#"><?= $post['title']?></a>
                    </h2>
                    <p class="lead">
                        by <a href="index.php"><?= $post['author']?></a>
                    </p>
                    <p><span class="glyphicon glyphicon-time"></span> Posted on <?= $post['date']?></p>
                    <hr>
                    <img class="img-responsive" src="images/<?= $post['image']?>" alt="">
                    <hr>
                    <p><?= $post['content']?></p>
                    <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                    <hr>
                <?php }
                }
            }

            ?>




            <!-- Pager -->
            <ul class="pager">
                <li class="previous">
                    <a href="#">&larr; Older</a>
                </li>
                <li class="next">
                    <a href="#">Newer &rarr;</a>
                </li>
            </ul>

        </div>

        <!-- Blog Sidebar Widgets Column -->
        <div class="col-md-4">

            <?php include_once "includes/sidebar.php";?>

        </div>

    </div>
    <!-- /.row -->

    <hr>

    <?php include_once "includes/footer.php";?>
