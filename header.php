<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header id="page" class="hfeed site">

        <!-- ******************* The Navbar Area ******************* -->
        <div class="ed-container full">
            <div class="ed-item s-100 l-100 main-menu-container cross-center main-end">
                <div class="nav-toggle to-l" id="main-nav-toggle" data-toggle="modal" data-target="#myModal"></div>

                <nav class="main-nav" id="main-nav">
                    <!-- The WordPress Menu goes here -->
                    <?php wp_nav_menu(
                        array(
                            'theme_location'  => 'primary',
                            'container_class' => 'ed-container',
                            'container_id'    => 'container-menu',
                            'menu_class'      => 'main-menu',
                            'fallback_cb'     => '',
                            'menu_id'         => 'main-menu',
                            'walker'          => new wp_bootstrap_navwalker(),
                        )
                    ); ?>
                </nav><!-- .site-navigation -->

                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content mimodal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true" class="ico_cerrar">x</span>
                                </button>
                            </div>

                            <div class="modal-body">
                                <?php wp_nav_menu(
                                    array(
                                        'theme_location' => 'primary',
                                        'container_class' => 'navbar-toggleable-xs exCollapsingNavbar',
                                        'menu_class' => 'nav navbar-nav',
                                        'fallback_cb' => '',
                                        'menu_id' => 'main-menu',
                                        'walker' => new wp_bootstrap_navwalker()
                                    )
                                ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header><!-- #page -->
