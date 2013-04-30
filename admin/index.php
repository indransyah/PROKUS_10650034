<?php ob_start(); ?>
<?php require_once '../config/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Le styles -->
        <link href="../assets/css/bootstrap-cerulean.css" rel="stylesheet">
        <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">
        <link href="../assets/css/style.css" rel="stylesheet">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="../assets/js/html5shiv.js"></script>
        <![endif]-->

        <!-- Fav and touch icons -->
        <!--<link rel="shortcut icon" href="../assets/ico/favicon.png">-->
    </head>

    <body>
        <?php require_once './header.php'; ?>
        <div class="container-fluid" style="margin-top: 30px;">
            <div class="row-fluid">
                <?php require_once './sidebar.php'; ?>
                <div class="span9">
                    <h3 style="margin-top: 0px;">Dashboard</h3>
                    <ul class="breadcrumb">
                        <li><a href="<?php echo $base_url . 'admin/index.php?page=dashboard'; ?>">Home</a> <span class="divider">/</span></li>
                        <li><a href="<?php echo $base_url . 'admin/index.php?page=' . $_GET['page']; ?>"><?php echo ucwords($_GET['page']); ?></a></li>
                    </ul>
                    <div class="content well">
                        <?php
                        if (isset($_GET['page'])) {
                            $page = $_GET['page'] . ".php";
                            if (file_exists($page)) {
                                require_once $page;
                            } else {
                                header('location:404.php');
                            }
                        } else {
                            header('location:index.php?page=dashboard');
                        }
                        /* if (!empty($_GET['page'])) {
                          $page = $_GET['page'] . ".php";
                          require_once $page;
                          } else {
                          header('location:404.php');
                          } */
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- /container -->

        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="../assets/js/jquery.js"></script>
        <script src="../assets/js/bootstrap-transition.js"></script>
        <script src="../assets/js/bootstrap-alert.js"></script>
        <script src="../assets/js/bootstrap-modal.js"></script>
        <script src="../assets/js/bootstrap-dropdown.js"></script>
        <script src="../assets/js/bootstrap-scrollspy.js"></script>
        <script src="../assets/js/bootstrap-tab.js"></script>
        <script src="../assets/js/bootstrap-tooltip.js"></script>
        <script src="../assets/js/bootstrap-popover.js"></script>
        <script src="../assets/js/bootstrap-button.js"></script>
        <script src="../assets/js/bootstrap-collapse.js"></script>
        <script src="../assets/js/bootstrap-carousel.js"></script>
        <script src="../assets/js/bootstrap-typeahead.js"></script>

    </body>
</html>
<?php ob_flush(); ?>