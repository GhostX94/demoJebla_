<!doctype html>
<html lang="en-us">

<!-- Mirrored from zawiastudio.com/dashboard/demo/projects-board.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Nov 2017 15:23:38 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Projects Board | Dashboard UI Kit</title>
        <meta name="description" content="Dashboard UI Kit">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600" rel="stylesheet">

        <!-- Favicon -->
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

        <!-- Stylesheet -->
        <link rel="stylesheet" href="css/main.min.css">
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
        <header class="c-navbar">
            <a class="c-navbar__brand" href="#!">
                <img src="img/logo.png" alt="Dashboard's Logo">
            </a>

           <!-- Navigation items that will be collapes and toggle in small viewports -->
            <nav class="c-nav collapse" id="main-nav">
                <ul class="c-nav__list">
                    <li class="c-nav__item">
                        <a class="c-nav__link" href="#!">Events</a>
                    </li>
                    <li class="c-nav__item">
                        <a class="c-nav__link" href="#!">Browse</a>
                    </li>
                    <li class="c-nav__item">
                        <a class="c-nav__link" href="#!">Your Ticket</a>
                    </li>
                    <li class="c-nav__item">
                        <div class="c-field c-field--inline has-icon-right u-hidden-up@tablet">
                            <span class="c-field__icon">
                                <i class="fa fa-search"></i>
                            </span>

                            <label class="u-hidden-visually" for="navbar-search-small">Seach</label>
                            <input class="c-input" id="navbar-search-small" type="text" placeholder="Search">
                        </div>
                    </li>
                </ul>
            </nav>
            <!-- // Navigation items  -->

            <div class="c-field has-icon-right c-navbar__search u-ml-auto u-hidden-down@tablet">
                <span class="c-field__icon">
                    <i class="fa fa-search"></i>
                </span>

                <label class="u-hidden-visually" for="navbar-search">Seach</label>
                <input class="c-input" id="navbar-search" type="text" placeholder="Search">
            </div>

            <div class="c-dropdown u-ml-medium dropdown">
                <a  class="c-avatar c-avatar--xsmall has-dropdown dropdown-toggle" href="#" id="dropdwonMenuAvatar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="c-avatar__img" src="http://i.pravatar.cc/72?img=32" alt="User's Profile Picture">
                </a>

                <div class="c-dropdown__menu dropdown-menu dropdown-menu-right" aria-labelledby="dropdwonMenuAvatar">
                    <a class="c-dropdown__item dropdown-item" href="#">Edit Profile</a>
                    <a class="c-dropdown__item dropdown-item" href="#">View Activity</a>
                    <a class="c-dropdown__item dropdown-item" href="#">Manage Roles</a>
                </div>
            </div>

            <button class="c-nav-toggle" type="button" data-toggle="collapse" data-target="#main-nav">
                <span class="c-nav-toggle__bar"></span>
                <span class="c-nav-toggle__bar"></span>
                <span class="c-nav-toggle__bar"></span>
            </button><!-- // .c-nav-toggle -->
        </header>

        <div class="c-toolbar u-mb-medium">

            <div class="c-btn-group u-mr-medium u-hidden-down@tablet">
                <a class="c-btn c-btn--secondary" href="#!">
                    <i class="fa fa-check-square-o u-opacity-medium"></i>
                </a>
                <a class="c-btn c-btn--secondary" href="#!">
                    <i class="fa fa-trash-o u-opacity-medium"></i>
                </a>
            </div>

            <a class="c-toolbar__icon has-divider u-hidden-down@mobile" href="#"><i class="fa fa-th-large"></i></a>
            <a class="c-toolbar__icon has-divider u-hidden-down@mobile" href="#"><i class="fa fa-navicon"></i></a>

            <input type="range" class="c-range c-range--inline u-mr-auto u-hidden-down@mobile">

            <nav class="c-toolbar__nav u-mr-auto">
                <a class="c-toolbar__nav-item is-active" href="#tab1">All Projects</a>
                <a class="c-toolbar__nav-item" href="#tab2">Synced Projects</a>
            </nav>

            <a class="c-btn c-btn--success u-ml-auto u-hidden-down@mobile" href="#">
                <i class="fa fa-plus u-mr-xsmall u-opacity-medium"></i>New Project
            </a>
        </div>

        <div class="container u-mb-medium">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="c-project">
                        <div class="c-project__img">
                            <img src="https://picsum.photos/600/400?image=301" alt="Waves">
                        </div>

                        <h3 class="c-project__title">Beach Stories
                            <span class="c-project__status">Last updated: <span class="u-text-bold">Yesterday 3:41 AM</span></span>
                        </h3>

                        <div class="c-project__team">

                            <a class="c-project__profile c-tooltip c-tooltip--top" aria-label="Joseph Mullins" href="#">
                                <img src="http://i.pravatar.cc/150?img=3" alt="Adam's Face">
                            </a>

                            <a class="c-project__profile c-tooltip c-tooltip--top" aria-label="Stella Munoz" href="#">
                                <img src="http://i.pravatar.cc/150?img=6" alt="Adam's Face">
                            </a>

                            <a class="c-project__profile c-tooltip c-tooltip--top" aria-label="Una Higgins" href="#">
                                <img src="http://i.pravatar.cc/150?img=10" alt="Adam's Face">
                            </a>

                            <a class="c-project__profile c-tooltip c-tooltip--top" aria-label="Dylan Shelton" href="#">
                                <img src="http://i.pravatar.cc/150?img=11" alt="Adam's Face">
                            </a>

                            <a class="c-project__profile c-project__profile--btn c-tooltip c-tooltip--top" aria-label="Add a new member" href="#">
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>

                    </div><!-- // .c-project -->
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="c-project">
                        <div class="c-project__img">
                            <img src="https://picsum.photos/600/400?image=302" alt="Waves">
                        </div>

                        <h3 class="c-project__title">Mountains
                            <span class="c-project__status">Last updated: <span class="u-text-bold">Monday 1:41 AM</span></span>
                        </h3>

                        <div class="c-project__team">

                            <a class="c-project__profile c-tooltip c-tooltip--top" aria-label="Joseph Mullins" href="#">
                                <img src="http://i.pravatar.cc/150?img=3" alt="Adam's Face">
                            </a>

                            <a class="c-project__profile c-tooltip c-tooltip--top" aria-label="Stella Munoz" href="#">
                                <img src="http://i.pravatar.cc/150?img=6" alt="Adam's Face">
                            </a>

                            <a class="c-project__profile c-tooltip c-tooltip--top" aria-label="Una Higgins" href="#">
                                <img src="http://i.pravatar.cc/150?img=10" alt="Adam's Face">
                            </a>

                            <a class="c-project__profile c-tooltip c-tooltip--top" aria-label="Dylan Shelton" href="#">
                                <img src="http://i.pravatar.cc/150?img=11" alt="Adam's Face">
                            </a>

                            <a class="c-project__profile c-project__profile--btn c-tooltip c-tooltip--top" aria-label="Add a new member" href="#">
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>

                    </div><!-- // .c-project -->
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="c-project">
                        <div class="c-project__img">
                            <img src="https://picsum.photos/600/400?image=310" alt="Waves">
                        </div>

                        <h3 class="c-project__title">Between Clouds
                            <span class="c-project__status">Last updated: <span class="u-text-bold">Monday 2:12 AM</span></span>
                        </h3>

                        <div class="c-project__team">

                            <a class="c-project__profile c-tooltip c-tooltip--top" aria-label="Joseph Mullins" href="#">
                                <img src="http://i.pravatar.cc/150?img=3" alt="Adam's Face">
                            </a>

                            <a class="c-project__profile c-tooltip c-tooltip--top" aria-label="Stella Munoz" href="#">
                                <img src="http://i.pravatar.cc/150?img=6" alt="Adam's Face">
                            </a>

                            <a class="c-project__profile c-tooltip c-tooltip--top" aria-label="Una Higgins" href="#">
                                <img src="http://i.pravatar.cc/150?img=10" alt="Adam's Face">
                            </a>

                            <a class="c-project__profile c-tooltip c-tooltip--top" aria-label="Dylan Shelton" href="#">
                                <img src="http://i.pravatar.cc/150?img=11" alt="Adam's Face">
                            </a>

                            <a class="c-project__profile c-project__profile--btn c-tooltip c-tooltip--top" aria-label="Add a new member" href="#">
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>

                    </div><!-- // .c-project -->
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="c-project">
                        <div class="c-project__img">
                            <img src="https://picsum.photos/600/400?image=304" alt="Waves">
                        </div>

                        <h3 class="c-project__title">The underground
                            <span class="c-project__status">Last updated: <span class="u-text-bold">Sunday 3:41 PM</span></span>
                        </h3>

                        <div class="c-project__team">

                            <a class="c-project__profile c-tooltip c-tooltip--top" aria-label="Joseph Mullins" href="#">
                                <img src="http://i.pravatar.cc/150?img=3" alt="Adam's Face">
                            </a>

                            <a class="c-project__profile c-tooltip c-tooltip--top" aria-label="Stella Munoz" href="#">
                                <img src="http://i.pravatar.cc/150?img=6" alt="Adam's Face">
                            </a>

                            <a class="c-project__profile c-tooltip c-tooltip--top" aria-label="Una Higgins" href="#">
                                <img src="http://i.pravatar.cc/150?img=10" alt="Adam's Face">
                            </a>

                            <a class="c-project__profile c-tooltip c-tooltip--top" aria-label="Dylan Shelton" href="#">
                                <img src="http://i.pravatar.cc/150?img=11" alt="Adam's Face">
                            </a>

                            <a class="c-project__profile c-project__profile--btn c-tooltip c-tooltip--top" aria-label="Add a new member" href="#">
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>

                    </div><!-- // .c-project -->
                </div>
            </div>

            <div class="row u-justify-center">
                <div class="col-sm-6 col-lg-3">
                    <div class="c-project">
                        <div class="c-project__img">
                            <img src="https://picsum.photos/600/400?image=305" alt="Waves">
                        </div>

                        <h3 class="c-project__title">Sunrise
                            <span class="c-project__status">Last updated: <span class="u-text-bold">Sunday 1:19 PM</span></span>
                        </h3>

                        <div class="c-project__team">

                            <a class="c-project__profile c-tooltip c-tooltip--top" aria-label="Joseph Mullins" href="#">
                                <img src="http://i.pravatar.cc/150?img=3" alt="Adam's Face">
                            </a>

                            <a class="c-project__profile c-tooltip c-tooltip--top" aria-label="Stella Munoz" href="#">
                                <img src="http://i.pravatar.cc/150?img=6" alt="Adam's Face">
                            </a>

                            <a class="c-project__profile c-tooltip c-tooltip--top" aria-label="Una Higgins" href="#">
                                <img src="http://i.pravatar.cc/150?img=10" alt="Adam's Face">
                            </a>

                            <a class="c-project__profile c-tooltip c-tooltip--top" aria-label="Dylan Shelton" href="#">
                                <img src="http://i.pravatar.cc/150?img=11" alt="Adam's Face">
                            </a>

                            <a class="c-project__profile c-project__profile--btn c-tooltip c-tooltip--top" aria-label="Add a new member" href="#">
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>
                    </div><!-- // .c-project -->
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="c-project">
                        <div class="c-project__img">
                            <img src="https://picsum.photos/600/400?image=306" alt="Waves">
                        </div>

                        <h3 class="c-project__title">Big Ocean
                            <span class="c-project__status">Last updated: <span class="u-text-bold">Saturday 9:54 PM</span></span>
                        </h3>

                        <div class="c-project__team">

                            <a class="c-project__profile c-tooltip c-tooltip--top" aria-label="Joseph Mullins" href="#">
                                <img src="http://i.pravatar.cc/150?img=3" alt="Adam's Face">
                            </a>

                            <a class="c-project__profile c-tooltip c-tooltip--top" aria-label="Stella Munoz" href="#">
                                <img src="http://i.pravatar.cc/150?img=6" alt="Adam's Face">
                            </a>

                            <a class="c-project__profile c-tooltip c-tooltip--top" aria-label="Una Higgins" href="#">
                                <img src="http://i.pravatar.cc/150?img=10" alt="Adam's Face">
                            </a>

                            <a class="c-project__profile c-tooltip c-tooltip--top" aria-label="Dylan Shelton" href="#">
                                <img src="http://i.pravatar.cc/150?img=11" alt="Adam's Face">
                            </a>

                            <a class="c-project__profile c-project__profile--btn c-tooltip c-tooltip--top" aria-label="Add a new member" href="#">
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>

                    </div><!-- // .c-project -->
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="c-project">
                        <div class="c-project__img">
                            <img src="https://picsum.photos/600/400?image=307" alt="Waves">
                        </div>

                        <h3 class="c-project__title">Sunset
                            <span class="c-project__status">Last updated: <span class="u-text-bold">Saturday 5:24 PM</span></span>
                        </h3>

                        <div class="c-project__team">

                            <a class="c-project__profile c-tooltip c-tooltip--top" aria-label="Joseph Mullins" href="#">
                                <img src="http://i.pravatar.cc/150?img=3" alt="Adam's Face">
                            </a>

                            <a class="c-project__profile c-tooltip c-tooltip--top" aria-label="Stella Munoz" href="#">
                                <img src="http://i.pravatar.cc/150?img=6" alt="Adam's Face">
                            </a>

                            <a class="c-project__profile c-tooltip c-tooltip--top" aria-label="Una Higgins" href="#">
                                <img src="http://i.pravatar.cc/150?img=10" alt="Adam's Face">
                            </a>

                            <a class="c-project__profile c-tooltip c-tooltip--top" aria-label="Dylan Shelton" href="#">
                                <img src="http://i.pravatar.cc/150?img=11" alt="Adam's Face">
                            </a>

                            <a class="c-project__profile c-project__profile--btn c-tooltip c-tooltip--top" aria-label="Add a new member" href="#">
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>

                    </div><!-- // .c-project -->
                </div>
            </div><!-- // .row -->
        </div><!-- // .container -->

        <script src="js/main.min.js"></script>

        <!-- Google Analytics-->
        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-88739867-2','auto');ga('send','pageview')
        </script>
        <script src="../../../www.google-analytics.com/analytics.js" async defer></script>
    </body>

<!-- Mirrored from zawiastudio.com/dashboard/demo/projects-board.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Nov 2017 15:23:38 GMT -->
</html>
