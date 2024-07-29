<!doctype html>
<html>

<?php include("include/head.php")?>

<body>
<div class="se-pre-con"></div>
    
<?php 
// include("include/header.php")
get_header();
?>     
    
<?php include("include/slider.php")?>    
    
<div class="container">
    <div class="row align-items-center">
        <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12 text-start my-3">
            <img src="<?php echo get_template_directory_uri() ?>/images/home.jpg" class="img-fluid img-box">
        </div>
        
        <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12 text-start my-3">
            <div class="heading p-0 m-0">
                <h3 class="m-0">WELCOME TO</h3>
                <h1 class="mb-3">P3 Dyes</h1>                    
            </div>
            <p>We are leading manufacturer of Direct Dyes and Reactive dyes. We also manufacturing with outside job work in solvent dyes and trading in food dyes. we are <strong>ISO 9001:2015 certified</strong> company. We have presence in local market. We also supply to merchant exporter which presence in <strong>Europe, Latin America, China, Brazil</strong>.</p>

            <p>We manufacture the S. O. Dyes which use in <span>Leather, Paper, Textile, Ink, Application</span>.</p>
            
            <a class="btn btn-primary mt-2 px-4 text-uppercase" href="about-us.php" role="button">read more <i class="fa-solid fa-arrow-right ps-2"></i></a>
        </div>
        
    </div>
    
    <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 text-start my-3 why-choose-us">
                    <ul>
                        <li>
                            <div class="why-choose-us-img"><i class="fa-solid fa-clipboard-check rounded-circle"></i> </div>
                            <div class="why-choose-us-info">
                            <h5 class="mb-1">Quality Work</h5>
                            <p>We always work with quality assurance. First we have checked material in our lab properly with our highly qualified and highly experienced staff. We have separate packing department and separate laboratory and separate production department and coordination with internal department.</p>
                            </div>
                        </li>
                    </ul>
                </div> 
            
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 text-start my-3 why-choose-us">
                    <ul>
                        <li>
                            <div class="why-choose-us-img"><i class="fa-solid fa-truck-fast rounded-circle"></i></div>
                            <div class="why-choose-us-info">
                            <h5 class="mb-1">Fast Delivery</h5>
                            <p>We supply to our valuable customer as per his requirement, we always committed to proper time delivery than. We never delay to supply our customer. we also in touch with freight forwarder than we can catch the nearest vessel than we supply to fast.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            
                
                        
            </div>
</div>    
    
<?php include("include/products.php")?>    
    
<?php include("include/home-form.php")?>
    
<?php get_footer()?>
    
<?php include("include/external-js.php")?>    
      
</body>
</html>