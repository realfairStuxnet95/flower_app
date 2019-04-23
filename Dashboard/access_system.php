<?php 
define("APP_NAME", 'Arums Flowers');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title><?php echo APP_NAME; ?> - Login to Account</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

         <link rel="shortcut icon" type="image/x-icon" href="../assets/images/favicon.png">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="wrapper-page">

            <div class="card">
                <div class="card-body">

                    <h3 class="text-center mt-0 m-b-15">
                        <a href="home" class="logo logo-admin">
                            <h4><?php echo APP_NAME; ?></h4>
                        </a>
                    </h3>

                    <div class="p-3">
                        <form id="sign_in" class="form-horizontal m-t-20">

                            <div class="form-group row">
                                <div class="col-12">
                                    <input id="username" class="form-control" type="text" required="" placeholder="Username">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <input id="password" class="form-control" type="password" required="" placeholder="Password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Remember me</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group text-center row m-t-20">
                                <div class="col-12">
                                    <button class="btn btn-danger btn-block waves-effect waves-light" type="submit">Log In</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <img id="preLoader" src="../assets/images/glow.gif" style="display: none;">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div id="divErrors" class="alert alert-danger" style="display: none;">
                                       dsdsdssdsd
                                    </div>
                                </div>
                            </div>
                            <div class="form-group m-t-10 mb-0 row">
                                <div class="col-sm-7 m-t-20">
                                    <a href="pages-recoverpw.html" class="text-muted"><i class="mdi mdi-lock"></i> <small>Forgot your password ?</small></a>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <?php include 'App/Views/Utils/login_script.php' ?>
    </body>
</html>