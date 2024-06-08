<?php include('php/secction/header.php')?>

<div class="bigslam-page-title-wrap  bigslam-style-medium bigslam-left-align">
                <div class="bigslam-header-transparent-substitute"></div>
                <div class="bigslam-page-title-overlay"></div>
                <div class="bigslam-page-title-container bigslam-container">
                    <div class="bigslam-page-title-content bigslam-item-pdlr">
                        <h1 class="bigslam-page-title">Thank you </h1>
                        <!--div class="bigslam-page-caption">Theme's Elements</div-->
                    </div>
                </div>
            </div>
<div class="gdlr-core-pbf-wrapper " style="padding: 110px 0px 50px 0px;">
    <div class="gdlr-core-pbf-background-wrap">
        <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
            style="background-image: url(upload/service-bg-3.jpg) ;background-size: cover ;background-position: center ;"
            data-parallax-speed="0.8"></div>
    </div>
    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
            <div class="gdlr-core-pbf-element">
                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr"
                    style="padding-bottom: 70px ;"><span
                        class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption"
                        style="font-size: 17px ;color: #dbdbdb ;margin-bottom: 15px ;">Thank you!</span>
                    <div class="gdlr-core-title-item-title-wrap ">
                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title "
                            style="font-size: 38px ;text-transform: none ;color: #ffffff ;">We will answer as soon as posible.<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span></h3>
                    </div>
                </div>
            </div>



            <style>
           
               

                #success {
                    text-align: center;
                    background-color: white;
                    padding: 20px;
                    border-radius: 10px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                }

                .icon {
                    margin-bottom: 20px;
                }
            </style>

            <div id="success">
                <div class="icon icon--order-success svg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="72px" height="72px">
                        <g fill="none" stroke="#8EC343" stroke-width="2">
                            <circle cx="36" cy="36" r="35"
                                style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;"></circle>
                            <path d="M17.417,37.778l9.93,9.909l25.444-25.393"
                                style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
                        </g>
                    </svg>
                </div>
                <h4><span>Request successfully sent!</span><br>Thank you for your time</h4>
                <small id="redirect-message">You will be redirected back in 10 seconds.</small>
            </div>

            <script>
                // Función para redirigir después de un tiempo determinado
                setTimeout(function () {
                    window.location.href = "index.php";
                }, 10000); // 10000 milisegundos = 10 segundos
            </script>









        </div>
    </div>
</div>

<?php include('php/secction/footer.php') ?>