<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php bloginfo('name'); ?></title>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?> 
    </head>
    <body  <?php body_class();?>>
        <div class="container">
            <header class="site-header">
                 <div class="search-bar">
                    <?php get_product_search_form(); ?>
                </div>
                <!--Company Logo-->
                <img src="http://localhost/online_business/wp-content/uploads/2017/09/ezshop.png" alt="company logo">
                
                <!--Header Site-Navs-->
                <nav class="site-nav">
                  <ul>
                      <li><a href="http://localhost/online_business/home/">Home</a></li>
                      <li><a href="http://localhost/online_business/shop/">Shop</a></li>
                      <li><a href="http://localhost/online_business/home/">Home</a></li>
                      <li><a href="http://localhost/online_business/home/">Home</a></li>
                  </ul>
                </nav>
            </header>
            
        
        