<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <title><?php bloginfo('name'); ?></title>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
    </head>
<body <?php body_class();?>>
    <div class="container-full">
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
                        <li class="dropbtn"><a href="<?php echo site_url('my-account'); ?>"><i class="glyphicon glyphicon-user" aria-hidden="true"></i> Accounts</a></li>
                            <div class="dropdown-content">
                                <a href="<?php echo site_url('my-account/orders'); ?>">Orders</a>
                                <a href="<?php echo site_url('my-account/edit-address'); ?>">Addresses</a>
                                <a href="<?php echo site_url('my-account/edit-account'); ?>">Account Details</a>
                                <a href="<?php echo site_url('my-account/customer-logout'); ?>">Log out</a>
                            </div>
                    </div>
                    <li><span><i class="glyphicon glyphicon-phone" aria-hidden="true"></i> Contact us: 12345678</span></li>
                    <li><a href="<?php echo site_url('online_business/wishlist'); ?>"><i class="glyphicon glyphicon-heart" aria-hidden="true"></i> Wishlist</a></li>
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
                    <img src="<?php echo get_bloginfo(template_url) ?>/images/cassy2.jpg"  alt="Logo" width="HERE" height="HERE" />
                </a>
            </div>
                <!--<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
                <h5><?php bloginfo('description'); ?> <?php if(is_page('home')){ ?>
                    - Thank you for visiting my site
                <?php } ?></h5>-->
            

            <!--site-navigation-->
            
        <div class="navbar navbar-inverse navbar-fixed-side">
            <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span> 
                </button>
              </div>
              <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="<?php echo site_url('ezshop-3'); ?>">EZshop</a></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Womens' Fashion <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><h3>Womens' Fashion</h3></li>
                            <li><a href="<?php echo site_url('product-category/womens-fashion'); ?>"> All Products</a></li>
                            <li><a href="<?php echo site_url('product-category/womens-fashion/womens-accesories'); ?>"> Womens' Accessories</a></li>
                            <li><a href="<?php echo site_url('product-category/womens-fashion/womens-bags'); ?>"> Womens' Bag</a></li>
                            <li><a href="<?php echo site_url('product-category/womens-fashion/womens-clothing'); ?>"> Womens' Clothing</a></li>
                            <li><a href="<?php echo site_url('product-category/womens-fashion/womens-shoes'); ?>"> Womens' Shoes</a></li>
                            <img src="<?php echo get_bloginfo(template_url) ?>/images/womensfashion.jpg"  alt="Logo" width="HERE" height="HERE" />
                        </ul>
                   </li>
                   <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Mens' Fashion <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><h3>Mens' Fashion</h3></li>
                            <li><a href="<?php echo site_url('product-category/mens-fashion'); ?>"> All Products</a></li>
                            <li><a href="<?php echo site_url('product-category/mens-accessories'); ?>"> Mens' Accessories</a></li>
                            <li><a href="<?php echo site_url('product-category/mens-clothing'); ?>"> Mens' Clothing</a></li>
                            <li><a href="<?php echo site_url('product-category/mens-shoes'); ?>"> Mens' Shoes</a></li>
                            <img src="<?php echo get_bloginfo(template_url) ?>/images/mensfashion.jpg"  alt="Logo" width="HERE" height="HERE" />
                        </ul>
                   </li>
                   <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Kids & Baby <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><h3>Kids & Baby Fashion</h3></li>
                            <li><a href="<?php echo site_url('product-category/kidsbaby'); ?>"> All Products</a></li>
                            <li><a href="<?php echo site_url('product-category/kidsbaby/babies-accesories'); ?>"> Babies Accessories</a></li>
                            <li><a href="<?php echo site_url('product-category/kidsbaby/babies-clothing'); ?>"> Babies Clothing</a></li>
                            <li><a href="<?php echo site_url('product-category/kidsbaby/babies-shoes'); ?>"> Babies Shoes</a></li>
                            <li><a href="<?php echo site_url('product-category/kidsbaby/kids-accessories'); ?>"> Kids Accessories</a></li>
                            <li><a href="<?php echo site_url('product-category/kidsbaby/kids-clothing'); ?>"> Kids Clothing</a></li>
                            <li><a href="<?php echo site_url('product-category/kidsbaby/kids-shoes'); ?>"> Kids Shoes</a></li>
                            <img src="<?php echo get_bloginfo(template_url) ?>/images/babyfashion.jpg"  alt="Logo" width="HERE" height="HERE" />                       
                        </ul>
                   </li>
                   <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Watches & Jewerlies <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><h3>Watches & Jewelries</h3></li>
                            <li><a href="<?php echo site_url('product-category/watches-jewelries'); ?>"> All Products</a></li>
                            <li><a href="<?php echo site_url('product-category/watches-jewelries/bracelet'); ?>"> Bracelet</a></li>
                            <li><a href="<?php echo site_url('product-category/watches-jewelries/necklace'); ?>"> Necklace</a></li>
                            <li><a href="<?php echo site_url('product-category/watches-jewelries/watch'); ?>"> Watch</a></li>
                            <img src="<?php echo get_bloginfo(template_url) ?>/images/watchandjewelries.jpg"  alt="Logo" width="HERE" height="HERE" />
                        </ul>
                   </li>
                   <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Electronics <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><h3>Electronics</h3></li>
                            <li><a href="<?php echo site_url('product-category/electronics'); ?>"> All Products</a></li>
                            <li><a href="<?php echo site_url('product-category/electronics/desktop-laptop-accessories'); ?>"> Desktop & Laptop Accessories</a></li>
                            <li><a href="<?php echo site_url('product-category/electronics/ipad-tablets-accesories'); ?>"> Ipad & Tablet Accessories </a></li>
                            <li><a href="<?php echo site_url('product-category/electronics/iphone-accesories'); ?>"> Iphone Accessories</a></li>
                            <li><a href="<?php echo site_url('product-category/electronics/mobile-phone-accesories'); ?>"> Mobile phone Accessories </a></li>
                            <li><a href="<?php echo site_url('product-category/electronics/power-bank-chargers'); ?>"> Powerbank & Chargers </a></li>
                            <li><a href="<?php echo site_url('product-category/electronics/speakers-headphones'); ?>"> Headphones & Speakers </a></li>
                            <li><a href="<?php echo site_url('product-category/electronics/storages'); ?>"> Storages </a></li>
                            <img src="<?php echo get_bloginfo(template_url) ?>/images/electronics.jpg"  alt="Logo" width="HERE" height="HERE" />
                        </ul>
                   </li>
                   <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Home & Living <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><h3>Home & Living</h3></li>
                            <li><a href="<?php echo site_url('product-category/home'); ?>"> All Products</a></li>
                            <li><a href="<?php echo site_url('product-category/home/beddings'); ?>"> Beddings</a></li>
                            <li><a href="<?php echo site_url('product-category/home/gardening') ?>"> Gardening </a></li>
                            <li><a href="<?php echo site_url('product-category/home/home-decorations'); ?>"> Home Decorations</a></li>
                            <li><a href="<?php echo site_url('product-category/home/cleaning-supplies'); ?>"> Cleaning Supplies </a></li>
                            <li><a href="<?php echo site_url('product-category/home/kitchen-utensils'); ?>"> Kitchen Utensils </a></li>
                            <img src="<?php echo get_bloginfo(template_url) ?>/images/homeandliving.jpg"  alt="Logo" width="HERE" height="HERE" />
                        </ul>
                   </li>
                   <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Toys <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><h3>Toys</h3></li>
                            <li><a href="<?php echo site_url('product-category/toys'); ?>"> All Products</a></li>
                            <li><a href="<?php echo site_url('product-category/toys/board-games'); ?>"> Board Games</a></li>
                            <li><a href="<?php echo site_url('product-category/toys/boys-toy'); ?>"> Boys' Toys </a></li>
                            <li><a href="<?php echo site_url('product-category/toys/educational-toys'); ?>"> Educational Toys</a></li>
                            <li><a href="<?php echo site_url('product-category/toys/girls-toy'); ?>"> Girls' Toys </a></li>
                            <img src="<?php echo get_bloginfo(template_url) ?>/images/toys.jpg"  alt="Logo" width="HERE" height="HERE" />
                        </ul>
                   </li>
                   <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Baking <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><h3>Baking</h3></li>
                            <li><a href="<?php echo site_url('product-category/baking'); ?>"> All Products</a></li>
                            <li><a href="<?php echo site_url('product-category/baking/baking-ingredients'); ?>"> Baking Ingredients</a></li>
                            <li><a href="<?php echo site_url('product-category/baking/baking-tools'); ?>"> Baking Tools </a></li>
                            <img src="<?php echo get_bloginfo(template_url) ?>/images/baking.jpg"  alt="Logo" width="HERE" height="HERE" />
                        </ul>
                   </li>
                </ul>
              </div>
            </div>
        </div>
            
          
        </header>
        
         <!--/site-header-->