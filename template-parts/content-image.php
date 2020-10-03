<article <?php post_class(); ?>>
    <a href="<?php the_permalink(); ?>">
        <h2> <?php the_title(); ?> </h2>
    </a>
    <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(array(400,400)); ?> </a>

    <!--'thumbnail yada 'medium ' gibi default degerler verilebilir fakat , array ile kendi boyut degerlerimizi de gonderebiliriz-->
    <div class="meta-info">
        <p>posted in <?php echo get_the_date(); ?> </p>
        <p>categories: <?php the_category(' '); ?> </p>
        <p><?php the_tags('Tags :' , ',') ?></p>
    </div>
    <p> <?php the_content(); ?> </p>
</article>