<?php @session_start();?>
<!DOCTYPE html>
<?php include 'php/text.php';?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Smoky Mountain Cup Tennessee</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel='stylesheet' href='plugins/goodlayers-core/plugins/fontawesome/font-awesome.css' type='text/css'
        media='all'>
    <link rel='stylesheet' href='plugins/goodlayers-core/plugins/elegant/elegant-font.css' type='text/css' media='all'>
    <link rel='stylesheet' href='plugins/goodlayers-core/plugins/style.css' type='text/css' media='all'>
    <link rel='stylesheet' href='plugins/goodlayers-core/include/css/page-builder.css' type='text/css' media='all'>
    <link rel='stylesheet' href='plugins/revslider/public/assets/css/rs6.css' type='text/css' media='all'>
    <link rel='stylesheet' href='plugins/sportspress/assets/css/sportspress.css' type='text/css' media='all'>
    <link rel='stylesheet' href='plugins/sportspress/assets/css/icons.css' type='text/css' media='all'>
    <link rel='stylesheet' href='css/style-core.css' type='text/css' media='all'>
    <link rel='stylesheet' href='css/bigslam-style-custom.css' type='text/css' media='all'>
    <link rel='stylesheet' href='plugins/google-map-plugin/assets/css/frontend.css' type='text/css' media='all'>
    <link rel="stylesheet" href="js/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="js/owlcarousel/assets/owl.theme.default.min.css">
      <link rel="icon" type="image/x-icon" href="upload/logo.png" />

    <link rel='stylesheet'
        href='https://fonts.googleapis.com/css?family=Roboto+Condensed%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%7CRoboto%3A100%2C100italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C700%2C700italic%2C900%2C900italic%7CMerriweather%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%2C900%2C900italic%7CLora%3Aregular%2Citalic%2C700%2C700italic&subset=cyrillic-ext%2Cvietnamese%2Clatin%2Ccyrillic%2Cgreek-ext%2Clatin-ext%2Cgreek&ver=5.3'
        type='text/css' media='all'>



        <body
    class="home page-template-default page page-id-4957 theme-bigslam gdlr-core-body woocommerce-no-js bigslam-body bigslam-body-front bigslam-full gdlr-core-link-to-lightbox">
    <div class="bigslam-mobile-header-wrap">
        <div class="bigslam-mobile-header bigslam-header-background bigslam-style-slide" id="bigslam-mobile-header">
            <div class="bigslam-mobile-header-container bigslam-container">
                <div class="bigslam-logo  bigslam-item-pdlr">
                    <div class="bigslam-logo-inner">
                        <a href="index.php"><img src="upload/logo.png" alt="" width="200" height="191"
                                title="logo"></a>
                    </div>
                </div>
                <div class="bigslam-mobile-menu-right">
                    <div class="bigslam-main-menu-search" id="bigslam-mobile-top-search"><i class="fa fa-search"></i>
                    </div>
                    <div class="bigslam-top-search-wrap">
                        <div class="bigslam-top-search-close"></div>

                        <div class="bigslam-top-search-row">
                            <div class="bigslam-top-search-cell">
                                <form role="search" method="get" class="search-form" action="index.php">
                                    <input type="text" class="search-field bigslam-title-font" placeholder="Search..."
                                        value="" name="s">
                                    <div class="bigslam-top-search-submit"><i class="fa fa-search"></i></div>
                                    <input type="submit" class="search-submit" value="Search">
                                    <div class="bigslam-top-search-close"><i class="icon_close"></i></div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="bigslam-overlay-menu bigslam-mobile-menu" id="bigslam-mobile-menu"><a
                            class="bigslam-overlay-menu-icon bigslam-mobile-menu-button bigslam-mobile-button-hamburger"
                            href="#"><span></span></a>
                        <div class="bigslam-overlay-menu-content bigslam-navigation-font">
                            <div class="bigslam-overlay-menu-close"></div>
                            <div class="bigslam-overlay-menu-row">
                                <div class="bigslam-overlay-menu-cell">
                                    <ul id="menu-main-navigation" class="menu">
                                        <li class="menu-item menu-item-home current-menu-item "><a href="index.php" aria-current="page">Home</a></li>
                                        <li class="menu-item "><a href="categories.php">Categories</a></li>
                                        
                                        <li class="menu-item "><a href="schedule.php">Schedule</a></li>
                                        
                                        <li class="menu-item menu-item-type-post_type menu-item-object-sp_team"><a href="about.php">About</a></li>
                                        <li class="menu-item menu-item-has-children"><a href="#">SportsPress</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item menu-item-has-children"><a href="#">Game</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a href="games-details.php">Games Details</a></li>
                                                        <li class="menu-item"><a href="games-results.php">GameResults</a></li>
                                                        <li class="menu-item"><a href="games-boxScores.php">Game Box Scores</a></li>
                                                        <li class="menu-item"><a href="games-calendar.php">Game Calendar</a></li>
                                                        <li class="menu-item"><a href="games-list.php">Game List</a></li>
                                                        <li class="menu-item"><a href="games-blocks.php">Game Blocks</a></li>
                                                        
                                                    </ul>
                                                </li>
                                                <li class="menu-item menu-item-has-children"><a href="gallery.php">Gallery</a></li>
                                            </ul>
                                        </li>

                                        <li class="menu-item "><a href="gallery.php">Gallery</a></li>
                                        <!-- <li class="menu-item "><a href="blog.php">Blog</a> </li> -->
                                        <li class="menu-item"><a href="contact.php">Contact</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bigslam-body-outer-wrapper ">
        <div class="bigslam-body-wrapper clearfix  bigslam-with-transparent-header bigslam-with-frame">
            <div class="bigslam-header-background-transparent">
                <div class="bigslam-top-bar">
                    <div class="bigslam-top-bar-background"></div>
                    <div class="bigslam-top-bar-container clearfix bigslam-top-bar-full ">
                        <div class="bigslam-top-bar-left bigslam-item-pdlr"><span
                                class="bigslam-upcoming-match-wrapper"><span
                                    class="bigslam-upcoming-match-title">Upcoming Match</span><span
                                    class="bigslam-upcoming-match-link">Rocky Top Sport World Stadium<span
                                        class="bigslam-sep">/</span>July 27, 2024 <br></span>
                            </span>
                        </div>
                        <div class="bigslam-top-bar-right bigslam-item-pdlr">
                            <div class="bigslam-top-bar-right-social"><a
                                    href="https://www.facebook.com/Smokymountaincup" target="_blank"
                                    class="bigslam-top-bar-social-icon" title="facebook"><i
                                        class="fa fa-facebook"></i></a>
                                         <a
                                        href="https://www.instagram.com/smokymountaincup?utm_source=qr&igsh=NXhvcGNqZnpzNzhi" target="_blank" rel="noopener noreferrer"><i class="fa fa-instagram"
                                            style="font-size: 20px ;color: #8a99c0 ;margin-right: 20px ;"></i></a> 
                                            <!--a href="#" target="_blank"
                                    class="bigslam-top-bar-social-icon" title="flickr"><i
                                        class="fa fa-flickr"></i></a><a href="#" target="_blank"
                                    class="bigslam-top-bar-social-icon" title="pinterest"><i
                                        class="fa fa-pinterest-p"></i></a><a href="#" target="_blank"
                                    class="bigslam-top-bar-social-icon" title="twitter"><i
                                        class="fa fa-twitter"></i></a><a href="#" target="_blank"
                                    class="bigslam-top-bar-social-icon" title="vimeo"><i class="fa fa-vimeo"></i></a-->
                            </div>
                        </div>
                    </div>
                </div>
                <header
                    class="bigslam-header-wrap bigslam-header-style-plain  bigslam-style-splitted-menu bigslam-sticky-navigation bigslam-style-slide">
                    <div class="bigslam-header-background"></div>
                    <div class="bigslam-header-container  bigslam-header-full">

                        <div class="bigslam-header-container-inner clearfix">
                            <div class="bigslam-navigation bigslam-item-pdlr clearfix ">
                                <div class="bigslam-main-menu" id="bigslam-main-menu">
                                    <ul id="menu-main-navigation-1" class="sf-menu">
                                        <li class="menu-item menu-item-home current-menu-item bigslam-normal-menu"><a  href="index.php">Home</a></li>
                                        <li class="menu-item menu-item-has-children bigslam-normal-menu"><a href="schedule.php" class="sf-with-ul-pre">Schedule</a></li>
                                        <!-- <li class="menu-item menu-item-has-children bigslam-normal-menu"><a href="leaguetable.php" class="sf-with-ul-pre">LeagueTable</a> </li> -->
                                        <li class="menu-item menu-item-type-post_type menu-item-object-sp_team bigslam-normal-menu"><a href="about.php">About </a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-sp_team bigslam-normal-menu"><a href="categories.php">Categories</a></li>
                                        <li class="bigslam-center-nav-menu-item"><div class="bigslam-logo  bigslam-item-pdlr"><div class="bigslam-logo-inner"><a href="index.php"><img src="upload/logo.png" alt="" width="200"height="191" title="logo"></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="menu-item menu-item-has-children bigslam-normal-menu"><a href="#" class="sf-with-ul-pre">SportsPress</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item menu-item-has-children" data-size="60"><a href="#"
                                                        class="sf-with-ul-pre">Game</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a href="games-details.php">GamesDetails</a></li>
                                                        <li class="menu-item"><a href="games-results.php">Game Results</a></li>
                                                        <li class="menu-item"><a href="games-boxScores.php">Game Box Scores</a></li>
                                                        <li class="menu-item"><a href="games-calendar.php">GameCalendar</a></li>
                                                        <li class="menu-item"><a href="games-list.php">Game List</a></li>
                                                        <li class="menu-item"><a href="games-blocks.php">Game Blocks</a></li>
                                                    </ul>
                                                </li>
                                                <!-- <li class="menu-item menu-item-has-children" data-size="60"><a href="#" class="sf-with-ul-pre">Player</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a href="player-details.php">Player Details</a></li>
                                                        <li class="menu-item"><a href="player-statics.php">PlayerStatics</a></li>
                                                        <li class="menu-item"><a href="player-list.php">Player List</a></li>
                                                        <li class="menu-item"><a href="player-gallery.php">PlayerGallery</a></li>
                                                    </ul>
                                                </li> -->
                                                <!-- <li class="menu-item" data-size="60"><a href="leaguetable.php">LeagueTable</a></li> -->
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children bigslam-normal-menu"><a href="gallery.php"class="sf-with-ul-pre">Gallery</a> </li>
                                        <!-- <li class="menu-item menu-item-has-children bigslam-normal-menu"><a href="blog.php" class="sf-with-ul-pre">Blog</a></li> -->
                                        <li class="menu-item menu-item-has-children bigslam-mega-menu"><a href="contact.php" class="sf-with-ul-pre">Contact</a></li>
                                    </ul>
                                    <div class="bigslam-navigation-slide-bar bigslam-style-2"
                                        id="bigslam-navigation-slide-bar"></div>
                                </div>
                    
                            </div>
                            <!-- bigslam-navigation -->
                        </div>
                        <!-- bigslam-header-inner -->
                    </div>
                    <!-- bigslam-header-container -->

                </header>
                <!-- header -->
            </div>