<?php get_header(); ?>
<div class="primary">
    <div class="main">
        <div class="container">
            <?php
            //blog part 
            while(have_posts()):
             the_post();
             get_template_part('template-parts/content','single');

             ?>

             <div class="row">
                 <div class="pages col-md-6 text-left"> <?php previous_post_link(); ?> </div>
                 <div class="pages col-md-6 text-right"> <?php next_post_link(); ?> </div>
             </div>

          <?php 
             //comment part 
             if(comments_open() || gets_comments_number()):
                comments_template( $file = '/comments.php', $separate_comments = false );
             endif;

            endwhile;
           ?>




        </div>
    </div>

</div>


<?php get_footer(); ?>

