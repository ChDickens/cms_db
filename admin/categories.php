<?php include_once "../includes/db.php";?>
<?php include_once "../function.php";?>
<?php include_once "includes/admin_header.php";?>



<div id="wrapper">

    <?php include_once "includes/admin_navigation.php";?>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Категории
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <?php

                        insertCategory();

                    ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="category">Категории</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="insert" class="btn btn-primary" value="Добавить категорию">
                        </div>
                    </form>
                    <hr>
                    <?php
                    // Получаем id категории
                    if (isset($_GET['edit'])) {
                        $the_cat_id = $_GET['edit'];

                        // Выполняем запрос, чтобы получить эту категорию
                        $the_sql_cat = "SELECT * FROM categories WHERE id = $the_cat_id";
                        // Выполняем запрос к БД
                        $cat_query = mysqli_query($connection, $the_sql_cat);

                        // Прогоняем результаты через foreach и записываем название категории
                        foreach ($cat_query as $cat_title) {
                            $cat_title =  $cat_title['title'];
                        }


                        // Если нажата кнопка, выполняем обновление категории
                        if (isset($_POST['update'])) {
                            $title = $_POST['title'];

                            // Выполняем запрос, чтобы обновить эту категорию
                            $sql_update_category = "UPDATE categories SET title = '$title' WHERE id = $the_cat_id";
                            // Выполняем запрос к БД
                            $result_updating_cat = mysqli_query($connection, $sql_update_category);

                            confirmQuery($result_updating_cat);
                        }
                    }


                    ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="category">Категории</label>
                            <input type="text" name="title" class="form-control" value="<?= $cat_title?>">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="update" class="btn btn-primary" value="Обновлять категорию">
                        </div>
                    </form>
                </div>
                <div class="col-sm-6">
                    <table class="table table-bordered table-striped">
                        <tbody>
                        <tr>
                            <td>id</td>
                            <td>title</td>
                            <td>Редактирование</td>
                            <td>Удаление</td>
                        </tr>

                    <?php

                        deleteCategory();

                        allCategories();


                    ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>
