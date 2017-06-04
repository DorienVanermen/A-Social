<?php get_header(); ?>

<main>
    <section id="post">

        <?php while(have_posts()): the_post()?>

        <div class="post-img">
            <?php the_post_thumbnail();?>
        </div>

        <div class="post-info">
            <h3 class="quote">"
                <?php the_title()?>"</h3>
            <h4 class="door">-
                <?php the_author(); ?>
            </h4>
        </div>

        <div class="inhoud">
            <?php the_content();?>
        </div>
        <?php endwhile; ?>

        <!-- 	<div class="post-comments">
		<?php //comments_template('',true);?>
	</div> -->

    </section>
</main>

<?php get_footer(); ?>
