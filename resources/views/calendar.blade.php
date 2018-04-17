<!doctype html>
<html lang="en-us">

<!-- Mirrored from zawiastudio.com/dashboard/demo/calendar.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Nov 2017 15:23:38 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Calendar | Dashboard UI Kit</title>
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
    <body class="o-page">
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <div class="o-page__sidebar js-page-sidebar">
            <div class="c-sidebar">
                <a class="c-sidebar__brand u-ml-medium" href="#">
                    <img class="c-sidebar__brand-img" src="img/logo.png" alt="Logo"> Dashboard
                </a>

                <h4 class="c-sidebar__title">Homepages</h4>
                <ul class="c-sidebar__list">

                    <li class="c-sidebar__item">
                        <a class="c-sidebar__link" href="home-overview.html">
                            <i class="fa fa-home u-mr-xsmall"></i>Overview
                        </a>
                    </li>

                    <li class="c-sidebar__item">
                        <a class="c-sidebar__link" target="_blank" href="index.html">
                            <i class="fa fa-rocket u-mr-xsmall"></i>Landing
                        </a>
                    </li>

                    <li class="c-sidebar__item">
                        <a class="c-sidebar__link" target="_blank" href="projects.html">
                            <i class="fa fa-table u-mr-xsmall"></i>Projects
                        </a>
                    </li>
                </ul>

                <h4 class="c-sidebar__title">Apps</h4>
                <ul class="c-sidebar__list">
                    <li class="c-sidebar__item">
                        <a class="c-sidebar__link" target="_blank" href="boards.html">
                            <i class="fa fa-hand-paper-o u-mr-xsmall"></i>Boards (CRM)
                        </a>
                    </li>
                    <li class="c-sidebar__item">
                        <a class="c-sidebar__link is-active" href="calendar.html">
                            <i class="fa fa-calendar u-mr-xsmall"></i>Calendar
                        </a>
                    </li>
                    <li class="c-sidebar__item">
                        <a class="c-sidebar__link" target="_blank" href="news-feed.html">
                            <i class="fa fa-newspaper-o u-mr-xsmall"></i>News Feed
                        </a>
                    </li>
                    <li class="c-sidebar__item">
                        <a class="c-sidebar__link" href="messanger.html">
                            <i class="fa fa-comment-o u-mr-xsmall"></i>Messanger
                        </a>
                    </li>
                    <li class="c-sidebar__item">
                        <a class="c-sidebar__link" target="_blank" href="projects-board.html">
                            <i class="fa fa-window-restore u-mr-xsmall"></i>Projects Board
                        </a>
                    </li>
                </ul>

                <h4 class="c-sidebar__title">Pages</h4>
                <ul class="c-sidebar__list">

                    <li class="c-sidebar__item">
                        <a class="c-sidebar__link" href="analytics.html">
                            <i class="fa fa-line-chart u-mr-xsmall"></i>Analytics
                        </a>
                    </li>

                    <li class="c-sidebar__item">
                        <a class="c-sidebar__link" href="invoices.html">
                            <i class="fa fa-files-o u-mr-xsmall"></i>Invoices
                        </a>
                    </li>

                    <li class="c-sidebar__item">
                        <a class="c-sidebar__link" href="invoice.html">
                            <i class="fa fa-file-text-o u-mr-xsmall"></i>Single Invoice <span class="c-badge c-badge--success c-badge--xsmall u-ml-xsmall">New</span>
                        </a>
                    </li>

                    <li class="c-sidebar__item">
                        <a class="c-sidebar__link" target="_blank" href="browse.html">
                            <i class="fa fa-list-alt u-mr-xsmall"></i>Browse
                        </a>
                    </li>

                    <li class="c-sidebar__item">
                        <a class="c-sidebar__link" href="active-projects.html">
                            <i class="fa fa-folder u-mr-xsmall"></i>Active Projects
                        </a>
                    </li>

                    <li class="c-sidebar__item">
                        <a class="c-sidebar__link" target="_blank" href="events.html">
                            <i class="fa fa-clock-o u-mr-xsmall"></i>Events
                        </a>
                    </li>

                    <li class="c-sidebar__item">
                        <a class="c-sidebar__link" target="_blank" href="ios-apps-list.html">
                            <i class="fa fa-apple u-mr-xsmall"></i>iOS Apps List
                        </a>
                    </li>

                    <li class="c-sidebar__item">
                        <a class="c-sidebar__link" href="plans.html">
                            <i class="fa fa-bullhorn u-mr-xsmall"></i>Pricing <span class="c-badge c-badge--success c-badge--xsmall u-ml-xsmall">New</span>
                        </a>
                    </li>

                    <li class="c-sidebar__item has-submenu">
                        <a class="c-sidebar__link" data-toggle="collapse" href="#sidebar-submenu" aria-expanded="false" aria-controls="sidebar-submenu">
                            <i class="fa fa-caret-square-o-down u-mr-xsmall"></i>Sub Menu
                        </a>
                        <ul class="c-sidebar__submenu collapse" id="sidebar-submenu">
                            <li><a class="c-sidebar__link" href="#">Submenu link</a></li>
                            <li><a class="c-sidebar__link" href="#">Submenu link</a></li>
                            <li><a class="c-sidebar__link" href="#">Submenu link</a></li>
                        </ul>
                    </li>
                </ul>

                <h4 class="c-sidebar__title">Account</h4>
                <ul class="c-sidebar__list">
                    <li class="c-sidebar__item">
                        <a class="c-sidebar__link" target="_blank" href="account-details.html">
                            <i class="fa fa-user-circle u-mr-xsmall"></i>Account Details
                        </a>
                    </li>

                    <li class="c-sidebar__item">
                        <a class="c-sidebar__link" href="account-settings.html">
                            <i class="fa fa-cog u-mr-xsmall"></i>Account Settings
                        </a>
                    </li>

                    <li class="c-sidebar__item">
                        <a class="c-sidebar__link" target="_blank" href="register.html">
                            <i class="fa fa-user-plus u-mr-xsmall"></i>Register <span class="c-badge c-badge--success c-badge--xsmall u-ml-xsmall">New</span>
                        </a>
                    </li>

                    <li class="c-sidebar__item">
                        <a class="c-sidebar__link" href="login.html">
                            <i class="fa fa-sign-in u-mr-xsmall"></i>Login
                        </a>
                    </li>
                </ul>

                <h4 class="c-sidebar__title">Dashboard UI Kit</h4>
                <ul class="c-sidebar__list">
                    <li class="c-sidebar__item">
                        <a class="c-sidebar__link" href="ui-overview.html">
                            <i class="fa fa-mouse-pointer u-mr-xsmall"></i>UI Overview <span class="c-badge c-badge--info c-badge--xsmall u-ml-xsmall">Updated</span>
                        </a>
                    </li>

                    <li class="c-sidebar__item">
                        <a class="c-sidebar__link" target="_blank" href="https://zawiastudio.com/dashboard/docs">
                            <i class="fa fa-file-text-o u-mr-xsmall"></i>Documentation
                        </a>
                    </li>

                    <li class="c-sidebar__item">
                        <a class="c-sidebar__link" target="_blank" href="https://zawiastudio.com/dashboard/changelog">
                            <i class="fa fa-tag u-mr-xsmall"></i>Changelog
                        </a>
                    </li>
                </ul>

            </div><!-- // .c-sidebar -->
        </div><!-- // .o-page__sidebar -->

        <main class="o-page__content">
            <header class="c-navbar u-mb-medium">
                <button class="c-sidebar-toggle js-sidebar-toggle">
                    <span class="c-sidebar-toggle__bar"></span>
                    <span class="c-sidebar-toggle__bar"></span>
                    <span class="c-sidebar-toggle__bar"></span>
                </button>

                <h2 class="c-navbar__title u-mr-auto">Calendar</h2>

                <div class="c-dropdown u-hidden-down@mobile">
                    <a class="c-notification dropdown-toggle" href="#" id="dropdownMenuUser" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="c-notification__icon">
                            <i class="fa fa-user-o"></i>
                        </span>
                        <span class="c-notification__number">3</span>
                    </a>

                    <div class="c-dropdown__menu c-dropdown__menu--large dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuUser">
                        <a href="#" class="c-dropdown__item dropdown-item o-media">
                            <span class="o-media__img u-mr-xsmall">
                                <span class="c-avatar c-avatar--xsmall">
                                    <img class="c-avatar__img" src="http://via.placeholder.com/72x72" alt="User's Profile Picture">
                                </span>
                            </span>
                            <div class="o-media__body">
                                <h6 class="u-mb-zero">Someone mentioned you</h6>
                                <p class="u-text-mute">You have recieved a mention on twitter, check it out!</p>
                            </div>
                        </a>
                        <a href="#" class="c-dropdown__item dropdown-item o-media">
                            <span class="o-media__img u-mr-xsmall">
                                <span class="c-avatar c-avatar--xsmall">
                                    <img class="c-avatar__img" src="http://via.placeholder.com/72x72" alt="User's Profile Picture">
                                </span>
                            </span>
                            <div class="o-media__body">
                                <h6 class="u-mb-zero">Recieved a Payment</h6>
                                <p class="u-text-mute">You have recieved a mention on twitter, check it out!</p>
                            </div>
                        </a>
                        <a href="#" class="c-dropdown__item dropdown-item o-media">
                            <span class="o-media__img u-mr-xsmall">
                                <span class="c-avatar c-avatar--xsmall">
                                    <img class="c-avatar__img" src="http://via.placeholder.com/72x72" alt="User's Profile Picture">
                                </span>
                            </span>
                            <div class="o-media__body">
                                <h6 class="u-mb-zero">You got a promotion</h6>
                                <p class="u-text-mute">You have recieved a mention on twitter, check it out!</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="c-dropdown dropdown u-mr-medium u-ml-small u-hidden-down@mobile">
                    <a class="c-notification dropdown-toggle" href="#" id="dropdownMenuAlerts" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="c-notification__icon">
                            <i class="fa fa-bell-o"></i>
                        </span>
                        <span class="c-notification__number">3</span>
                    </a>

                    <div class="c-dropdown__menu c-dropdown__menu--large dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuAlerts">
                        <a href="#" class="c-dropdown__item dropdown-item o-media">
                            <span class="o-media__img u-mr-xsmall">
                                <span class="c-avatar c-avatar--xsmall">
                                    <span class="c-avatar__img u-bg-success u-flex u-justify-center u-align-items-center">
                                        <i class="fa fa-check u-text-large u-color-white"></i>
                                    </span>
                                </span>

                            </span>
                            <div class="o-media__body">
                                <h6 class="u-mb-zero">Completed a task</h6>
                                <p class="u-text-mute">You have recieved a mention on twitter, check it out!</p>
                            </div>
                        </a>

                        <a href="#" class="c-dropdown__item dropdown-item o-media">
                            <span class="o-media__img u-mr-xsmall">
                                <span class="c-avatar c-avatar--xsmall">
                                    <span class="c-avatar__img u-bg-fancy u-flex u-justify-center u-align-items-center">
                                        <i class="fa fa-calendar u-text-large u-color-white"></i>
                                    </span>
                                </span>

                            </span>
                            <div class="o-media__body">
                                <h6 class="u-mb-zero">Company meetup</h6>
                                <p class="u-text-mute">You have recieved a mention on twitter, check it out!</p>
                            </div>
                        </a>
                        <a href="#" class="c-dropdown__item dropdown-item o-media">
                            <span class="o-media__img u-mr-xsmall">
                                <span class="c-avatar c-avatar--xsmall">
                                    <span class="c-avatar__img u-bg-primary u-flex u-justify-center u-align-items-center">
                                        <i class="fa fa-info u-text-large u-color-white"></i>
                                    </span>
                                </span>

                            </span>
                            <div class="o-media__body">
                                <h6 class="u-mb-zero">Someone mentioned you</h6>
                                <p class="u-text-mute">You have recieved a mention on twitter, check it out!</p>
                            </div>
                        </a>
                    </div>
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
            </header>

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- A simple workaround to customize fullcalendar's header -->
                        <div class="fc-header">
                            <h2 class="fc-header-title">All Events</h2>
                        </div>
                        <div class="js-calendar u-mb-large"></div>
                    </div>
                </div>
            </div>

        </main>

        <script src="js/main.min.js"></script>

        <!-- Google Analytics-->
        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-88739867-2','auto');ga('send','pageview')
        </script>
        <script src="../../../www.google-analytics.com/analytics.js" async defer></script>
    </body>

<!-- Mirrored from zawiastudio.com/dashboard/demo/calendar.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Nov 2017 15:23:38 GMT -->
</html>
