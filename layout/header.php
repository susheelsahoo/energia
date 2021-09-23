<?php
$tollfree_label = 'TOLL-FREE NO';
$tollfree = '+91 9081-500-500';
$email = 'info@merphyenergy.com';
$address = 'B-87, 2nd Floor, Sector 60, Noida, Pincode 201301, G.B.Nagar (U.P) INDIA';

?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="Susheel Sahoo" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Merphy Energy, Noida" />
    <title>Home -Merphy Energy, Noida</title>
    <link href="assets/images/favicon/favicon.png" rel="icon" />

    <link rel="preconnect" href="https://fonts.gstatic.com/" />
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&amp;display=swap"
        rel="stylesheet" />

    <link href="assets/css/vendor.min.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />

</head>

<body>
    <div class="preloader">
        <div class="dual-ring"></div>
    </div>

    <div class="wrapper clearfix" id="wrapperParallax">

        <header class="header header-light header-topbar header-topbar1 header-shadow" id="navbar-spy">
            <div class="top-bar">
                <div class="block-left">
                    <div class="top-contact">
                        <div class="contact-infos"><i class="energia-phone-Icon"></i>
                            <div class="contact-body">
                                <p>TollFree: <a href="tel:<?= $tollfree ?>"><?= $tollfree ?></a></p>
                            </div>
                        </div>
                        <div class="contact-infos"><i class="energia-email--icon"></i>
                            <div class="contact-body">
                                <p>email: <a href="mail:<?= $email ?>"><?= $email ?></a></p>
                            </div>
                        </div>
                        <div class="contact-infos"><i class="energia-clock-Icon"></i>
                            <div class="contact-body">
                                <p>hours: Mon-Fri: 8am – 7pm </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-right">

                    <div class="social-links"><a class="share-facebook" href="javascript:void(0)"><i
                                class="energia-facebook"></i></a><a class="share-instagram" href="javascript:void(0)"><i
                                class="energia-twitter"></i></a><a class="share-twitter" href="javascript:void(0)"><i
                                class="energia-youtube"></i></a></div>

                    <div class="topbar-links">
                        <a href="about-us.php">about us</a>
                        <a href="careers.php">careers</a>
                        <a href="contact.php">contact</a></div>

                </div>
            </div>
            <nav class="navbar navbar-expand-lg navbar-sticky" id="primary-menu"><a class="navbar-brand"
                    href="index.html"><img class="logo logo-dark" src="assets/images/logo/logo-dark.jpeg"
                        alt="Merphy Energy Logo" /><img class="logo logo-mobile" src="assets/images/logo/logo-mobile.jpeg"
                        alt="Merphy Energy Logo" /></a>
                <div class="module-holder module-holder-phone">
                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false"
                        aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                </div>
                <div class="collapse navbar-collapse" id="navbarContent">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item" id="Home" data-hover=""><a href="index.php"><span>Home</span></a></li>
                        <li class="nav-item" id="about" data-hover=""><a href="about-us.php"><span>about us</span></a></li>
                        <li class="nav-item has-dropdown" id="departments" data-hover=""><a class="dropdown-toggle"
                                href="services.php" data-toggle="dropdown"><span>Inverters & Batteries</span></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="services-turbines.php"><span>High Capacity Inverters</span></a>
                                </li>
                                <li class="nav-item"><a href="services-turbines.php"><span>Inverters</span></a>
                                </li>
                                <li class="nav-item"><a href="services-turbines.php"><span>Inverter Batteries</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-dropdown" id="departments" data-hover=""><a class="dropdown-toggle"
                                href="services.php" data-toggle="dropdown"><span>SOLAR SOLUTIONS</span></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="services-turbines.php"><span>Solar Panels </span></a>
                                </li>
                                <li class="nav-item"><a href="services-turbines.php"><span>Solar Charge Controller </span></a>
                                </li>
                                <li class="nav-item"><a href="services-turbines.php"><span>Solar LED Street Light </span></a></li>
                                <li class="nav-item"><a href="services-turbines.php"><span>Solar Battery </span></a></li>
                            </ul>
                        </li>
                        
                        <li class="nav-item" id="careers" data-hover=""><a href="careers.php"><span>careers</span></a>
                        </li>

                        <li class="nav-item" id="contact" data-hover=""><a href="contact.php"><span>contact</span></a>
                        </li>
                    </ul>
                    <div class="module-holder">
                        <div class="module-contact"><a class="btn btn--primary " href="request-quote.php">
                                request a quote<i class="energia-arrow-right"></i></a></div>
                    </div>

                </div>

            </nav>

        </header>
        <div class="module-content module-search-warp">
            <div class="pos-vertical-center">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                            <form class="form-search">
                                <input class="form-control" type="text" placeholder="type words then enter" />
                                <button></button>
                            </form>

                        </div>

                    </div>

                </div>

            </div><a class="module-cancel" href="#"><i class="fas fa-times"></i></a>

        </div>