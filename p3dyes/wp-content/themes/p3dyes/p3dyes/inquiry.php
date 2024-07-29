<?php
/* Template Name: Inquiry */
?>

<!doctype html>
<html>

<?php include ("include/head.php") ?>

<body>
    <div class="se-pre-con"></div>

    <<?php
    // include("include/header.php")
    get_header();
    ?>


        <div class="inner-page-hero-area py-5 mb-3" style="background-image:url(images/inquiry_banner.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center py-3">
                        <div class="inner-page-hero-text">
                            <div class="inner-page-title">inquiry</div>
                            <ul class="breadcrumb-menu">
                                <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                                <li class="active">inquiry</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 p-3 text-center">
                    <div class="heading p-0 m-0">
                        <h3 class="m-0">inquiry</h3>
                        <h1 class="mb-3">Request for Quote</h1>
                    </div>
                    <p>Please Feel Free To Contact Us. We’re Super Happy To Talk To You. Feel Free To Ask Anything.</p>
                </div>

                <form class="form" name="form" action="#" method="post" onsubmit="return formvalid();">
                    <div class="row">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 my-3">
                            <input type="text" name="" id="disabledTextInput" class="form-control" placeholder="Name"
                                required="">
                        </div>

                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 my-3">
                            <input type="text" name="nm" id="disabledTextInput" class="form-control"
                                placeholder="Company Name" required="">
                        </div>

                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 my-3">
                            <input type="text" name="email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
                                id="disabledTextInput" class="form-control" placeholder="Email ID" required="">
                        </div>

                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 my-3">
                            <input type="text" name="ph" pattern="[789][0-9]{9}" id="disabledTextInput"
                                class="form-control" placeholder="Mobile No" required="">
                        </div>

                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 my-3">
                            <select class="form-select" aria-label="Default select example">
                                <option value="" selected="selected">Select Product</option>
                                <option value="1">Direct Dyes</option>
                                <option value="2">Reactive Dyes</option>
                                <option value="3">Dyes Intermediates</option>
                            </select>
                        </div>

                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 my-3">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                placeholder="Message"></textarea>
                        </div>

                        <div class=" col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 my-3">
                            <button name="submit" id="submit_contact" type="submit"
                                class="btn btn-primary px-4 text-uppercase">Send Message</button>
                        </div>




                    </div>
                </form>

            </div>
        </div>

        <?php get_footer() ;?>

        <?php include ("include/external-js.php") ?>

</body>

</html>