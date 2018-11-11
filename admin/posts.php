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
                        Посты
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <?php

                    if (isset($_GET['source'])) {

                        $source = $_GET['source'];

                        switch ($source) {
                            case 'add_post';
                                include "includes/add_post.php";
                                break;
                            case 'edit_post';
                                include "includes/edit_post.php";
                                break;

                            default:
                                include "includes/all_posts.php";
                                break;

                        }
                    }

                    ?>
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
