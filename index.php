<?php include_once "includes/db.php";?>
<?php include_once "includes/header.php";?>

    <!-- Navigation -->
    <?php include_once "includes/navigation.php";?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>
                <?php

                $sql_posts = "SELECT * FROM posts";
                $posts_query = mysqli_query($connection, $sql_posts);

                foreach ($posts_query as $post) {

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
                <?php } ?>


<!--                <!-- Second Blog Post -->-->
<!--                <h2>-->
<!--                    <a href="#">Blog Post Title</a>-->
<!--                </h2>-->
<!--                <p class="lead">-->
<!--                    by <a href="index.php">Start Bootstrap</a>-->
<!--                </p>-->
<!--                <p><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:45 PM</p>-->
<!--                <hr>-->
<!--                <img class="img-responsive" src="http://placehold.it/900x300" alt="">-->
<!--                <hr>-->
<!--                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, quasi, fugiat, asperiores harum voluptatum tenetur a possimus nesciunt quod accusamus saepe tempora ipsam distinctio minima dolorum perferendis labore impedit voluptates!</p>-->
<!--                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>-->
<!---->
<!--                <hr>-->
<!---->
<!--                <!-- Third Blog Post -->-->
<!--                <h2>-->
<!--                    <a href="#">Blog Post Title</a>-->
<!--                </h2>-->
<!--                <p class="lead">-->
<!--                    by <a href="index.php">Start Bootstrap</a>-->
<!--                </p>-->
<!--                <p><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:45 PM</p>-->
<!--                <hr>-->
<!--                <img class="img-responsive" src="http://placehold.it/900x300" alt="">-->
<!--                <hr>-->
<!--                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, voluptates, voluptas dolore ipsam cumque quam veniam accusantium laudantium adipisci architecto itaque dicta aperiam maiores provident id incidunt autem. Magni, ratione.</p>-->
<!--                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>-->
<!---->
<!--                <hr>-->

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
