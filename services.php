
<?php include('php/secction/header.php') ?>
<!-- Breadcrumb Area -->
<div class="bixol-breadcrumb" data-background="assets/images/home1/hero.jpg">
    <span class="breadcrumb-object"><img src="assets/images/home1/slider-object.png" alt=""></span>
    <div class="container">
        <div class="breadcrumb-content">
            <h1>Services</h1>
            <a href="index.html">Home <i class="fas fa-angle-double-right"></i></a>
            <span>Services</span>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->
    	

        <!-- Services -->
        <section class="bixol-services pt-150">
            <div class="container">
                <div class="bixol-service-wrapper">
                    <div class="row">
                        <?php for ($i=1; $i < 5; $i++) { ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="bixol-single-item sr-item">
                                <div class="bixol-icon-wrapper">
                                    <img src="assets/images/services/<?php echo $i?>.png" alt="">
                                </div>
                                <div class="bixol-sr-content">
                                    <a href="services.php"><h6><?php echo $SN[$i]?></h6></a>
                                    <p><?php echo $SD[$i]?></p>
                                    <a href="services.php" class="bixol-readmore-btn">Read More</a>
                                </div>
                                <div class="bixol-sr-hover">
                                    <div class="img-wrapper">
                                        <img src="assets/images/services/serv/<?php echo $i?>.png" alt="">
                                        <span class="img-shadow"></span>
                                    </div>
                                    <div class="icon-wrapper">
                                        <div class="bixol-img">
                                            <img src="assets/images/services/<?php echo $i?>.png" alt="">
                                        </div>
                                        <span class="bixol-icon-shadow"></span>
                                    </div>
                                    <div class="bixol-sr-content">
                                        <a href="services.php"><h6><?php echo $SN[$i]?></h6></a>
                                        <p><?php echo $SD[$i]?></p>
                                        <a href="services.php" class="bixol-readmore-btn">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                        
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- Services End -->

<?php include('php/secction/footer.php') ?>
