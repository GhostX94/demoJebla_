<!doctype html>
<html lang="en-us">

<!-- Mirrored from zawiastudio.com/dashboard/demo/account-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Nov 2017 15:23:42 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Account Details | Dashboard UI Kit</title>
        <meta name="description" content="Dashboard UI Kit">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,700" rel="stylesheet">

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

        <header class="c-navbar u-mb-medium">
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
                        <a class="c-nav__link" href="browse">Browse</a>
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


            <div class="c-field has-icon-right c-navbar__search u-hidden-down@tablet u-ml-auto u-mr-small">
                <span class="c-field__icon">
                    <i class="fa fa-search"></i>
                </span>

                <label class="u-hidden-visually" for="navbar-search">Seach</label>
                <input class="c-input" id="navbar-search" type="text" placeholder="Search">
            </div>


            <div class="c-dropdown dropdown">
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

        <div class="container">
            <div class="row">
                <div class="col-xl-3 u-hidden-down@wide">
                    <aside class="c-menu u-ml-medium">
                        <h4 class="c-menu__title">Menu</h4>
                        <ul class="u-mb-medium">
                            <li class="c-menu__item">
                                <a class="c-menu__link is-active" href="#">
                                    <i class="fa fa-trophy u-mr-xsmall"></i>Featured Events
                                </a>
                            </li>
                            <li class="c-menu__item">
                                <a class="c-menu__link" href="#">
                                    <i class="c-menu__icon fa fa-heart-o"></i>Recommended
                                </a>
                            </li>
                            <li class="c-menu__item">
                                <a class="c-menu__link" href="#">
                                    <i class="c-menu__icon fa fa-bullhorn"></i>Live Streams
                                </a>
                            </li>
                            <li class="c-menu__item">
                                <a class="c-menu__link" href="#">
                                    <i class="c-menu__icon fa fa-newspaper-o"></i>Press
                                </a>
                            </li>
                            <li class="c-menu__item">
                                <a class="c-menu__link" href="#">
                                    <i class="c-menu__icon fa fa-diamond"></i>Favourites
                                </a>
                            </li>
                            <li class="c-menu__item">
                                <a class="c-menu__link" href="#">
                                    <i class="c-menu__icon fa fa-map-o"></i>Places
                                </a>
                            </li>
                        </ul>

                        <h4 class="c-menu__title">Your Events</h4>
                        <ul>
                            <li class="c-menu__item">
                                <a class="c-menu__link" href="#">
                                    <img src="img/sidebar-icon1.png" class="u-mr-xsmall" style="width: 14px;" alt="Icon 1">Classes
                                </a>
                            </li>
                            <li class="c-menu__item">
                                <a class="c-menu__link" href="#">
                                    <img src="img/sidebar-icon2.png" class="u-mr-xsmall" style="width: 14px;" alt="Icon 2">People
                                </a>
                            </li>
                            <li class="c-menu__item">
                                <a class="c-menu__link" href="#">
                                    <img src="img/sidebar-icon3.png" class="u-mr-xsmall" style="width: 14px;" alt="Icon 3">Networking
                                </a>
                            </li>
                            <li class="c-menu__item">
                                <a class="c-menu__link" href="#">
                                    <img src="img/sidebar-icon4.png" class="u-mr-xsmall" style="width: 14px;" alt="Icon 4">Hi-Skill
                                </a>
                            </li>
                            <li class="c-menu__item">
                                <a class="c-menu__link" href="#">
                                    <img src="img/sidebar-icon5.png" class="u-mr-xsmall" style="width: 14px;" alt="Add icon">Going to Buy
                                </a>
                            </li>
                            <li class="c-menu__item">
                                <a class="c-menu__link" href="#">
                                    <img src="img/sidebar-icon6.png" class="u-mr-xsmall" style="width: 14px;" alt="Add icon">Add New List
                                </a>
                            </li>
                        </ul>
                    </aside>
                </div>

                <div class="col-md-7 col-xl-6">
                    <main>
                        <h2 class="u-h3 u-mb-small">Account Settings</h2>

                        <div class="c-card u-p-medium u-text-small u-mb-small">
                            <h6 class="u-text-bold">General Info</h6>

                            <dl class="u-flex u-pv-small u-border-bottom">
                                <dt class="u-width-25">Name</dt>
                                <dd>Edgar Kennedy</dd>
                            </dl>

                            <dl class="u-flex u-pv-small u-border-bottom">
                                <dt class="u-width-25">Email</dt>
                                <dd>edgar.kennedy@dashboard.com</dd>
                            </dl>

                            <dl class="u-flex u-pv-small u-border-bottom">
                                <dt class="u-width-25">Avatar
                                    <small class="u-block u-text-mute">JPG, max. 500KB</small>
                                </dt>

                                <dd>
                                    <a class="c-avatar c-avatar--small" href="#">
                                        <img class="c-avatar__img" src="http://i.pravatar.cc/72?img=32" alt="Edgar's Face">
                                    </a>
                                </dd>


                            </dl>

                            <dl class="u-flex u-pt-small">
                                <dt class="u-width-25">Country</dt>
                                <dd>London, United Kingdom</dd>
                            </dl>
                        </div>

                        <div class="c-card u-p-medium u-mb-small u-text-small">
                            <h6 class="u-text-bold">Jobs</h6>

                            <dl class="u-flex u-pv-small u-border-bottom">
                                <dt class="u-width-25">Available</dt>
                                <dd class="u-width-75">
                                    <div class="c-toggle">
                                        <div class="c-toggle__btn is-active">
                                            <label class="c-toggle__label" for="toggle1">
                                                <input class="c-toggle__input" id="toggle1" name="toggles" type="radio" checked>Yes
                                            </label>
                                        </div>

                                        <div class="c-toggle__btn">
                                            <label class="c-toggle__label" for="toggle2">
                                                <input class="c-toggle__input" id="toggle2" name="toggles" type="radio">No
                                            </label>
                                        </div>
                                    </div><!-- // .c-toggle -->
                                </dd>
                            </dl>

                            <dl class="u-flex u-pt-small">
                                <dt class="u-width-25">What are you looking for?</dt>
                                <dd class="u-width-75">I am currently looking for a good job with a great company! To help you accelerate your career, we'd like to give you a free trial of Premium Job Seeker.</dd>
                            </dl>
                        </div>

                        <!-- DEV NOTE:

                            Remove `c-settings` and replace it with flex utilities
                         -->
                        <div class="c-card u-p-medium u-mb-large">
                            <h6 class="u-text-bold">Jobs</h6>

                            <div class="u-flex u-pv-small u-justify-between u-border-bottom">
                                <p>Go to next request after reply</p>
                                <div class="c-switch is-active">
                                    <input class="c-switch__input" id="switch1" type="checkbox">
                                </div>
                            </div>

                            <div class="u-flex u-pv-small u-justify-between u-border-bottom">
                                <p>Allow keyboard arrow for switching between requests</p>
                                <div class="c-switch is-active">
                                    <input class="c-switch__input" type="checkbox">
                                </div>
                            </div>

                            <div class="u-flex u-pt-small u-justify-between">
                                <p>Show input as first method of answer</p>
                                <div class="c-switch is-active">
                                    <input class="c-switch__input" type="checkbox">
                                </div>
                            </div>

                        </div>
                    </main>
                </div>

                <div class="col-md-5 col-xl-3 u-mb-medium u-hidden-down@tablet">
                    <div class="c-profile-card">
                        <div class="c-profile-card__cover">
                            <img src="https://picsum.photos/460/230?image=440" alt="Adam's profile cover">
                        </div>

                        <div class="c-profile-card__user">
                            <div class="c-profile-card__avatar">
                                <img src="http://i.pravatar.cc/150?img=32" alt="Adam's image">
                            </div>

                            <h4 class="c-profile-card__name">Alejandro Garza
                                <a class="c-profile-card__username" href="#">@Alejandro</a>
                            </h4>
                        </div>

                        <ul class="c-profile-card__social">
                            <li><a class="c-profile-card__social-icon u-bg-pinterest" href="#">
                                <i class="fa fa-pinterest"></i>
                            </a></li>

                            <li><a class="c-profile-card__social-icon u-bg-twitter" href="#">
                                    <i class="fa fa-twitter"></i>
                            </a></li>

                            <li><a class="c-profile-card__social-icon u-bg-behance" href="#">
                                    <i class="fa fa-behance"></i>
                            </a></li>

                            <li><a class="c-profile-card__social-icon u-bg-dribbble" href="#">
                                <i class="fa fa-dribbble"></i>
                            </a></li>

                            <li><a class="c-profile-card__social-icon u-bg-linkedin" href="#">
                                <i class="fa fa-linkedin"></i>
                            </a></li>
                        </ul>

                        <ul class="c-profile-card__meta">
                            <li class="c-profile-card__meta-item">
                                <i class="fa fa-map-marker"></i>London, United Kingdom
                            </li>

                            <li class="c-profile-card__meta-item">
                                <i class="fa fa-bullhorn"></i>UX Designer
                            </li>

                            <li class="c-profile-card__meta-item">
                                <i class="fa fa-inbox"></i>32 Offers
                            </li>
                        </ul>
                    </div><!--// .c-profile -->

                    <!-- FAQ -->
                    <h4 class="u-h6 u-text-bold u-mb-xsmall">FAQ</h4>

                    <!-- DEVELOPER NOTE
                        Modify this component to `c-list`
                    -->
                    <ul>
                        <li class="u-mb-xsmall">
                            <a class="u-text-dark u-text-small" href="#">How can I connect my bank account?</a>
                        </li>

                        <li class="u-mb-xsmall">
                            <a class="u-text-dark u-text-small" href="#">Why Dashboard doesn’t show any data?</a>
                        </li>
                        <li class="u-mb-xsmall">
                            <a class="u-text-dark u-text-small" href="#">If I change my avatar in one version will it appears in next version?</a>
                        </li>
                    </ul>
                    <a class="u-text-small u-color-blue" href="#">Visit FAQ Page</a>

                </div>
            </div>
        </div>

        <script src="js/main.min.js"></script>

        <!-- Google Analytics-->
        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-88739867-2','auto');ga('send','pageview')
        </script>
        <script src="../../../www.google-analytics.com/analytics.js" async defer></script>
    </body>

<!-- Mirrored from zawiastudio.com/dashboard/demo/account-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Nov 2017 15:23:42 GMT -->
</html>
