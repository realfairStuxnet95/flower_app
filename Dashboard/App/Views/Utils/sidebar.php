            <div class="left side-menu">
                <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
                    <i class="ion-close"></i>
                </button>

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="home" class="logo"><i class="mdi mdi-assistant"></i> <?php echo APP_NAME; ?></a>
                        <!-- <a href="index.html" class="logo"><img src="assets/images/logo.png" height="24" alt="logo"></a> -->
                    </div>
                </div>

                <div class="sidebar-inner slimscrollleft">

                    <div id="sidebar-menu">
                        <ul>
                            <li class="menu-title">Main</li>

                            <li>
                                <a href="index.html" class="waves-effect">
                                    <i class="mdi mdi-airplay"></i>
                                    <span> Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="?action=manage_flowers" class="waves-effect">
                                    <i class="fa fa-leaf"></i>
                                    <span> Manage Flowers</span>
                                </a>
                            </li>
                            <li>
                                <a href="?action=manage_reviews" class="waves-effect">
                                    <i class="fa fa-thumbs-o-up"></i>
                                    <span> Manage Reviews <span class="badge badge-pill badge-primary float-right">
                                        <?php echo $admin->reviewsCounter(); ?>
                                    </span></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div> <!-- end sidebarinner -->
            </div>