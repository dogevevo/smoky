
        <!-- Services -->
        <section class="bixol-services">
            <div class="container">
                <div class="bixol-service-wrapper bixol-service-slider">
                    <?php for ($i=1; $i <= 3; $i++) { ?>
                        <div class="bixol-single-item">
                            <div class="bixol-icon-wrapper">
                                <img src="assets/images/services/<?php echo $i?>.png" alt="">
                            </div>
                            <div class="bixol-sr-content">
                                <a href="service-details.html"><h6><?php echo $SN[$i]?></h6></a>
                                <p><?php echo $SD[$i]?></p>
                                <a href="index.html" class="bixol-readmore-btn">Read More</a>
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
                                    <a href="#"><h6><?php echo $SN[$i]?></h6></a>
                                    <p><?php echo $SD[$i]?></p>
                                    <a href="service-details.html" class="bixol-readmore-btn">Read more</a>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                </div>
            </div>
        </section>
        <!-- Services End -->