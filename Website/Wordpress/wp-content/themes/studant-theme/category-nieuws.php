<?php get_header(); ?>

<main>

<div class="col-sm-12 text-hero nieuws-hero">
    <h1>NIEUWS</h1>
    <img src="<?php bloginfo('template_url'); ?>/img/hero/lauraBord.png" alt="Nieuws hero">
</div>

    <!-- NIEUWS -->
    <?php while(have_posts()): the_post()?>

    <div class="nieuws-post clearfix">
        <div class="nieuws-post-text">
            <div class="nieuws-post-text-pad">
                <h3>
                    <?php the_title()?>
                </h3>
                <p>
                    <?php the_content();?>
                </p>
            </div>
        </div>
        <div class="nieuws-post-foto">
            <?php the_post_thumbnail();?>
        </div>

    </div>

    <?php endwhile; ?>

    <?php wp_pagenavi(); ?>

</main>

<?php get_footer(); ?>
