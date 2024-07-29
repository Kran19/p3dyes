<header class="sticky-top">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                <div class="logo">
                    <a href="<?php ?>"><img src="<?php echo get_template_directory_uri() ?>/images/logo.svg"
                            class="img-fluid"></a>
                </div>

                <div class="header-right">

                    <div
                        class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-end call-now d-xxl-block d-xl-block d-lg-block d-none">
                        <ul>
                            <li><i class="fa-solid fa-phone rounded-circle"></i> +91 89809 28575</li>
                            <li><a href="mailto:info@p3dyes.com"><i class="fa-solid fa-envelope rounded-circle"></i>
                                    info@p3dyes.com</a></li>
                        </ul>
                    </div>
                    <div class="menu-mobile-trigger rounded-circle"> <a type="button"><i
                                class="fa-solid fa-bars "></i></a> </div>

                    <section id="big-menu">

                        <div class="wrapper">

                            <!-- Section: Navbar Menu -->
                            <div class="header-item-center">
                                <div class="overlay"></div>
                                <nav class="menu">
                                    <div class="menu-mobile-header">
                                        <button type="button" class="menu-mobile-arrow"><i
                                                class="ion ion-ios-arrow-back"></i></button>
                                        <div class="menu-mobile-title"></div>
                                        <button type="button" class="menu-mobile-close"><i
                                                class="ion ion-ios-close"></i></button>
                                    </div>
                                    <ul class="menu-section">

                                        <li><a href="<?php echo home_url('/') ?>">home</a></li>

                                        <li><a href="<?php echo home_url('/about-us/')?>">about us</a>
                                        </li>

                                        <li class="menu-item-has-children">
                                            <a href="#">our products <i class="ion ion-ios-arrow-down"></i></a>
                                            <div class="menu-subs menu-column-1">
                                                <ul>
                                                    <li><a
                                                            href="<?php echo get_template_directory_uri() ?>/direct-dyes.php">Direct
                                                            Dyes</a></li>
                                                    <li><a
                                                            href="<?php echo get_template_directory_uri() ?>/reactive-dyes.php">Reactive
                                                            Dyes</a></li>
                                                    <li><a
                                                            href="<?php echo get_template_directory_uri() ?>/dyes-intermediates.php">Dyes
                                                            Intermediates</a></li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li><a href="<?php echo get_permalink(18) ?>">Inquiry</a>
                                        </li>

                                        <li><a href="<?php echo get_permalink(16)?>">contact
                                                us</a></li>

                                    </ul>
                                </nav>
                            </div>
                        </div>

                    </section>
                </div>


            </div>
        </div>
    </div>
</header>