<!-- search formunda arama islemi sonucu gosterilecek olan sayfa , diğer turlu varsayılan index.php teması kullanılır-->
<?php get_header(); ?>
<div class="primary">
    <div class="main">
        <div class="container">
            <h2>Search for results : <?php echo get_search_query(); ?>  </h2><br>
            <?php
            get_search_form(); 
            echo "<br>";
            //blog part 
            while(have_posts()):
             the_post();
             get_template_part('template-parts/content','search');

             //Display the comments form if this post is open the comments 
             if(comments_open() || gets_comments_number()):
                comments_template();
            //display the comments form , or a custom form.
            //to custom form -> comments_template('filename.php');

             endif;

            endwhile;
            ?>



        </div>
    </div>

</div>


<?php get_footer(); ?>

