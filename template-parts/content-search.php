<article <?php post_class(); ?>>
    <a href="<?php the_permalink(); ?>">
        <h2> <?php the_title(); ?> </h2>
    </a>
    
    <!--'thumbnail yada 'medium ' gibi default degerler verilebilir fakat , array ile kendi boyut degerlerimizi de gonderebiliriz-->
    <div class="meta-info">
        <p>posted in <?php echo get_the_date(); ?> </p>
        <?php if(has_category()): ?> <!--aranan ogenın hangi categori turune ait oldugunu gostermek icin-->
           categories: <?php the_category(' '); ?>
        <?php endif; ?>
        <p><?php the_tags('Tags :' , ',') ?></p>
    </div>
    <p> <?php the_excerpt(); ?> </p>
</article>