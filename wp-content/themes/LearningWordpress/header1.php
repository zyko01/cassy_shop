<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <title><?php bloginfo('name'); ?></title>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
    </head>
<body <?php body_class();?>>
    <div class="container-fluid">
        <!--Small Navigattion-->
        <nav id="small-nav" class="site-nav">
            <!--WooCommerce Cart-->
             <?php
                $args = array(
                    'theme_location' => 'small'
                );
               ?>
                <?php wp_nav_menu( $args ); ?>
                <ul>
                    <div class="dropdown">
                        <li class="dropbtn"><a href="http://localhost/online_business/my-account/"><i class="fa fa-user" aria-hidden="true"></i> Accounts</a></li>
                            <div class="dropdown-content">
                                <a href="http://localhost/online_business/my-account/orders/">Orders</a>
                                <a href="http://localhost/online_business/my-account/edit-address/">Addresses</a>
                                <a href="http://localhost/online_business/my-account/edit-account/">Account Details</a>
                                <a href="http://localhost/online_business/my-account/customer-logout/">Log out</a>
                            </div>
                    </div>
                    <li><span><i class="fa fa-phone" aria-hidden="true"></i> Contact us: 12345678</span></li>
                    <li><a href="http://localhost/online_business/wishlist/"><i class="fa fa-heart" aria-hidden="true"></i> Wishlist</a></li>
                </ul>
            </nav>
        <!--site-header-->
        <header class="site-header">

            <!--search-bar-->
            <div class="search-bar">
                <?php get_product_search_form(); ?>
            </div>

            <!--<div class="font-icon">
                <span><i class="fa fa-address-book-o"></i></span>
            </div>-->

            <div id="header-image">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                    <img src="http://localhost/online_business/wp-content/uploads/2017/09/ezshopping.png"  alt="Logo" width="HERE" height="HERE" />
                </a>
            </div>
                <!--<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
                <h5><?php bloginfo('description'); ?> <?php if(is_page('home')){ ?>
                    - Thank you for visiting my site
                <?php } ?></h5>-->
            

            <!--site-navigation-->
            <nav class="site-nav" id="myTopnav">
               <?php
                $args = array(
                    'theme_location' => 'primary'
                );
               ?>
                <?php wp_nav_menu( $args ); ?>
            </nav>
        </header>
        
         <!--/site-header-->