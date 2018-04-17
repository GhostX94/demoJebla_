<!doctype html>
<html lang="en-us">

<!-- Mirrored from zawiastudio.com/dashboard/demo/ios-apps-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Nov 2017 15:23:40 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>iOS Apps List | Dashboard UI Kit</title>
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

            <div class="c-dropdown u-ml-auto dropdown">
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
            <h3 class="c-toolbar__title has-divider">Campaigns</h3>
            <h5 class="c-toolbar__meta u-mr-auto">36 Results</h5>

            <div class="c-field c-field--inline has-icon-right u-mr-small u-hidden-down@desktop">
                <input class="c-input" type="text" placeholder="Search">
                <span class="c-field__icon">
                    <i class="fa fa-search"></i>
                </span>
            </div>

            <a class="c-btn c-btn--success" href="#">
                <i class="fa fa-plus u-text-small u-opacity-medium u-mr-xsmall"></i>New Promotions
            </a>
        </div><!-- // .c-toolbar -->

        <div class="container u-mb-large">
            <div class="row">
                <div class="col-sm-12">
                    <table class="c-table">
                        <caption class="c-table__title">
                            Running <small>32 Apps</small>
                        </caption>
                        <thead class="c-table__head c-table__head--slim">
                            <tr class="c-table__row">
                                <th class="c-table__cell c-table__cell--head">App</th>
                                <th class="c-table__cell c-table__cell--head">Installs Generated</th>
                                <th class="c-table__cell c-table__cell--head">Created</th>
                                <th class="c-table__cell c-table__cell--head">Budget</th>
                                <th class="c-table__cell c-table__cell--head">Status</th>
                                <th class="c-table__cell c-table__cell--head">Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr class="c-table__row">
                                <td class="c-table__cell c-table__cell--img o-media">

                                    <div class="o-media__img u-mr-xsmall">
                                        <img src="img/app-icon1.png" style="width:56px;" alt="Confide's App Icon">
                                    </div>

                                    <div class="o-media__body">
                                        Confide
                                        <span class="u-block u-text-mute u-text-xsmall">Confide, Inc.</span>
                                    </div>
                                </td>

                                <td class="c-table__cell">24,587
                                    <span class="u-block u-text-mute u-text-xsmall">Daily: 453</span>
                                </td>
                                <td class="c-table__cell">$290
                                    <span class="u-block u-text-mute u-text-xsmall">32 Tickets remaining</span>
                                </td>
                                <td class="c-table__cell">$14,670</td>
                                <td class="c-table__cell"><span class="c-badge c-badge--success">Running</span></td>

                                <td class="c-table__cell">
                                    <ul class="u-flex u-justify-between">
                                        <li class="u-text-large">
                                            <a class="u-text-mute" href="#"><i class="fa fa-pause-circle-o"></i></a>
                                        </li>
                                        <li class="u-text-large">
                                            <a class="u-text-mute" href="#"><i class="fa fa-share-square-o"></i></a>
                                        </li>
                                        <li class="u-text-large">
                                            <a class="u-text-mute" href="#"><i class="fa fa-repeat"></i></a>
                                        </li>
                                        <li class="u-text-large">
                                            <a class="u-text-mute" href="#"><i class="fa fa-bar-chart"></i></a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>

                            <tr class="c-table__row">
                                <td class="c-table__cell c-table__cell--img o-media">

                                    <div class="o-media__img u-mr-xsmall">
                                        <img src="img/app-icon2.png" style="width:56px;" alt="Confide's App Icon">
                                    </div>

                                    <div class="o-media__body">
                                        Confide
                                        <span class="u-block u-text-mute u-text-xsmall">Confide, Inc.</span>
                                    </div>
                                </td>

                                <td class="c-table__cell">24,587
                                    <span class="u-block u-text-mute u-text-xsmall">Daily: 453</span>
                                </td>
                                <td class="c-table__cell">$290
                                    <span class="u-block u-text-mute u-text-xsmall">32 Tickets remaining</span>
                                </td>
                                <td class="c-table__cell">$14,670</td>
                                <td class="c-table__cell"><span class="c-badge c-badge--success">Running</span></td>

                                <td class="c-table__cell">
                                    <ul class="u-flex u-justify-between">
                                        <li class="u-text-large">
                                            <a class="u-text-mute" href="#"><i class="fa fa-pause-circle-o"></i></a>
                                        </li>
                                        <li class="u-text-large">
                                            <a class="u-text-mute" href="#"><i class="fa fa-share-square-o"></i></a>
                                        </li>
                                        <li class="u-text-large">
                                            <a class="u-text-mute" href="#"><i class="fa fa-repeat"></i></a>
                                        </li>
                                        <li class="u-text-large">
                                            <a class="u-text-mute" href="#"><i class="fa fa-bar-chart"></i></a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>

                            <tr class="c-table__row">
                                <td class="c-table__cell c-table__cell--img o-media">

                                    <div class="o-media__img u-mr-xsmall">
                                        <img src="img/app-icon3.png" style="width:56px;" alt="Confide's App Icon">
                                    </div>

                                    <div class="o-media__body">
                                        Confide
                                        <span class="u-block u-text-mute u-text-xsmall">Confide, Inc.</span>
                                    </div>
                                </td>

                                <td class="c-table__cell">24,587
                                    <span class="u-block u-text-mute u-text-xsmall">Daily: 453</span>
                                </td>
                                <td class="c-table__cell">$290
                                    <span class="u-block u-text-mute u-text-xsmall">32 Tickets remaining</span>
                                </td>
                                <td class="c-table__cell">$14,670</td>
                                <td class="c-table__cell"><span class="c-badge c-badge--secondary">Paused</span></td>

                                <td class="c-table__cell">
                                    <ul class="u-flex u-justify-between">
                                        <li class="u-text-large">
                                            <a class="u-text-mute" href="#"><i class="fa fa-pause-circle-o"></i></a>
                                        </li>
                                        <li class="u-text-large">
                                            <a class="u-text-mute" href="#"><i class="fa fa-share-square-o"></i></a>
                                        </li>
                                        <li class="u-text-large">
                                            <a class="u-text-mute" href="#"><i class="fa fa-repeat"></i></a>
                                        </li>
                                        <li class="u-text-large">
                                            <a class="u-text-mute" href="#"><i class="fa fa-bar-chart"></i></a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>

                            <tr class="c-table__row">
                                <td class="c-table__cell c-table__cell--img o-media">

                                    <div class="o-media__img u-mr-xsmall">
                                        <img src="img/app-icon4.png" style="width:56px;" alt="Confide's App Icon">
                                    </div>

                                    <div class="o-media__body">
                                        Confide
                                        <span class="u-block u-text-mute u-text-xsmall">Confide, Inc.</span>
                                    </div>
                                </td>

                                <td class="c-table__cell">24,587
                                    <span class="u-block u-text-mute u-text-xsmall">Daily: 453</span>
                                </td>
                                <td class="c-table__cell">$290
                                    <span class="u-block u-text-mute u-text-xsmall">32 Tickets remaining</span>
                                </td>
                                <td class="c-table__cell">$14,670</td>
                                <td class="c-table__cell"><span class="c-badge c-badge--success">Running</span></td>

                                <td class="c-table__cell">
                                    <ul class="u-flex u-justify-between">
                                        <li class="u-text-large">
                                            <a class="u-text-mute" href="#"><i class="fa fa-pause-circle-o"></i></a>
                                        </li>
                                        <li class="u-text-large">
                                            <a class="u-text-mute" href="#"><i class="fa fa-share-square-o"></i></a>
                                        </li>
                                        <li class="u-text-large">
                                            <a class="u-text-mute" href="#"><i class="fa fa-repeat"></i></a>
                                        </li>
                                        <li class="u-text-large">
                                            <a class="u-text-mute" href="#"><i class="fa fa-bar-chart"></i></a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>

                            <tr class="c-table__row">
                                <td class="c-table__cell c-table__cell--img o-media">

                                    <div class="o-media__img u-mr-xsmall">
                                        <img src="img/app-icon5.png" style="width:56px;" alt="Confide's App Icon">
                                    </div>

                                    <div class="o-media__body">
                                        Confide
                                        <span class="u-block u-text-mute u-text-xsmall">Confide, Inc.</span>
                                    </div>
                                </td>

                                <td class="c-table__cell">24,587
                                    <span class="u-block u-text-mute u-text-xsmall">Daily: 453</span>
                                </td>
                                <td class="c-table__cell">$290
                                    <span class="u-block u-text-mute u-text-xsmall">32 Tickets remaining</span>
                                </td>
                                <td class="c-table__cell">$14,670</td>
                                <td class="c-table__cell"><span class="c-badge c-badge--success">Running</span></td>

                                <td class="c-table__cell">
                                    <ul class="u-flex u-justify-between">
                                        <li class="u-text-large">
                                            <a class="u-text-mute" href="#"><i class="fa fa-pause-circle-o"></i></a>
                                        </li>
                                        <li class="u-text-large">
                                            <a class="u-text-mute" href="#"><i class="fa fa-share-square-o"></i></a>
                                        </li>
                                        <li class="u-text-large">
                                            <a class="u-text-mute" href="#"><i class="fa fa-repeat"></i></a>
                                        </li>
                                        <li class="u-text-large">
                                            <a class="u-text-mute" href="#"><i class="fa fa-bar-chart"></i></a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>

                            <tr class="c-table__row">
                                <td class="c-table__cell c-table__cell--img o-media">

                                    <div class="o-media__img u-mr-xsmall">
                                        <img src="img/app-icon6.png" style="width:56px;" alt="Confide's App Icon">
                                    </div>

                                    <div class="o-media__body">
                                        Confide
                                        <span class="u-block u-text-mute u-text-xsmall">Confide, Inc.</span>
                                    </div>
                                </td>

                                <td class="c-table__cell">24,587
                                    <span class="u-block u-text-mute u-text-xsmall">Daily: 453</span>
                                </td>
                                <td class="c-table__cell">$290
                                    <span class="u-block u-text-mute u-text-xsmall">32 Tickets remaining</span>
                                </td>
                                <td class="c-table__cell">$14,670</td>
                                <td class="c-table__cell"><span class="c-badge c-badge--secondary">Paused</span></td>

                                <td class="c-table__cell">
                                    <ul class="u-flex u-justify-between">
                                        <li class="u-text-large">
                                            <a class="u-text-mute" href="#"><i class="fa fa-pause-circle-o"></i></a>
                                        </li>
                                        <li class="u-text-large">
                                            <a class="u-text-mute" href="#"><i class="fa fa-share-square-o"></i></a>
                                        </li>
                                        <li class="u-text-large">
                                            <a class="u-text-mute" href="#"><i class="fa fa-repeat"></i></a>
                                        </li>
                                        <li class="u-text-large">
                                            <a class="u-text-mute" href="#"><i class="fa fa-bar-chart"></i></a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>

                            <tr class="c-table__row">
                                <td class="c-table__cell c-table__cell--img o-media">

                                    <div class="o-media__img u-mr-xsmall">
                                        <img src="img/app-icon7.png" style="width:56px;" alt="Confide's App Icon">
                                    </div>

                                    <div class="o-media__body">
                                        Confide
                                        <span class="u-block u-text-mute u-text-xsmall">Confide, Inc.</span>
                                    </div>
                                </td>

                                <td class="c-table__cell">24,587
                                    <span class="u-block u-text-mute u-text-xsmall">Daily: 453</span>
                                </td>
                                <td class="c-table__cell">$290
                                    <span class="u-block u-text-mute u-text-xsmall">32 Tickets remaining</span>
                                </td>
                                <td class="c-table__cell">$14,670</td>
                                <td class="c-table__cell"><span class="c-badge c-badge--success">Running</span></td>

                                <td class="c-table__cell">
                                    <ul class="u-flex u-justify-between">
                                        <li class="u-text-large">
                                            <a class="u-text-mute" href="#"><i class="fa fa-pause-circle-o"></i></a>
                                        </li>
                                        <li class="u-text-large">
                                            <a class="u-text-mute" href="#"><i class="fa fa-share-square-o"></i></a>
                                        </li>
                                        <li class="u-text-large">
                                            <a class="u-text-mute" href="#"><i class="fa fa-repeat"></i></a>
                                        </li>
                                        <li class="u-text-large">
                                            <a class="u-text-mute" href="#"><i class="fa fa-bar-chart"></i></a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>

                        </tbody>
                    </table><!-- // .c-table -->
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

<!-- Mirrored from zawiastudio.com/dashboard/demo/ios-apps-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Nov 2017 15:23:41 GMT -->
</html>
