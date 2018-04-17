<!doctype html>
<html lang="en-us">

<!-- Mirrored from zawiastudio.com/dashboard/demo/browse.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Nov 2017 15:23:38 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Browse | Dashboard UI Kit</title>
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

        <!-- Add your site or application content here -->
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
            <h4 class="c-toolbar__title has-divider">Search Results: <span class="u-text-bold"> Nature Shots</span></h4>
            <h5 class="c-toolbar__meta u-mr-auto">21 People match your criteria</h5>
            <a class="c-btn c-btn--blue u-hidden-down@mobile" href="#">New Message</a>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-3 order-lg-2">
                    <form class="c-search-form c-search-form--dark">

                        <h5 class="c-search-form__label">Sort By</h5>
                        <div class="c-search-form__section u-flex">
                            <div class="c-choice c-choice--radio u-mr-small">
                                <input class="c-choice__input" id="radio1" name="radios" type="radio">
                                <label class="c-choice__label" for="radio1">Related to you</label>
                            </div>

                            <div class="c-choice c-choice--radio">
                                <input class="c-choice__input" id="radio2" name="radios" type="radio">
                                <label class="c-choice__label" for="radio2">Name</label>
                            </div>
                        </div>

                        <h5 class="c-search-form__label">Only</h5>
                        <div class="c-search-form__section">
                            <div class="c-choice c-choice--checkbox">
                                <input class="c-choice__input" id="checkbox1" name="checkboxes" type="checkbox">
                                <label class="c-choice__label" for="checkbox1">In Your Circles</label>
                            </div>

                            <div class="c-choice c-choice--checkbox">
                                <input class="c-choice__input" id="checkbox2" name="checkboxes" type="checkbox">
                                <label class="c-choice__label" for="checkbox2">Available for work</label>
                            </div>

                            <div class="c-choice c-choice--checkbox">
                                <input class="c-choice__input" id="checkbox3" name="checkboxes" type="checkbox">
                                <label class="c-choice__label" for="checkbox3">Active Users</label>
                            </div>
                        </div>

                        <div class="c-search-form__section">
                            <div class="c-field has-icon-left">
                                <span class="c-field__icon"><i class="fa fa-map-marker"></i></span>
                                <label class="c-field__label c-search-form__label" for="search-location">Location</label>
                                <input class="c-input" id="search-location" type="text" placeholder="All">
                                <small class="c-field__message">Enter a city, state or country</small>
                            </div>
                        </div>

                        <div class="c-search-form__section">
                            <div class="c-field has-icon-left">
                                <span class="c-field__icon"><i class="fa fa-user-o"></i></span>
                                <label class="c-field__label c-search-form__label" for="search-position">Position</label>
                                <input class="c-input" id="search-position" type="text" placeholder="Any">
                                <small class="c-field__message">Use commas for multiple skills</small>
                            </div>
                        </div>

                        <button class="c-btn c-btn--info c-btn--fullwidth" type="submit">Search</button>
                    </form>
                </div>

                <div class="col-lg-9 order-lg-1">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="c-search-result">

                                <div class="o-media">
                                    <div class="o-media__img u-mr-small">
                                        <div class="c-avatar c-avatar--medium">
                                            <img class="c-avatar__img" src="http://i.pravatar.cc/120?img=30" alt="Adam's Face">
                                        </div>

                                    </div>
                                    <div class="o-media__body">
                                        <h4 class="c-search-result__title">Caroline Higgins</h4>
                                        <p class="c-search-result__meta">Traveller <br> 5 Projects | 41 Stocks</p>
                                    </div>
                                </div>

                                <ul class="c-search-result__gallery">
                                    <li class="c-search-result__gallery-item">
                                        <a href="#">
                                            <img src="https://picsum.photos/240/180?image=20" alt="Image">
                                        </a>
                                    </li>
                                    <li class="c-search-result__gallery-item">
                                        <a href="#">
                                            <img src="https://picsum.photos/240/180?image=30" alt="Image">
                                        </a>
                                    </li>
                                    <li class="c-search-result__gallery-item">
                                        <a href="#">
                                            <img src="https://picsum.photos/240/180?image=41" alt="Image">
                                        </a>
                                    </li>
                                </ul>

                                <ul class="c-search-result__actionlist">
                                    <li class="c-search-result__action">
                                        <a href="#"><i class="fa fa-envelope-o"></i></a>
                                    </li>

                                    <li class="c-search-result__action dropdown">
                                        <a class="dropdown-toggle" href="#" id="searchResult1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                        <div class="c-dropdown__menu dropdown-menu dropdown-menu-right" aria-labelledby="searchResult1">
                                            <a href="#" class="c-dropdown__item">Link 1</a>
                                            <a href="#" class="c-dropdown__item">Link 2</a>
                                            <a href="#" class="c-dropdown__item">Link 3</a>
                                        </div>
                                    </li>
                                </ul>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="c-search-result">

                                <div class="o-media">
                                    <div class="o-media__img u-mr-small">
                                        <div class="c-avatar c-avatar--medium">
                                            <img class="c-avatar__img" src="http://i.pravatar.cc/120?img=44" alt="Adam's Face">
                                        </div>

                                    </div>
                                    <div class="o-media__body">
                                        <h4 class="c-search-result__title">Estelle Martin</h4>
                                        <p class="c-search-result__meta">Professional Photographer at Adobe <br> 12 Projects | 419 Stocks</p>
                                    </div>
                                </div>

                                <ul class="c-search-result__gallery">
                                    <li class="c-search-result__gallery-item">
                                        <a href="#">
                                            <img src="https://picsum.photos/240/180?image=30" alt="Image">
                                        </a>
                                    </li>
                                    <li class="c-search-result__gallery-item">
                                        <a href="#">
                                            <img src="https://picsum.photos/240/180?image=31" alt="Image">
                                        </a>
                                    </li>
                                    <li class="c-search-result__gallery-item">
                                        <a href="#">
                                            <img src="https://picsum.photos/240/180?image=32" alt="Image">
                                        </a>
                                    </li>
                                </ul>

                                <ul class="c-search-result__actionlist">
                                    <li class="c-search-result__action">
                                        <a href="#"><i class="fa fa-envelope-o"></i></a>
                                    </li>

                                    <li class="c-search-result__action dropdown">
                                        <a class="dropdown-toggle" href="#" id="searchResult2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                        <div class="c-dropdown__menu dropdown-menu dropdown-menu-right" aria-labelledby="searchResult2">
                                            <a href="#" class="c-dropdown__item">Link 1</a>
                                            <a href="#" class="c-dropdown__item">Link 2</a>
                                            <a href="#" class="c-dropdown__item">Link 3</a>
                                        </div>
                                    </li>
                                </ul>

                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="c-search-result">

                                <div class="o-media">
                                    <div class="o-media__img u-mr-small">
                                        <div class="c-avatar c-avatar--medium">
                                            <img class="c-avatar__img" src="http://i.pravatar.cc/120?img=54" alt="Adam's Face">
                                        </div>

                                    </div>
                                    <div class="o-media__body">
                                        <h4 class="c-search-result__title">Adeline Tate</h4>
                                        <p class="c-search-result__meta">Designer at Yahoo <br> 89 Projects | 1203 Stocks</p>
                                    </div>
                                </div>

                                <ul class="c-search-result__gallery">
                                    <li class="c-search-result__gallery-item">
                                        <a href="#">
                                            <img src="https://picsum.photos/240/180?image=50" alt="Image">
                                        </a>
                                    </li>
                                    <li class="c-search-result__gallery-item">
                                        <a href="#">
                                            <img src="https://picsum.photos/240/180?image=51" alt="Image">
                                        </a>
                                    </li>
                                    <li class="c-search-result__gallery-item">
                                        <a href="#">
                                            <img src="https://picsum.photos/240/180?image=52" alt="Image">
                                        </a>
                                    </li>
                                </ul>

                                <ul class="c-search-result__actionlist">
                                    <li class="c-search-result__action">
                                        <a href="#"><i class="fa fa-envelope-o"></i></a>
                                    </li>

                                    <li class="c-search-result__action dropdown">
                                        <a class="dropdown-toggle" href="#" id="searchResult3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                        <div class="c-dropdown__menu dropdown-menu dropdown-menu-right" aria-labelledby="searchResult3">
                                            <a href="#" class="c-dropdown__item">Link 1</a>
                                            <a href="#" class="c-dropdown__item">Link 2</a>
                                            <a href="#" class="c-dropdown__item">Link 3</a>
                                        </div>
                                    </li>
                                </ul>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="c-search-result">

                                <div class="o-media">
                                    <div class="o-media__img u-mr-small">
                                        <div class="c-avatar c-avatar--medium">
                                            <img class="c-avatar__img" src="http://i.pravatar.cc/120?img=36" alt="Adam's Face">
                                        </div>

                                    </div>
                                    <div class="o-media__body">
                                        <h4 class="c-search-result__title">Sue Collins</h4>
                                        <p class="c-search-result__meta">Nature Lover <br> 32 Projects | 590 Stocks</p>
                                    </div>
                                </div>

                                <ul class="c-search-result__gallery">
                                    <li class="c-search-result__gallery-item">
                                        <a href="#">
                                            <img src="https://picsum.photos/240/180?image=60" alt="Image">
                                        </a>
                                    </li>
                                    <li class="c-search-result__gallery-item">
                                        <a href="#">
                                            <img src="https://picsum.photos/240/180?image=61" alt="Image">
                                        </a>
                                    </li>
                                    <li class="c-search-result__gallery-item">
                                        <a href="#">
                                            <img src="https://picsum.photos/240/180?image=62" alt="Image">
                                        </a>
                                    </li>
                                </ul>

                                <ul class="c-search-result__actionlist">
                                    <li class="c-search-result__action">
                                        <a href="#"><i class="fa fa-envelope-o"></i></a>
                                    </li>

                                    <li class="c-search-result__action dropdown">
                                        <a class="dropdown-toggle" href="#" id="searchResult4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                        <div class="c-dropdown__menu dropdown-menu dropdown-menu-right" aria-labelledby="searchResult4">
                                            <a href="#" class="c-dropdown__item">Link 1</a>
                                            <a href="#" class="c-dropdown__item">Link 2</a>
                                            <a href="#" class="c-dropdown__item">Link 3</a>
                                        </div>
                                    </li>
                                </ul>

                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="c-search-result">

                                <div class="o-media">
                                    <div class="o-media__img u-mr-small">
                                        <div class="c-avatar c-avatar--medium">
                                            <img class="c-avatar__img" src="http://i.pravatar.cc/120?img=38" alt="Adam's Face">
                                        </div>

                                    </div>
                                    <div class="o-media__body">
                                        <h4 class="c-search-result__title">Trevor Moody</h4>
                                        <p class="c-search-result__meta">Content Growth Specialist at Envato <br> 90 Projects | 439 Stocks</p>
                                    </div>
                                </div>

                                <ul class="c-search-result__gallery">
                                    <li class="c-search-result__gallery-item">
                                        <a href="#">
                                            <img src="https://picsum.photos/240/180?image=70" alt="Image">
                                        </a>
                                    </li>
                                    <li class="c-search-result__gallery-item">
                                        <a href="#">
                                            <img src="https://picsum.photos/240/180?image=71" alt="Image">
                                        </a>
                                    </li>
                                    <li class="c-search-result__gallery-item">
                                        <a href="#">
                                            <img src="https://picsum.photos/240/180?image=72" alt="Image">
                                        </a>
                                    </li>
                                </ul>

                                <ul class="c-search-result__actionlist">
                                    <li class="c-search-result__action">
                                        <a href="#"><i class="fa fa-envelope-o"></i></a>
                                    </li>

                                    <li class="c-search-result__action dropdown">
                                        <a class="dropdown-toggle" href="#" id="searchResult5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                        <div class="c-dropdown__menu dropdown-menu dropdown-menu-right" aria-labelledby="searchResult5">
                                            <a href="#" class="c-dropdown__item">Link 1</a>
                                            <a href="#" class="c-dropdown__item">Link 2</a>
                                            <a href="#" class="c-dropdown__item">Link 3</a>
                                        </div>
                                    </li>
                                </ul>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="c-search-result">

                                <div class="o-media">
                                    <div class="o-media__img u-mr-small">
                                        <div class="c-avatar c-avatar--medium">
                                            <img class="c-avatar__img" src="http://i.pravatar.cc/120?img=40" alt="Adam's Face">
                                        </div>

                                    </div>
                                    <div class="o-media__body">
                                        <h4 class="c-search-result__title">Verna Stokes</h4>
                                        <p class="c-search-result__meta">Motion Designer at Facebook <br> 11 Projects | 119 Stocks</p>
                                    </div>
                                </div>

                                <ul class="c-search-result__gallery">
                                    <li class="c-search-result__gallery-item">
                                        <a href="#">
                                            <img src="https://picsum.photos/240/180?image=80" alt="Image">
                                        </a>
                                    </li>
                                    <li class="c-search-result__gallery-item">
                                        <a href="#">
                                            <img src="https://picsum.photos/240/180?image=81" alt="Image">
                                        </a>
                                    </li>
                                    <li class="c-search-result__gallery-item">
                                        <a href="#">
                                            <img src="https://picsum.photos/240/180?image=82" alt="Image">
                                        </a>
                                    </li>
                                </ul>

                                <ul class="c-search-result__actionlist">
                                    <li class="c-search-result__action">
                                        <a href="#"><i class="fa fa-envelope-o"></i></a>
                                    </li>

                                    <li class="c-search-result__action dropdown">
                                        <a class="dropdown-toggle" href="#" id="searchResult6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                        <div class="c-dropdown__menu dropdown-menu dropdown-menu-right" aria-labelledby="searchResult6">
                                            <a href="#" class="c-dropdown__item">Link 1</a>
                                            <a href="#" class="c-dropdown__item">Link 2</a>
                                            <a href="#" class="c-dropdown__item">Link 3</a>
                                        </div>
                                    </li>
                                </ul>

                            </div>
                        </div>

                    </div>

                    <div class="row u-mb-xlarge">
                        <div class="col-12">
                            <nav class="c-pagination u-justify-center">
                                <ul class="c-pagination__list">
                                    <li class="c-pagination__item">
                                        <a class="c-pagination__control" href="#">
                                            <i class="fa fa-caret-left"></i>
                                        </a>
                                    </li>

                                    <li class="c-pagination__item"><a class="c-pagination__link" href="#">1</a></li>
                                    <li class="c-pagination__item"><a class="c-pagination__link" href="#">2</a></li>
                                    <li class="c-pagination__item">
                                        <a class="c-pagination__link is-active" href="#">3</a>
                                    </li>
                                    <li class="c-pagination__item"><a class="c-pagination__link" href="#">4</a></li>

                                    <li class="c-pagination__item">
                                        <a class="c-pagination__control" href="#">
                                            <i class="fa fa-caret-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav><!-- // .c-pagination -->
                        </div>
                    </div><!-- // .row -->
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

<!-- Mirrored from zawiastudio.com/dashboard/demo/browse.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Nov 2017 15:23:38 GMT -->
</html>
