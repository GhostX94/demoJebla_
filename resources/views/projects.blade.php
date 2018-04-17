<!doctype html>
<html lang="en-us">

<!-- Mirrored from zawiastudio.com/dashboard/demo/projects.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Nov 2017 15:23:37 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Projects | Dashboard UI Kit</title>
        <meta name="description" content="Dashboard UI Kit">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600" rel="stylesheet">

        <!-- Favicon -->
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/main.min.css">
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <header class="c-navbar">
            <a class="c-navbar__brand" href="#!">
                <img src="img/logo.png" alt="Dashboard UI Kit">
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
            <h3 class="c-toolbar__title has-divider">Projects Results</h3>
            <h5 class="c-toolbar__meta u-mr-auto">Dashboard</h5>

            <div class="c-field c-field--inline has-icon-right u-hidden-down@tablet">
                <label for="search-projects" class="u-visually-hidden"></label>
                <input class="c-input" id="search-projects" type="text" placeholder="Search">
                <span class="c-field__icon">
                    <i class="fa fa-search"></i>
                </span>
            </div><!-- // .c-field -->

            <!-- Button trigger modal -->
            <button type="button" class="c-btn c-btn--success u-ml-small" data-toggle="modal" data-target="#onBoardModal">
              New Project
            </button>

            <!-- Modal -->
            <div class="c-modal modal fade" id="onBoardModal" tabindex="-1" role="dialog" aria-labelledby="onBoardModal" data-backdrop="static">
                <div class="c-modal__dialog modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="c-onboard">

                            <header class="c-onboard__header">
                                <h1 class="c-onboard__title">Welcome To Our App</h1>
                                <button class="c-onboard__close c-close" data-dismiss="modal" aria-label="Close">
                                    <i class="fa fa-close"></i>
                                </button>
                            </header>

                            <nav class="c-onboard__nav">
                                <p class="c-onboard__nav-title">Quick Tour</p>

                                <ul class="c-onboard__nav-list">
                                    <li>
                                        <a class="c-onboard__nav-link" href="#">
                                        <span class="c-onboard__nav-counter">1</span>Setup your account</a>
                                    </li>
                                    <li>
                                        <a class="c-onboard__nav-link is-active" href="#">
                                        <span class="c-onboard__nav-counter">2</span>Start Your first board</a>
                                    </li>
                                    <li>
                                        <a class="c-onboard__nav-link" href="#">
                                        <span class="c-onboard__nav-counter">3</span>Organize</a>
                                    </li>
                                    <li>
                                        <a class="c-onboard__nav-link" href="#">
                                        <span class="c-onboard__nav-counter">4</span>Share</a>
                                    </li>
                                </ul>
                            </nav>

                            <div class="c-onboard__body">
                                <h2 class="u-h5 u-mb-small">Start your first board</h2>
                                <p class="u-text-mute u-nosapce">Click on the right panel and start your first board. Boards are our core feature for helping you keep your work in order and easy to manage.</p>
                            </div>

                            <div class="c-onboard__img">
                                <img src="img/onboard-img1.svg" alt="About image">
                            </div>

                            <span class="c-onboard__skip">
                                <a class="u-text-mute" href="#">Skip</a>
                            </span>

                            <span class="c-onboard__next">
                                <a class="c-btn c-btn--green" href="#">Next</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- // .c-toolbar -->

        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="c-state">
                        <h3 class="c-state__title">New Projects</h3>
                        <h4 class="c-state__number">94</h4>
                        <p class="c-state__status">13% Increase</p>
                        <span class="c-state__indicator">
                            <i class="fa fa-arrow-circle-o-down"></i>
                        </span>
                    </div><!-- // c-state -->
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="c-state c-state--success">
                        <h3 class="c-state__title">Team Members</h3>
                        <h4 class="c-state__number">5,990</h4>
                        <p class="c-state__status">4% Increase</p>
                        <span class="c-state__indicator">
                            <i class="fa fa-arrow-circle-o-up"></i>
                        </span>
                    </div><!-- // c-state -->
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="c-state c-state--warning">
                        <h3 class="c-state__title">Total Budget</h3>
                        <h4 class="c-state__number">$80,890</h4>
                        <p class="c-state__status">21% Decrease</p>
                        <span class="c-state__indicator">
                            <i class="fa fa-arrow-circle-o-down"></i>
                        </span>
                    </div><!-- // c-state -->
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="c-state c-state--danger">
                        <h3 class="c-state__title">New Customers</h3>
                        <h4 class="c-state__number">3</h4>
                        <p class="c-state__status">13% Decrease</p>
                        <span class="c-state__indicator">
                            <i class="fa fa-arrow-circle-o-up"></i>
                        </span>
                    </div><!-- // c-state -->
                </div>
            </div><!-- // .row -->

            <div class="row u-mb-large">
                <div class="col-sm-12">
                    <table class="c-table u-mb-small">

                        <caption class="c-table__title">
                            Ongoing Projects <small>32 Projects</small>

                            <a class="c-table__title-action" href="#!">
                                <i class="fa fa-cloud-download"></i>
                            </a>
                        </caption>

                        <thead class="c-table__head c-table__head--slim">
                            <tr class="c-table__row">
                              <th class="c-table__cell c-table__cell--head">Project</th>
                              <th class="c-table__cell c-table__cell--head">Deadline</th>
                              <th class="c-table__cell c-table__cell--head">Leader + Team</th>
                              <th class="c-table__cell c-table__cell--head">Budget</th>
                              <th class="c-table__cell c-table__cell--head">Status</th>
                              <th class="c-table__cell c-table__cell--head">
                                  <span class="u-hidden-visually">Actions</span>
                              </th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr class="c-table__row c-table__row--danger">
                                <td class="c-table__cell">New Dashboard
                                    <small class="u-block u-text-mute">Google</small>
                                </td>

                                <td class="c-table__cell">17th Oct, 17
                                    <small class="u-block u-text-danger">Overdue</small>
                                </td>

                                <td class="c-table__cell">
                                    <div class="o-media">
                                        <div class="o-media__img u-mr-xsmall">
                                            <div class="c-avatar c-avatar--xsmall">
                                                <img class="c-avatar__img" src="http://i.pravatar.cc/72?img=40" alt="Adam's Face">
                                            </div>
                                        </div>
                                        <div class="o-media__body">
                                            Norman Hammond<small class="u-block u-text-mute">UK Design Team</small>
                                        </div>
                                    </div>
                                </td>

                                <td class="c-table__cell">$4,670
                                    <small class="u-block u-text-mute">Paid</small>
                                </td>

                                <td class="c-table__cell">
                                    <i class="fa fa-circle-o u-color-info u-mr-xsmall"></i>Early Stages
                                </td>

                                <td class="c-table__cell u-text-right">
                                    <div class="c-dropdown dropdown">
                                        <button class="c-btn c-btn--secondary has-dropdown dropdown-toggle" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>

                                        <div class="c-dropdown__menu dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <a class="c-dropdown__item dropdown-item" href="#">Edit Profile</a>
                                            <a class="c-dropdown__item dropdown-item" href="#">View Activity</a>
                                            <a class="c-dropdown__item dropdown-item" href="#">Manage Roles</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr class="c-table__row">
                                <td class="c-table__cell">Landing Page
                                    <small class="u-block u-text-mute">Airbnb</small>
                                </td>

                                <td class="c-table__cell">2nd Jan, 18
                                    <small class="u-block u-text-mute">in 3 months</small>
                                </td>

                                <td class="c-table__cell">
                                    <div class="o-media">
                                        <div class="o-media__img u-mr-xsmall">
                                            <div class="c-avatar c-avatar--xsmall">
                                                <img class="c-avatar__img" src="http://i.pravatar.cc/72?img=52" alt="Adam's Face">
                                            </div>
                                        </div>
                                        <div class="o-media__body">
                                            Joseph Mullins<small class="u-block u-text-mute">External Company</small>
                                        </div>
                                    </div>
                                </td>

                                <td class="c-table__cell">$5,740
                                    <small class="u-block u-text-mute">Invoice Sent</small>
                                </td>

                                <td class="c-table__cell">
                                    <i class="fa fa-circle-o u-color-warning u-mr-xsmall"></i>QA
                                </td>

                                <td class="c-table__cell u-text-right">
                                    <div class="c-dropdown dropdown">
                                        <button class="c-btn c-btn--secondary has-dropdown dropdown-toggle" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>

                                        <div class="c-dropdown__menu dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                            <a class="c-dropdown__item dropdown-item" href="#">Edit Profile</a>
                                            <a class="c-dropdown__item dropdown-item" href="#">View Activity</a>
                                            <a class="c-dropdown__item dropdown-item" href="#">Manage Roles</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr class="c-table__row">
                                <td class="c-table__cell">Customer Care Interface
                                    <small class="u-block u-text-mute">Uber</small>
                                </td>

                                <td class="c-table__cell">1st Apr, 18
                                    <small class="u-block u-text-mute">in 5 months</small>
                                </td>

                                <td class="c-table__cell">
                                    <div class="o-media">
                                        <div class="o-media__img u-mr-xsmall">
                                            <div class="c-avatar c-avatar--xsmall">
                                                <img class="c-avatar__img" src="http://i.pravatar.cc/72?img=51" alt="Adam's Face">
                                            </div>
                                        </div>
                                        <div class="o-media__body">
                                            Ina Higgins
                                        <small class="u-block u-text-mute">UX Warriors</small>
                                        </div>
                                    </div>
                                </td>

                                <td class="c-table__cell">$4,000
                                    <small class="u-block u-text-mute">Paid</small>
                                </td>

                                <td class="c-table__cell">
                                    <i class="fa fa-circle-o u-color-primary u-mr-xsmall"></i>Waiting for Client
                                </td>

                                <td class="c-table__cell u-text-right">
                                    <div class="c-dropdown dropdown">
                                        <button class="c-btn c-btn--secondary has-dropdown dropdown-toggle" id="dropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>

                                        <div class="c-dropdown__menu dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                            <a class="c-dropdown__item dropdown-item" href="#">Edit Profile</a>
                                            <a class="c-dropdown__item dropdown-item" href="#">View Activity</a>
                                            <a class="c-dropdown__item dropdown-item" href="#">Manage Roles</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr class="c-table__row c-table__row--danger">
                                <td class="c-table__cell">UX Consulting
                                    <small class="u-block u-text-mute">Tapdaq</small>
                                </td>

                                <td class="c-table__cell">23th Dec, 18
                                    <small class="u-block u-text-danger">Overdue</small>
                                </td>

                                <td class="c-table__cell">
                                    <div class="o-media">
                                        <div class="o-media__img u-mr-xsmall">
                                            <div class="c-avatar c-avatar--xsmall">
                                                <img class="c-avatar__img" src="http://i.pravatar.cc/72?img=49" alt="Adam's Face">
                                            </div>
                                        </div>
                                        <div class="o-media__body">
                                            Stella Munoz
                                        <small class="u-block u-text-mute">Dribbble Researchers</small>
                                        </div>
                                    </div>
                                </td>

                                <td class="c-table__cell">$2,500
                                    <small class="u-block u-text-mute">Paid</small>
                                </td>

                                <td class="c-table__cell">
                                    <i class="fa fa-circle-o u-color-success u-mr-xsmall"></i>Finishing
                                </td>

                                <td class="c-table__cell u-text-right">
                                    <div class="c-dropdown dropdown">
                                        <button class="c-btn c-btn--secondary has-dropdown dropdown-toggle" id="dropdownMenuButton4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>

                                        <div class="c-dropdown__menu dropdown-menu" aria-labelledby="dropdownMenuButton4">
                                            <a class="c-dropdown__item dropdown-item" href="#">Edit Profile</a>
                                            <a class="c-dropdown__item dropdown-item" href="#">View Activity</a>
                                            <a class="c-dropdown__item dropdown-item" href="#">Manage Roles</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr class="c-table__row">
                                <td class="c-table__cell">Mongo DB Integration
                                    <small class="u-block u-text-mute">Twitter</small>
                                </td>

                                <td class="c-table__cell">10th Apr, 17
                                    <small class="u-block u-text-mute">in 4 Months</small>
                                </td>

                                <td class="c-table__cell">
                                    <div class="o-media">
                                        <div class="o-media__img u-mr-xsmall">
                                            <div class="c-avatar c-avatar--xsmall">
                                                <img class="c-avatar__img" src="http://i.pravatar.cc/72?img=43" alt="Adam's Face">
                                            </div>
                                        </div>
                                        <div class="o-media__body">
                                            Dylan Shelton
                                        <small class="u-block u-text-mute">SF Dev Team</small>
                                        </div>
                                    </div>
                                </td>

                                <td class="c-table__cell">$800
                                    <small class="u-block u-text-mute">Invoice Sent</small>
                                </td>

                                <td class="c-table__cell">
                                    <i class="fa fa-circle-o u-color-info u-mr-xsmall"></i>Early Stages
                                </td>

                                <td class="c-table__cell u-text-right">
                                    <div class="c-dropdown dropdown">
                                        <button class="c-btn c-btn--secondary has-dropdown dropdown-toggle" id="dropdownMenuButton5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>

                                        <div class="c-dropdown__menu dropdown-menu" aria-labelledby="dropdownMenuButton5">
                                            <a class="c-dropdown__item dropdown-item" href="#">Edit Profile</a>
                                            <a class="c-dropdown__item dropdown-item" href="#">View Activity</a>
                                            <a class="c-dropdown__item dropdown-item" href="#">Manage Roles</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr class="c-table__row">
                                <td class="c-table__cell">Small Design Help
                                    <small class="u-block u-text-mute">NASA</small>
                                </td>

                                <td class="c-table__cell">1st Mar, 18
                                     <small class="u-block u-text-mute">in 6 Months</small>
                                </td>

                                <td class="c-table__cell">
                                    <div class="o-media">
                                        <div class="o-media__img u-mr-xsmall">
                                            <div class="c-avatar c-avatar--xsmall">
                                                <img class="c-avatar__img" src="http://i.pravatar.cc/72?img=45" alt="Adam's Face">
                                            </div>
                                        </div>
                                        <div class="o-media__body">
                                            Ellen Santiago
                                        <small class="u-block u-text-mute">UK Design Team</small>
                                        </div>
                                    </div>
                                </td>

                                <td class="c-table__cell">$2,180
                                    <small class="u-block u-text-danger">Delayed</small>
                                </td>

                                <td class="c-table__cell">
                                    <i class="fa fa-circle-o u-color-success u-mr-xsmall"></i>Finishing
                                </td>

                                <td class="c-table__cell u-text-right">
                                    <div class="c-dropdown dropdown">
                                        <button class="c-btn c-btn--secondary has-dropdown dropdown-toggle" id="dropdownMenuButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>

                                        <div class="c-dropdown__menu dropdown-menu" aria-labelledby="dropdownMenuButton6">
                                            <a class="c-dropdown__item dropdown-item" href="#">Edit Profile</a>
                                            <a class="c-dropdown__item dropdown-item" href="#">View Activity</a>
                                            <a class="c-dropdown__item dropdown-item" href="#">Manage Roles</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr class="c-table__row">
                                <td class="c-table__cell">Subpages
                                    <small class="u-block u-text-mute">Facebook</small>
                                </td>

                                <td class="c-table__cell">1st Jan, 18
                                     <small class="u-block u-text-mute">in 2 Months</small>
                                </td>

                                <td class="c-table__cell">
                                    <div class="o-media">
                                        <div class="o-media__img u-mr-xsmall">
                                            <div class="c-avatar c-avatar--xsmall">
                                                <img class="c-avatar__img" src="http://i.pravatar.cc/72?img=38" alt="Adam's Face">
                                            </div>
                                        </div>
                                        <div class="o-media__body">
                                            Maurice Briggs
                                        <small class="u-block u-text-mute">Moscow Office</small>
                                        </div>
                                    </div>
                                </td>

                                <td class="c-table__cell">
                                    $4,670<small class="u-block u-text-mute">Invoice Sent</small>
                                </td>

                                <td class="c-table__cell">
                                    <i class="fa fa-circle-o u-color-warning u-mr-xsmall"></i>Designing
                                </td>

                                <td class="c-table__cell u-text-right">
                                    <div class="c-dropdown dropdown">
                                        <button class="c-btn c-btn--secondary has-dropdown dropdown-toggle" id="dropdownMenuButton7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>

                                        <div class="c-dropdown__menu dropdown-menu" aria-labelledby="dropdownMenuButton7">
                                            <a class="c-dropdown__item dropdown-item" href="#">Edit Profile</a>
                                            <a class="c-dropdown__item dropdown-item" href="#">View Activity</a>
                                            <a class="c-dropdown__item dropdown-item" href="#">Manage Roles</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <nav class="c-pagination u-justify-between">
                        <a class="c-pagination__control" href="#">
                            <i class="fa fa-caret-left"></i>
                        </a>

                        <p class="c-pagination__counter">Page 2 of 3</p>

                        <a class="c-pagination__control" href="#">
                            <i class="fa fa-caret-right"></i>
                        </a>
                    </nav>
                </div>
            </div><!-- // .row -->
        </div><!-- // .container -->

        <!-- Main Javascript -->
        <script src="js/main.min.js"></script>

        <!-- Google Analytics-->
        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-88739867-2','auto');ga('send','pageview')
        </script>
        <script src="../../../www.google-analytics.com/analytics.js" async defer></script>
    </body>

<!-- Mirrored from zawiastudio.com/dashboard/demo/projects.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Nov 2017 15:23:38 GMT -->
</html>
