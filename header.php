<!DOCTYPE html>
<html lang=" <?php language_attributes(); ?> "> <!-- CEO dil  -->

<head>
    <meta charset=" <?php bloginfo('charset'); ?> ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <?php //wp_title();  fonksiyon sayfasında ekledik ceo için title taglerini kaldırdık ?> 
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header>
        <section class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="social-media-icons col-xl-9 col-md-7 col-sm-7 col-5">
                      <?php
                      //social media icons widgets 
                         if(is_active_widget('social-media')){
                             dynamic_sidebar( 'social-media' );
                         }
                       ?>
                    </div>
                    <div class="search col-xl-3 col-md-5 col-sm-5 col-7 text-right"> <?php get_search_form( $echo = true ) ?> </div>
                </div>

            </div>

        </section>

        <section class="menu-area">
            <div class="container">
                <div class="row">
                    <div class="align">
                        <section class="logo col-md-2 col-sm-12 col-12 text-center"> <?php the_custom_logo(); ?>  </section>
                        <nav class="main-menu col-md-10 text-right">
                        <!-- to get menu items -->
                        <?php wp_nav_menu(array(
                            "menu_lacation"=>'top_menu'
                        )); ?>
                        </nav>
                    </div>
                </div>
            </div>

        </section>
    </header>