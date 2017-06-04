<?php /* Template Name: Front-Page */ 

include 'search-function.php';

?>

<?php get_header(); ?>

<main>

    <!-- HERO -->
    <section id="hero">
        <div class="container">

            <div class="col-sm-12 hero-image hero-front-page">
                <img src="<?php bloginfo('template_url'); ?>/img/hero/AntwerpenHeroBlack.png" alt="Antwerpen banner">
            </div>

        </div>
    </section>
    <!-- hero -->


    <!-- ICON LINKS SECTION -->
    <section id="icon-link">
        <div class="container">
            <div class="all-icons">
                <div class="icon-wrapper ">
                    <a href="<?= home_url('/nieuws')?>">
                            <img src="<?php bloginfo('template_url'); ?>/img/icon/icon-news.png" alt="Nieuws" class="icon">
                            <h4>NIEUWS</h4>
                        </a>
                </div>

                <div class="icon-wrapper">
                    <a href="<?= home_url('/testimonials')?>">
                            <img src="<?php bloginfo('template_url'); ?>/img/icon/icon-testim.png" alt="Testimonials" class="icon">
                            <h4>TESTIMONIALS</h4>
                        </a>
                </div>

                <div class="icon-wrapper">
                    <a href="<?= home_url('/studeren')?>">
                            <img src="<?php bloginfo('template_url'); ?>/img/icon/icon-studieh.png" alt="Studeren" class="icon">
                            <h4>STUDIEHULP</h4>
                        </a>
                </div>

                <div class="icon-wrapper">
                    <a href="http://www.kotzoeker.be/kot-zoeken-in-antwerpen/">
                            <img src="<?php bloginfo('template_url'); ?>/img/icon/icon-kot2.png" alt="Kot Zoeken" class="icon">
                            <h4>KOTZOEKER</h4>
                        </a>
                </div>

                <div class="icon-wrapper">
                    <a href="https://www.gate15.be/">
                            <img src="<?php bloginfo('template_url'); ?>/img/icon/icon-gate.png" alt="Gate15" class="icon">
                            <h4>GATE15</h4>
                        </a>
                </div>

                <div class="icon-wrapper">
                    <a href="https://www.study360.be/">
                            <img src="<?php bloginfo('template_url'); ?>/img/icon/icon-study.png" alt="Study360" class="icon">
                            <h4>360STUDY</h4>
                        </a>
                </div>
            </div>
        </div>
    </section>

    <!-- TESTIMONIAL SECTION -->
    <section id="testimonials">
        <div id="testimonials-carousel" class="carousel slide" data-ride="carousel" data-interval="false">
            <!-- Indicators -->
            <ol class="carousel-indicators testimonials-indicator">
                <li data-target="#testimonials-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#testimonials-carousel" data-slide-to="1"></li>
                <li data-target="#testimonials-carousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">

			     <?php 
			            $args_latest = array(           
			            'post_type' => 'post',
			            'category_name' => 'Testimonials',
			            'ignore_sticky_posts' => 1,
			            'posts_per_page' => 3       
			        );
			            $the_query = new WP_Query($args_latest); ?>
			            <?php $nmb = 0; ?>
			            <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>


                	<?php if ($nmb < 1): ?>
			           	<div class="item active">
			        <?php else: ?>
			           	<div class="item">
			        <?php endif ?>
                    <div class="image-box fill">
			            <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="carousel-text">
                        <div class="carousel-text-content">
			                <h2><?php the_title(); ?></h2>
			                <p><?php the_content();?></p>
                        </div>
                    </div>
                </div>

               		<?php $nmb++ ?>
			        <?php endwhile;?>

					<?php wp_reset_query();?>

            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#testimonials-carousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#testimonials-carousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <!-- POSTS SECTION-->
    <section id="nieuws">
        <div id="posts-carousel" class="carousel slide" data-ride="carousel" data-interval="false">
            <!-- Indicators -->
            <ol class="carousel-indicators nieuws-indicator">
                <li data-target="#posts-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#posts-carousel" data-slide-to="1"></li>
                <li data-target="#posts-carousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
			     <?php 
			            $args_latest = array(           
			            'post_type' => 'post',
			            'category_name' => 'nieuws',
			            'ignore_sticky_posts' => 1,
			            'posts_per_page' => 3       
			        );
			            $the_query = new WP_Query($args_latest); ?>
			            <?php $nmb = 0; ?>
			            <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

			            	
							<?php if ($nmb < 1): ?>
			            	<div class="item active">
			            	<?php else: ?>
			            	<div class="item">
			            	<?php endif ?>

			                    <div class="image-box-right">
			                        <?php the_post_thumbnail(); ?>
			                    </div>
			                    <div class="carousel-text-right">
			                        <div class="carousel-text-content">
			                            <h2><?php the_title(); ?></h2>
			                            <p><?php the_content();?></p>
			                        </div>
			                    </div>
			                </div>

			            <?php $nmb++ ?>
			            <?php endwhile;?>

					<?php wp_reset_query();?>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#posts-carousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Vorige</span>
            </a>
            <a class="right carousel-control" href="#posts-carousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Volgende</span>
            </a>
        </div>
    </section>

<!-- INTRO VIDEO SECTION -->
    <section id="intro-video" data-type="background" data-speed="5">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="video-content">
                        <h2>WELKOM IN ANTWERPEN</h2>
                        <h3>Hey! Ben je nieuw hier en wil je meer weten over Antwerpen?</h3>
                        <button type="button" class="btn btn-default btn-lg ryv-popup">KLIK HIER</button>
                        <?php echo do_shortcode('[ryv-popup video="https://www.youtube.com/embed/Q0nLdnB_Ezw?autoplay=1"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- KEUZEHULP SECTION -->
    <section id="keuzehulp">
        <div class="container">
            <h2>HULP NODIG MET JE STUDIEKEUZE?</h2>
            <h3>Vertel ons wat jou het meeste interesseert:</h3>

            <div class="all-icons">

                <div class="col-lg-12 col-sm-6">
                    <div class="icon-wrapper">
                        <form action="<?= home_url('/studeren')?>" method="POST">
                            <button type="submit" class="invisible-btn" value="%economie%" name="checkboxc[]">
                                    <img src="<?php bloginfo('template_url'); ?>/img/icon/icon-economie.png" alt="Economie">
                                    <h4>economie</h4>
                                </button>
                        </form>
                    </div>

                    <div class="icon-wrapper">
                        <form action="<?= home_url('/studeren')?>" method="POST">
                            <button type="submit" class="invisible-btn" value="%gezondheid%" name="checkboxc[]">
                                    <img src="<?php bloginfo('template_url'); ?>/img/icon/icon-gezondheid.png" alt="Gezondheid">
                                    <h4>gezondheid</h4>
                                </button>
                        </form>
                    </div>

                    <div class="icon-wrapper">
                        <form action="<?= home_url('/studeren')?>" method="POST">
                            <button type="submit" class="invisible-btn" value="%ict%" name="checkboxc[]">
                                    <img src="<?php bloginfo('template_url'); ?>/img/icon/icon-it.png" alt="ICT">
                                    <h4>ict</h4>
                                </button>
                        </form>
                    </div>

                    <div class="icon-wrapper">
                        <form action="<?= home_url('/studeren')?>" method="POST">
                            <button type="submit" class="invisible-btn" value="%kunst%" name="checkboxc[]">
                                    <img src="<?php bloginfo('template_url'); ?>/img/icon/icon-kunst.png" alt="Kunst">
                                    <h4>kunst</h4>
                                </button>
                        </form>
                    </div>

                    <div class="icon-wrapper">
                        <form action="<?= home_url('/studeren')?>" method="POST">
                            <button type="submit" class="invisible-btn" value="%management%" name="checkboxc[]">
                                    <img src="<?php bloginfo('template_url'); ?>/img/icon/icon-management.png" alt="Management">
                                    <h4>management</h4>
                                </button>
                        </form>
                    </div>

                    <div class="icon-wrapper">
                        <form action="<?= home_url('/studeren')?>" method="POST">
                            <button type="submit" class="invisible-btn" value="%onderwijs%" name="checkboxc[]">
                                    <img src="<?php bloginfo('template_url'); ?>/img/icon/icon-onderwijs.png" alt="Onderwijs">
                                    <h4>onderwijs</h4>
                                </button>
                        </form>
                    </div>

                </div>
                <div class="col-lg-12 col-sm-6">

                    <div class="icon-wrapper">
                        <form action="<?= home_url('/studeren')?>" method="POST">
                            <button type="submit" class="invisible-btn" value="%recht%" name="checkboxc[]">
                                    <img src="<?php bloginfo('template_url'); ?>/img/icon/icon-recht.png" alt="Rechten">
                                    <h4>rechten</h4>
                                </button>
                        </form>
                    </div>
                    <div class="icon-wrapper">
                        <form action="<?= home_url('/studeren')?>" method="POST">
                            <button type="submit" class="invisible-btn" value="%sociaal%" name="checkboxc[]">
                                    <img src="<?php bloginfo('template_url'); ?>/img/icon/icon-sociaal.png" alt="Sociaal">
                                    <h4>sociaal</h4>
                                </button>
                        </form>
                    </div>

                    <div class="icon-wrapper">
                        <form action="<?= home_url('/studeren')?>" method="POST">
                            <button type="submit" class="invisible-btn" value="%talen%" name="checkboxc[]">
                                    <img src="<?php bloginfo('template_url'); ?>/img/icon/icon-talen.png" alt="Talen">
                                    <h4>talen</h4>
                                </button>
                        </form>
                    </div>

                    <div class="icon-wrapper">
                        <form action="<?= home_url('/studeren')?>" method="POST">
                            <button type="submit" class="invisible-btn" value="%technologie%" name="checkboxc[]">
                                    <img src="<?php bloginfo('template_url'); ?>/img/icon/icon-techniek.png" alt="Techonolgie">
                                    <h4>technologie</h4>
                                </button>
                        </form>
                    </div>

                    <div class="icon-wrapper">
                        <form action="<?= home_url('/studeren')?>" method="POST">
                            <button type="submit" class="invisible-btn" value="%wetenschap%" name="checkboxc[]">
                                    <img src="<?php bloginfo('template_url'); ?>/img/icon/icon-chemie.png" alt="Wetenschap">
                                    <h4>wetenschap</h4>
                                </button>
                        </form>
                    </div>

                    <div class="icon-wrapper">
                        <form action="<?= home_url('/studeren')?>" method="POST">
                            <button type="submit" class="invisible-btn" value="%zeevaart%" name="checkboxc[]">
                                    <img src="<?php bloginfo('template_url'); ?>/img/icon/icon-zeevaart.png" alt="Zeevaart">
                                    <h4>zeevaart</h4>
                                </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- GAME SECTION -->
    <section id="game">
        <div class="container">


            <h2>SPEEL ONZE NIEUWE GAME!</h2>

            <div class="col-sm-6 game-mascotte">
                <img src="<?php bloginfo('template_url'); ?>/img/logo/mascotte.png" alt="mascotte">
            </div>

            <div class="col-sm-6">
                <div class="game-icons">

                    <div class="icon-wrapper">

                        <img src="<?php bloginfo('template_url'); ?>/img/icon/map.png" alt="kaart">
                        <h4>Ontdek Antwerpen</h4>


                    </div>

                    <div class="icon-wrapper small-icon">

                        <img src="<?php bloginfo('template_url'); ?>/img/icon/collect.png" alt="colllectables">
                        <h4>Verzamel alle collectables</h4>


                        <div class="icon-wrapper small-icon">

                            <img src="<?php bloginfo('template_url'); ?>/img/icon/check.png" alt="trivia">
                            <h4>Beantwoordt de trivia vragen</h4>

                        </div>

                    </div>
                </div>

                <div class="store">
                    <a href=""><img src="<?php bloginfo('template_url'); ?>/img/icon/playstore.png" alt="trivia"></a>
                    <a href=""><img src="<?php bloginfo('template_url'); ?>/img/icon/appstore.png" alt="trivia"></a>
                </div>

            </div>

        </div>


    </section>

    <!-- WAT STUDENTEN ZEGGEN -->
    <section id="quotes">
        <h1>WAT STUDENTEN OVER ONS ZEGGEN</h1>

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators quote-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="quote-content">
						<h2><?php echo do_shortcode('[quotcoll id=1]'); ?></h2>
                    </div>
                </div>

                <div class="item">
                    <div class="quote-content">
						<h2><?php echo do_shortcode('[quotcoll id=2]'); ?></h2>
                    </div>
                </div>
                <div class="item">
                    <div class="quote-content">
                        <h2><?php echo do_shortcode('[quotcoll id=3]'); ?></h2>
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
</main>

<?php get_footer(); ?>
