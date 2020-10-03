<?php get_header(); ?>
<img class="img-fluid" src=" <?php header_image(); ?> " height="<?php echo get_custom_header()->height; ?>"
    width="<?php echo get_custom_header()->width; ?> " alt="">
<div class="content-area">
    <main>

        <section class="middle-area">
            <div class="container">
                <div class="row">


                    <div class="news col-md-9">

                        <?php if(have_posts()): ?>
                        <?php while( have_posts() ): the_post(); ?>
                        <!--content recieves from template-parts folder -->
                        <?php get_template_part('template-parts/content' ,'tag'); ?>
                        <!-- burada post tipine gore get_post_format() ile content-image.php veya content-post.php cagrılır. -->
                        <?php endwhile; ?>
                        <!--pagination-->
                        <?php the_posts_pagination( $args = array(
                                        'prev_text'=>'previous',
                                        'next_text'=>'next',
                         ) ); ?>

                        <?php else: ?>
                        <p>There is no found any post</p>
                        <?php endif; ?>

                    </div>
                    <aside class="sidebar col-md-3 h-100"> <?php get_sidebar('blog'); ?> </aside>
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