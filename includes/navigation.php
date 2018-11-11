<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Start Bootstrap</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <?php

                $sql_cat = "SELECT * FROM categories LIMIT 3";
                $cat_query = mysqli_query($connection, $sql_cat);

                foreach ($cat_query as $item) { 
                    $cat_id = $item['id'];
                    ?>
                    
                    <li>
                        <a href="category.php?category=<?= $cat_id?>">
                            <?= $item['title'] ?>
                        </a>
                    </li>


                <?php
                }

                ?>
                <li>
                    <a href="/admin">Admin</a>
                </li>
                <li>
                    <a href="registration.php">Registration</a>
                </li>

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>