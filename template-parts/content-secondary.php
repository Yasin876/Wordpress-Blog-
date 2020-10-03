<article <?php post_class( array('class'=>'second') ); ?>>

    <a href=" <?php the_permalink(); ?> ">
        <h2> <?php the_title(); ?> </h2>
    </a>


    <div class="thumbnail">
        <a href=" <?php the_permalink(); ?> "> <?php the_post_thumbnail( 'large' , array('class'=>'img-fluid') ); ?>
        </a>
        <!-- otomatik olarak css sınıfı olusturmak icin yada cagırmak-->
    </div>
    <!--'thumbnail yada 'medium ' gibi default degerler verilebilir fakat , array ile kendi boyut degerlerimizi de gonderebiliriz-->
    <div class="meta-info">
        <p>
            by <span> <?php the_author_posts_link(); ?> </span>
            categories: <span> <?php the_category(' '); ?> </span>
            <?php the_tags('Tags : <span>' , ', </span>'); ?>
        </p>
    </div>
    <p> <span> <?php the_excerpt(); ?> </span> </p>
</article>