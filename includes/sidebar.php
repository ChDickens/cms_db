<!-- Blog Search Well -->
<div class="well">
    <h4>Blog Search</h4>
    <div class="input-group">

        <form action="search.php" method="post">
            <input type="text" class="form-control" name="search">
            <span class="input-group-btn">
            <button type="submit" class="btn btn-default" name="submit">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
        </form>
    </div>
    <!-- /.input-group -->
</div>
<div class="well">
    <h4>Login</h4>
    <div class="input-group">
        <?php

        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
        }
        ?>
        <form action="login.php" method="post">
            <div class="form-group">
                <label for="">Username</label>
                <input type="text" class="form-control" name="username">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <input type="submit" class="btn btn-default" name="login">
        </form>
    </div>
    <!-- /.input-group -->
</div>

<!-- Blog Categories Well -->
<div class="well">
    <h4>Blog Categories</h4>
    <div class="row">
        <div class="col-lg-6">
            <ul class="list-unstyled">
                <li><a href="#">Category Name</a>
                </li>
                <li><a href="#">Category Name</a>
                </li>
                <li><a href="#">Category Name</a>
                </li>
                <li><a href="#">Category Name</a>
                </li>
            </ul>
        </div>
        <!-- /.col-lg-6 -->
        <div class="col-lg-6">
            <ul class="list-unstyled">
                <li><a href="#">Category Name</a>
                </li>
                <li><a href="#">Category Name</a>
                </li>
                <li><a href="#">Category Name</a>
                </li>
                <li><a href="#">Category Name</a>
                </li>
            </ul>
        </div>
        <!-- /.col-lg-6 -->
    </div>
    <!-- /.row -->
</div>

<!-- Side Widget Well -->
<div class="well">
    <h4>Side Widget Well</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
</div>