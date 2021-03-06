<?php get_header(); ?>
<img class="img-fluid" src=" <?php header_image(); ?> " height="<?php echo get_custom_header()->height; ?>"
    width="<?php echo get_custom_header()->width; ?> " alt="">
<div class="content-area">
    <main>

        <section class="middle-area">
            <div class="container">
                <div class="row">


                    <div class="error-404">
                        <header>
                            <h1>Page not found :(</h1>
                            <p> <b>Unfortunately, the page you tried to reach does not exist on this site!</b> </p>
                        </header>

                        <div class="error">
                            <p>How about doing a search?</p>
                            <p> <?php get_search_form(); ?> </p> <!-- to show search form -->
                            <p> <?php the_widget('WP_Widget_Recent_Posts' , array(
                  'title'=>'Latest Posts' , 
                  'number'=>'3',
              )); ?> </p>
                        </div>


                    </div>

                </div>
            </div>
        </section>
        <section class="map">
            <div class="container">
                <div class="row">Map</div>
            </div>
        </section>
    </main>
</div>
<?php get_footer(); ?>