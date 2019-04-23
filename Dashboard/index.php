<?php 
define("ROOT_URL", $_SERVER['DOCUMENT_ROOT'].'/flower/Dashboard/');
define("LOADER", ROOT_URL.'App/Views/Utils/classes_loader.php');
define("AUTH", ROOT_URL.'App/Views/Utils/auth.php');
define("VIEWS", ROOT_URL.'App/Views/');
define("APP_NAME", 'ArumsFlower');
require AUTH;
require LOADER;
//define session data constants
define("USER_ID", $_SESSION['user_id']);
define("USER_NAME", $_SESSION['user_names']);
define("USER_TYPE", $_SESSION['user_type']);

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>
            <?php 
                echo 'Welcome '.USER_NAME.' || '.APP_NAME;
            ?>
        </title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <?php include VIEWS.'Utils/stylesheet.php'; ?>
        <script type="text/javascript">
            const user_id="<?php echo USER_ID;?>";
        </script>
    </head>


    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <?php include VIEWS.'Utils/sidebar.php'; ?>
            <!-- Left Sidebar End -->

            <!-- Start right Content here -->
            <?php
            include VIEWS.'Modals/add_flower.php';
            include VIEWS.'Modals/add_photos.php';
            ?>
            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <!-- Top Bar Start -->
                    <?php include VIEWS.'Utils/navbar.php' ?>
                    <!-- Top Bar End -->
                    <div class="page-content-wrapper ">

                        <div class="container-fluid">
                            <?php 
                                $validRequest=array("manage_flowers","manage_reviews");
                                if(isset($_GET['action']) && $_GET['action']!=''){
                                    $action=strtolower($_GET['action']);
                                    if(in_array($action, $validRequest)){
                                        include VIEWS.'Admin/'.$action.'.php';
                                    }else{
                                        include VIEWS.'Admin/manage_flowers.php';
                                    }
                                }else{
                                    include VIEWS.'Admin/manage_flowers.php';
                                }
                            ?>                                                 
                        </div><!-- container -->


                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <footer class="footer">
                    © <?php echo date('Y'); ?> All Right reserved to <?php echo APP_NAME; ?>.
                </footer>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->
        <?php include VIEWS.'Utils/script.php' ?>
    </body>
</html>