<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

    <header id="masthead" class="site-header with-banner" role="banner">

        <?php if (has_nav_menu('header-menu')) : ?>
            <div class="navigation-top">
                <div class="wrap container">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'header-menu',
                            'menu_class' => 'header-menu',
                            'depth' => 1,
                        )
                    );
                    ?>
                </div>
            </div>
        <?php endif; ?>

    </header>
    <div class="site-content-contain">
        <div id="content" class="site-content">
