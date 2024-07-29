<?php
/* Template Name: Contact us */
?>


<!doctype html>
<html>

<?php include ("include/head.php") ?>

<body>
    <div class="se-pre-con"></div>

    <?php
    // include("include/header.php")
    get_header();
    ?>


    <div class="inner-page-hero-area py-5 mb-3" style="background-image:url(images/contact_us_banner.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center py-3">
                    <div class="inner-page-hero-text">
                        <div class="inner-page-title">contact us</div>
                        <ul class="breadcrumb-menu">
                            <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                            <li class="active">contact us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12 p-3 text-start">
                <div class="heading p-0 m-0">
                    <h3 class="m-0">CONTACT US</h3>
                    <h1 class="mb-3">Main Offices</h1>
                </div>

                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-start contact-page-address">
                    <ul class="p-0 m-0">
                        <li class="mt-3">
                            <div class="icon"><i class="fa-solid fa-location-dot rounded-circle"></i></div>
                            <div class="info">
                                <h5 class="m-0 p-0">Address </h5>
                                <p class="m-0 p-0">Plot. No - A2/334 (Part-II), Phase-2, GIDC, Vatva, Ahmedabad.</p>
                            </div>
                        </li>

                        <li class="mt-3">
                            <div class="icon"><i class="fa-solid fa-phone rounded-circle"></i></div>
                            <div class="info">
                                <h5 class="m-0 p-0">phone </h5>
                                <p class="m-0 p-0">+91 89809 28575</p>
                            </div>
                        </li>

                        <li class="mt-3">
                            <div class="icon"><i class="fa-solid fa-envelope rounded-circle"></i></div>
                            <div class="info">
                                <h5 class="m-0 p-0">emial id </h5>
                                <p class="m-0 p-0"><a href="mailto:info@p3dyes.com"> info@p3dyes.com</a>, <a
                                        href="mailto:export@p3dyes.com">export@p3dyes.com</a></p>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>

            <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-6 col-sm-12 col-12 p-3 text-start">
                <section id="map-section">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3673.805348980869!2d72.63325037399841!3d22.957394718759833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e8972124514bf%3A0xb01c211d02c7c1aa!2sVatva%20GIDC%20phase%202!5e0!3m2!1sen!2sin!4v1721807478012!5m2!1sen!2sin"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </section>
            </div>
        </div>
    </div>



    <?php get_footer(); ?>

    <?php include ("include/external-js.php") ?>

</body>

</html>