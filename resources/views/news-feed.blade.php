<!doctype html>
<html lang="en-us">

<!-- Mirrored from zawiastudio.com/dashboard/demo/news-feed.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Nov 2017 15:23:38 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>News Feed | Dashboard UI Kit</title>
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

            <div class="u-hidden-down@tablet u-ml-auto">
                <div class="c-field has-icon-right c-navbar__search">
                    <span class="c-field__icon">
                        <i class="fa fa-search"></i>
                    </span>

                    <label class="u-hidden-visually" for="navbar-search">Seach</label>
                    <input class="c-input" id="navbar-search" type="text" placeholder="Search">
                </div>
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

        <div class="container">
            <div class="row">
                <div class="col-xl-3 u-p-zero u-hidden-down@wide">
                    <div class="c-profile-card">
                        <div class="c-profile-card__cover">
                            <img src="https://picsum.photos/530/200?image=20" alt="Adam's profile cover">
                        </div>

                        <div class="c-profile-card__user">
                            <div class="c-profile-card__avatar">
                                <img sr="https://picsum.photos/125/125?image=20" alt="Adam's image">
                            </div>

                            <h4 class="c-profile-card__name">Alejandro Garza
                                <a class="c-profile-card__username" href="#">@Alejandro</a>
                            </h4>
                        </div>

                        <ul class="c-profile-card__stats">
                            <li class="c-profile-card__state">
                                Post <span class="c-profile-card__state-number">594</span>
                            </li>
                            <li class="c-profile-card__state">
                                Followers <span class="c-profile-card__state-number">2,185</span>
                            </li>
                            <li class="c-profile-card__state">
                                Following <span class="c-profile-card__state-number">598</span>
                            </li>
                        </ul>
                    </div><!--// .c-profile -->

                    <div class="c-gallery-card">
                        <div class="c-gallery-card__header">
                            <h4 class="c-gallery-card__title">Best Pictures for Today</h4>
                            <a class="u-text-mute" href="#"><i class="fa fa-cog"></i></a>
                        </div>

                        <div class="c-gallery-card__items">
                            <img class="c-gallery-card__img" src="https://picsum.photos/125/125?image=20" alt="Sea">
                            <img class="c-gallery-card__img" src="https://picsum.photos/125/125?image=25" alt="Sea">
                            <img class="c-gallery-card__img" src="https://picsum.photos/125/125?image=22" alt="Sea">
                            <img class="c-gallery-card__img" src="https://picsum.photos/125/125?image=23" alt="Sea">
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-xl-6">
                    <div class="c-post">
                        <textarea class="c-post__content">I am currently writing a dissertation about whether Web Designers should know how to code their designs or just be the best designer they can be and I was wondering if I could get your thoughts on on this question and if coding is essential to a Web Designer.</textarea>

                        <div class="c-post__toolbar">
                            <a class="c-post__submit c-btn c-btn--info" href="#">
                                <i class="fa fa-picture-o"></i>
                            </a>

                            <a class="c-post__time" href="#">
                                <i class="fa fa-clock-o u-color-blue"></i>Scheduled: 13:50 (GMT+1) 6/4/2014
                            </a>

                            <a class="c-btn c-btn--success u-float-right" href="#" >Post</a>
                        </div>
                    </div>


                    <ol class="c-stream">
                        <li class="c-stream-item o-media">

                            <div class="o-media__img u-mr-small">
                                <div class="c-avatar c-avatar--medium">
                                    <img class="c-avatar__img" src="http://i.pravatar.cc/120?img=60" alt="Adam's face">
                                </div>
                            </div>

                            <div class="c-stream-item__content o-media__body">
                                <div class="c-stream-item__header">
                                    <a class="c-stream-item__name" href="#">Mollie Richardson<span class="c-stream-item__username">@Mollie</span>
                                    </a>
                                    <span class="c-stream-item__time">3m</span>
                                </div>

                                <p class="u-mb-small">I shared this on my fb wall a few months back, and I thought I'd share it here again because it's such a great read. "You already found your passion.” You are just ignoring it. The problem isn't passion. It's never passion. It's priorities.</p>

                                <div class="c-stream-item__gallery">
                                    <img src="https://picsum.photos/325/125?image=62" alt="Image from Unsplash">
                                    <img src="https://picsum.photos/325/125?image=77" alt="Image from Unsplash">
                                </div>

                                <div class="u-flex u-justify-between">
                                    <div class="c-stream-item__actionlist">
                                        <a class="c-stream-item__action" href="#">
                                            <i class="fa fa-heart-o"></i>35
                                        </a>
                                        <a class="c-stream-item__action" href="#">
                                            <i class="fa fa-comment-o"></i>34
                                        </a>
                                        <a class="c-stream-item__action" href="#">
                                            <i class="fa fa-reply"></i>54
                                        </a>
                                    </div>

                                    <a class="c-strem-item__actiontoggle" href="#">
                                        <i class="fa fa-ellipsis-h"></i>
                                    </a>
                                </div>
                            </div>

                        </li>

                        <li class="c-stream-item o-media">

                            <div class="o-media__img u-mr-small">
                                <div class="c-avatar c-avatar--medium">
                                    <img class="c-avatar__img" src="http://i.pravatar.cc/120?img=62" alt="Adam's face">
                                </div>
                            </div>

                            <div class="c-stream-item__content o-media__body">
                                <div class="c-stream-item__header">
                                    <a class="c-stream-item__name" href="#">Mollie Richardson<span class="c-stream-item__username">@Mollie</span>
                                    </a>
                                    <span class="c-stream-item__time">3m</span>
                                </div>

                                <p class="u-mb-small">I shared this on my fb wall a few months back, and I thought I'd share it here again because it's such a great read. "You already found your passion.” You are just ignoring it. The problem isn't passion. It's never passion. It's priorities.</p>

                                <div class="u-flex u-justify-between">
                                    <div class="c-stream-item__actionlist">
                                        <a class="c-stream-item__action u-color-danger" href="#">
                                            <i class="fa fa-heart"></i>35
                                        </a>
                                        <a class="c-stream-item__action" href="#">
                                            <i class="fa fa-comment-o"></i>34
                                        </a>
                                        <a class="c-stream-item__action" href="#">
                                            <i class="fa fa-reply"></i>54
                                        </a>
                                    </div>

                                    <a class="c-strem-item__actiontoggle" href="#">
                                        <img src="img/icon-dots.svg" alt="More">
                                    </a>
                                </div>
                            </div>

                        </li>

                        <li class="c-stream-item o-media">

                            <div class="o-media__img u-mr-small">
                                <div class="c-avatar c-avatar--medium">
                                    <img class="c-avatar__img" src="http://i.pravatar.cc/120?img=65" alt="Adam's face">
                                </div>
                            </div>

                            <div class="c-stream-item__content o-media__body">
                                <div class="c-stream-item__header">
                                    <a class="c-stream-item__name" href="#">Mollie Richardson<span class="c-stream-item__username">@Mollie</span>
                                    </a>
                                    <span class="c-stream-item__time">3m</span>
                                </div>

                                <p class="u-mb-small">I shared this on my fb wall a few months back, and I thought I'd share it here again because it's such a great read. "You already found your passion.” You are just ignoring it. The problem isn't passion. It's never passion. It's priorities.</p>

                                <div class="c-stream-item__gallery">
                                    <img src="https://picsum.photos/325/125?image=66" alt="Image from Unsplash">
                                    <img src="https://picsum.photos/325/125?image=67" alt="Image from Unsplash">
                                </div>

                                <div class="u-flex u-justify-between">
                                    <div class="c-stream-item__actionlist">
                                        <a class="c-stream-item__action" href="#">
                                            <i class="fa fa-heart-o"></i>35
                                        </a>
                                        <a class="c-stream-item__action" href="#">
                                            <i class="fa fa-comment-o"></i>34
                                        </a>
                                        <a class="c-stream-item__action u-color-success" href="#">
                                            <i class="fa fa-reply"></i>54
                                        </a>
                                    </div>

                                    <a class="c-strem-item__actiontoggle" href="#">
                                        <img src="img/icon-dots.svg" alt="More">
                                    </a>
                                </div>
                            </div>

                        </li>
                    </ol><!-- // .c-stream -->

                </div>

                <div class="col-lg-4 col-xl-3 u-p-zero u-hidden-down@desktop">
                    <div class="c-card u-p-small">

                        <div class="u-flex u-justify-between u-align-items-center u-mb-small">
                            <h6 class="u-m-zero">Who to Follow</h6>
                            <a class="u-text-small" href="#">Show All</a>
                        </div>

                        <div class="o-media u-mb-small">
                            <div class="o-media__img">
                                <div class="c-avatar c-avatar--small u-mr-small">
                                    <img class="c-avatar__img" src="http://i.pravatar.cc/100?img=1" alt="Adam's Face">
                                </div>
                            </div>
                            <div class="o-media__body">
                                <a class="u-text-small u-text-dark" href="#">Mollie Richardson</a>
                                <small class="u-text-mute">@Mollie</small>
                                <a href="#" class="c-btn c-btn--small c-btn--secondary">
                                    <i class="fa fa-user-plus u-opacity-medium"></i>Follow
                                </a>
                            </div>
                        </div><!-- // .o-media -->

                        <div class="o-media u-mb-small">
                            <div class="o-media__img">
                                <div class="c-avatar c-avatar--small u-mr-small">
                                    <img class="c-avatar__img" src="http://i.pravatar.cc/100?img=21" alt="Adam's Face">
                                </div>
                            </div>
                            <div class="o-media__body">
                                <a class="u-text-small u-text-dark" href="#">Mollie Richardson</a>
                                <small class="u-text-mute">@Mollie</small>
                                <a href="#" class="c-btn c-btn--small c-btn--secondary">
                                    <i class="fa fa-user-plus u-opacity-medium"></i>Follow
                                </a>
                            </div>
                        </div><!-- // .o-media -->

                        <div class="o-media u-mb-small">
                            <div class="o-media__img">
                                <div class="c-avatar c-avatar--small u-mr-small">
                                    <img class="c-avatar__img" src="http://i.pravatar.cc/100?img=23" alt="Adam's Face">
                                </div>
                            </div>
                            <div class="o-media__body">
                                <a class="u-text-small u-text-dark" href="#">Mollie Richardson</a>
                                <small class="u-text-mute">@Mollie</small>
                                <a href="#" class="c-btn c-btn--small c-btn--secondary">
                                    <i class="fa fa-user-plus u-opacity-medium"></i>Follow
                                </a>
                            </div>
                        </div><!-- // .o-media -->

                        <div class="o-media u-mb-small">
                            <div class="o-media__img">
                                <div class="c-avatar c-avatar--small u-mr-small">
                                    <img class="c-avatar__img" src="http://i.pravatar.cc/100?img=14" alt="Adam's Face">
                                </div>
                            </div>
                            <div class="o-media__body">
                                <a class="u-text-small u-text-dark" href="#">Mollie Richardson</a>
                                <small class="u-text-mute">@Mollie</small>
                                <a href="#" class="c-btn c-btn--small c-btn--secondary">
                                    <i class="fa fa-user-plus u-opacity-medium"></i>Follow
                                </a>
                            </div>
                        </div><!-- // .o-media -->

                        <div class="o-media u-mb-xsmall">
                            <div class="o-media__img">
                                <div class="c-avatar c-avatar--small u-mr-small">
                                    <img class="c-avatar__img" src="http://i.pravatar.cc/100?img=5" alt="Adam's Face">
                                </div>
                            </div>
                            <div class="o-media__body">
                                <a class="u-text-small u-text-dark" href="#">Mollie Richardson</a>
                                <small class="u-text-mute">@Mollie</small>
                                <a href="#" class="c-btn c-btn--small c-btn--secondary">
                                    <i class="fa fa-user-plus u-opacity-medium"></i>Follow
                                </a>
                            </div>
                        </div><!-- // .o-media -->

                    </div><!-- // .c-card -->
                </div>
            </div>
        </div><!-- // .container -->

        <script src="js/main.min.js"></script>

        <!-- Google Analytics-->
        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-88739867-2','auto');ga('send','pageview')
        </script>
        <script src="../../../www.google-analytics.com/analytics.js" async defer></script>
    </body>

<!-- Mirrored from zawiastudio.com/dashboard/demo/news-feed.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Nov 2017 15:23:38 GMT -->
</html>
