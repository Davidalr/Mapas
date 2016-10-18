<?php
/*
Description: The Header
Theme: Premio-nacional-teatro
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> <?php the_title() ?> </title>

    <meta name="description" content="<?php bloginfo('description'); ?>"/>

    <link rel="profile" href="http://gmpg.org/xfn/11">

    <!---- Favicon -- -->
    <link rel="icon" type="image/png" href="<?php bloginfo('template_url') ?>/assets/images/favicon/favicon-32x32.png"
          sizes="32x32"/>

    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300italic,400italic,700,700italic'
          rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/normalize.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/fonts.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/style.css">

    <?php wp_head(); ?>
    <style>
        <?php if( is_front_page()){
        ?>
        .Header img{
            position:static
        }
        <?php
        } ;?>
    </style>

</head>

<body <?php body_class(); ?> data-urlBody="<?php bloginfo('url') ?>">

<header class="Header" style="<?php if( is_front_page()){ echo 'background:none';} ;?>" >

    <figure>
        <?php the_post_thumbnail(); ?>
    </figure>
    <nav>
        <?php wp_nav_menu(array('theme_location' > 'menuHeader')); ?>
        <!-- <ul class="Nav row between">
            <li><a href="/">QUÉ ES MAPAS</a></li>
            <li><a href="<?php /*bloginfo('url') */ ?>/calendario">CALENDARIO</a></li>
            <li><a href="<?php /*bloginfo('url') */ ?>/santa-cruz">SANTA CRUZ</a></li>
            <li><a id="Contact" href="#">CONTACTO</a></li>
            <li><a href="">ES EN</a></li>
        </ul>-->
    </nav>
    <ul class="Nav-social">
        <li>
            <a href="https://www.facebook.com/MAPASMercadoCultural/" target="_blank">
                <svg width="12px" height="23px" viewBox="0 0 12 23" version="1.1" xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink">
                    <path
                        d="M7.5752,22.9604 L7.5752,11.8754 L10.6042,11.8754 L11.0742,7.4394 L7.5762,7.4394 L7.5802,5.8354 C7.5802,4.9704 7.5802,4.6124 8.7982,4.6124 L11.0162,4.6124 L11.0162,0.1754 L7.6532,0.1754 C4.1012,0.1754 2.3742,1.9024 2.3742,5.4554 L2.3742,7.4394 L0.0812,7.4394 L0.0812,11.8754 L2.3742,11.8754 L2.3742,22.9604 L7.5752,22.9604 Z"
                        id="Fill-4" stroke="none" fill="#352822" fill-rule="evenodd"></path>
                </svg>
            </a>
        </li>
        <li>
            <a href="https://twitter.com/@MAPASmercado" target="_blank">

                <svg width="26px" height="21px" viewBox="0 0 26 21" version="1.1" xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink">
                    <!-- Generator: Sketch 39.1 (31720) - http://www.bohemiancoding.com/sketch -->
                    <desc>Created with Sketch.</desc>
                    <defs></defs>
                    <path
                        d="M7.5591,20.7339 C8.5091,20.7339 9.3661,20.6329 10.0791,20.5339 C15.7071,19.7459 18.7021,15.7719 18.8221,15.6119 C21.6741,11.9889 21.8301,8.6959 21.9061,7.1139 C21.9241,6.7299 21.9451,6.2959 21.9911,6.2239 C22.6881,5.9089 24.0971,4.1619 24.2561,3.9649 L25.2081,2.7729 L23.8691,3.5019 C23.4231,3.7449 22.8861,3.8799 22.4311,3.9549 C23.4241,2.9589 23.5411,1.9159 23.5471,1.8629 L23.6601,0.7419 L22.9931,1.6499 C22.6791,2.0779 21.3281,2.4519 20.4411,2.6139 C19.5801,1.6809 18.4321,1.1889 17.1081,1.1889 C15.9951,1.1889 15.1501,1.5329 15.1301,1.5429 C11.9861,2.6449 11.8091,5.8279 11.8421,6.8989 C6.0291,6.6479 2.7961,2.2309 2.7641,2.1869 L2.4621,1.7649 L2.2371,2.2309 C0.8641,5.0809 2.0791,7.1759 2.9391,8.1819 C2.4351,8.0449 1.9661,7.8389 1.9591,7.8359 L1.5341,7.6479 L1.5271,8.1119 C1.4941,10.5479 3.1321,11.9769 4.2951,12.6829 C4.0651,12.6859 3.8141,12.6989 3.5831,12.6879 L3.1761,12.6859 L3.2881,13.0779 C3.9191,15.3159 5.9731,16.1049 7.1081,16.3729 C4.9141,17.7849 2.8231,18.0079 1.7201,18.0079 C1.3641,18.0079 1.1561,17.9829 1.1451,17.9809 L0.0001,17.8379 L0.9211,18.5319 C2.8871,20.0139 5.0581,20.7339 7.5591,20.7339"
                        id="Fill-1" stroke="none" fill="#352822" fill-rule="evenodd"></path>
                </svg>
            </a>
        </li>
        <li>
            <a href="https://www.instagram.com/mapasmercadocultural/" target="_blank">
                <svg width="24px" height="24px" viewBox="0 85 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink">
                    <!-- Generator: Sketch 39.1 (31720) - http://www.bohemiancoding.com/sketch -->
                    <desc>Created with Sketch.</desc>
                    <defs></defs>
                    <g id="Group" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"
                       transform="translate(0.000000, 85.000000)">
                        <path
                            d="M21.9615,16.2478 C21.9615,19.3278 19.4555,21.8328 16.3745,21.8328 L8.3125,21.8328 C5.2325,21.8328 2.7275,19.3278 2.7275,16.2478 L2.7275,8.1848 C2.7275,5.1048 5.2325,2.6008 8.3125,2.6008 L16.3745,2.6008 C19.4555,2.6008 21.9615,5.1048 21.9615,8.1848 L21.9615,16.2478 Z M17.2375,0.6088 L7.4505,0.6088 C3.7485,0.6088 0.7365,3.6208 0.7365,7.3228 L0.7365,17.1108 C0.7365,20.8118 3.7485,23.8238 7.4505,23.8238 L17.2375,23.8238 C20.9405,23.8238 23.9525,20.8118 23.9525,17.1108 L23.9525,7.3228 C23.9525,3.6208 20.9405,0.6088 17.2375,0.6088 L17.2375,0.6088 Z"
                            id="Fill-7" fill="#352822"></path>
                        <path
                            d="M12.3438,15.99 C10.2628,15.99 8.5708,14.297 8.5708,12.217 C8.5708,10.136 10.2628,8.444 12.3438,8.444 C14.4248,8.444 16.1178,10.136 16.1178,12.217 C16.1178,14.297 14.4248,15.99 12.3438,15.99 M12.3438,7.015 C9.4758,7.015 7.1428,9.348 7.1428,12.217 C7.1428,15.084 9.4758,17.418 12.3438,17.418 C15.2128,17.418 17.5458,15.084 17.5458,12.217 C17.5458,9.348 15.2128,7.015 12.3438,7.015"
                            id="Fill-9" fill="#352822"></path>
                        <path
                            d="M18.6148,6.9714 C18.2258,6.9714 17.9088,6.6554 17.9088,6.2654 C17.9088,5.8764 18.2258,5.5594 18.6148,5.5594 C19.0048,5.5594 19.3218,5.8764 19.3218,6.2654 C19.3218,6.6554 19.0048,6.9714 18.6148,6.9714 M18.6148,4.9454 C17.8858,4.9454 17.2948,5.5374 17.2948,6.2654 C17.2948,6.9944 17.8858,7.5864 18.6148,7.5864 C19.3438,7.5864 19.9368,6.9944 19.9368,6.2654 C19.9368,5.5374 19.3438,4.9454 18.6148,4.9454"
                            id="Fill-11" fill="#352822"></path>
                    </g>
                </svg>
            </a>
        </li>
    </ul>
</header>

<aside class="Nav-mobile ">
    <div class="row center middle " style="height: 100vh">
    <?php wp_nav_menu(array('theme_location' > 'menuHeader')); ?>
    </div>
</aside>
<div class="Menu-mobile">
    <span></span>
    <span></span>
    <span></span>
</div>
<main class="<?php echo $post->post_name; ?>">
