<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Jordy Detemmerman & Andreea Penu">
    <!--<link rel="icon" href="assets/img/favicon.icon">-->
    <title>Studant</title>
    <?php wp_head(); ?>
</head>

<body>

    <!-- HEADER -->
    <header class="site-header">
        <!-- navbar -->
        <div class="navbar-wrapper">
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <!-- brand STUDANT -->
                        <a class="navbar-brand" href="<?= home_url('/')?>"><img src="<?php bloginfo('template_url'); ?>/img/logo/logotest.png" alt="logo Studant"></a>
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                        </button>

                    </div>

                    <?php wp_nav_menu( array(
                            'theme_location'    => 'primary',
                            'depth'             => 2,
                            'container'         => 'div',
                            'container_class'   => 'collapse navbar-collapse',
                            'container_id'      => 'navbar',
                            'menu_class'        => 'nav navbar-nav navbar-right',
                            'fallback_cb'       => 'wp_page_menu',
                            'walker'            => new wp_bootstrap_navwalker())
                        ); ?>
                </div>
            </nav>
        </div>
    </header>
