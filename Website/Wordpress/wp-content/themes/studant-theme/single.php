<?php get_header(); ?>

<main>
    <section id="post">

        <?php while(have_posts()): the_post()?>
        <div class="col-sm-12 text-hero article-hero">
            <h1><?php the_title()?></h1>
            <h4 class="door">
                door <?php the_author(); ?>
            </h4>
            <img src="<?php bloginfo('template_url'); ?>/img/hero/lauraWolk.png" alt="Article hero">
        </div>

        <div class="post-img">
            <?php the_post_thumbnail() ;?>
            <?php if ( $caption = get_post( get_post_thumbnail_id() )->post_excerpt ) : ?>
                <p class="caption">&copy; <?php echo $caption; ?></p>
            <?php endif; ?>
        </div>

        <div class="inhoud">
            <?php the_content();?>
        </div>
        <?php endwhile; ?>

    </section>
</main>

<?php get_footer(); ?>

