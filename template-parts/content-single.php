<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >

    <!--'thumbnail yada 'medium ' gibi default degerler verilebilir fakat , array ile kendi boyut degerlerimizi de gonderebiliriz-->
    <header>
        <h2><?php the_title(); ?></h2>
        <div class="meta-info">
            <p class="small">posted in <?php echo get_the_date(); ?>  </p>
            <p>categories: <?php the_category(' '); ?> </p>
            <p><?php the_tags('Tags :', ',') ?></p>
        </div>
    </header>
    <div class="content">

        <p> <?php the_content(); ?> </p>
    </div>

</article>
