<?php 

function learningWordpress_resources(){
	wp_enqueue_style('style', get_stylesheet_uri());
	// bootstrap
	wp_enqueue_style('bootstrap', get_template_directory_uri(). '/css/bootstrap.min.css' , array(), '3.3.7', 'all');
	wp_enqueue_style('bootstrap', get_template_directory_uri(). '/fonts/glyphicons-halflings-regular.tff' , array(), '3.3.7', 'all');
	wp_enqueue_style('bootstrap', get_template_directory_uri(). '/fonts/glyphicons-halflings-regular.woff' , array(), '3.3.7', 'all');
	wp_enqueue_style('bootstrap', get_template_directory_uri(). '/fonts/glyphicons-halflings-regular.woff2' , array(), '3.3.7', 'all');
	
	// custom-js
	wp_enqueue_script('navjs', get_template_directory_uri() . '/js/bootstrap.min.js',array(), '3.3.7' , true);	
	wp_enqueue_script('navjs', get_template_directory_uri() . '/js/nav.js',array(), '1.0.0' , true);
	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/customjs.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'learningWordpress_resources');

function wpb_load_fa() {
 
wp_enqueue_style( 'wpb-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' );
 
}
 
add_action( 'wp_enqueue_scripts', 'wpb_load_fa' );

// Custom Excerpt count length
function custom_excerpt_length(){
    return 25;
}

add_filter('excerpt_length', 'custom_excerpt_length');


// Theme Setup
function wordpress_setup(){
    // Register Menus
    register_nav_menus(array(
        'primary' => __('Primary Menu'),
        'footer' => __('Footer Menu'),
		'small' => __('Small Menu')
    ));
    // Add featured image support
    add_theme_support('post-thumbnails');
    add_image_size('small-thumbnail', 180, 120, true);
    add_image_size('banner-image', 920, 210, true); //if you want to crop image the way you want you can add this code instead of true replace it into a array "array('left', 'top')"

    // Add post format support
    add_theme_support('post-formats', array('aside', 'gallery' , 'link') );
}


/**
 * Place a cart icon with number of items and total cost in the menu bar.
 *
 * Source: http://wordpress.org/plugins/woocommerce-menu-bar-cart/
 */
add_filter('wp_nav_menu_items','sk_wcmenucart', 10, 2);
function sk_wcmenucart($menu, $args) {

	// Check if WooCommerce is active and add a new item to a menu assigned to Primary Navigation Menu location
	if ( !in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) || 'small' !== $args->theme_location )
		return $menu;

	ob_start();
		global $woocommerce;
		$viewing_cart = __('View your shopping cart', 'your-theme-slug');
		$start_shopping = __('Start shopping', 'your-theme-slug');
		$cart_url = $woocommerce->cart->get_cart_url();
		$shop_page_url = get_permalink( woocommerce_get_page_id( 'shop' ) );
		$cart_contents_count = $woocommerce->cart->cart_contents_count;
		$cart_contents = sprintf(_n('%d item', '%d items', $cart_contents_count, 'your-theme-slug'), $cart_contents_count);
		$cart_total = $woocommerce->cart->get_cart_total();
		// Uncomment the line below to hide nav menu cart item when there are no items in the cart
		// if ( $cart_contents_count > 0 ) {
			if ($cart_contents_count == 0) {
				$menu_item = '<li class="right"><a class="wcmenucart-contents" href="'. $shop_page_url .'" title="'. $start_shopping .'">';
			} else {
				$menu_item = '<li class="right"><a class="wcmenucart-contents" href="'. $cart_url .'" title="'. $viewing_cart .'">';
			}

			$menu_item .= '<i class="fa fa-shopping-cart"></i> ';

			$menu_item .= $cart_contents.' - '. $cart_total;
			$menu_item .= '</a></li>';
		// Uncomment the line below to hide nav menu cart item when there are no items in the cart
		// }
		echo $menu_item;
	$social = ob_get_clean();
	return $menu . $social;

}

add_action('after_setup_theme', 'wordpress_setup');
add_theme_support('woocommerce');
