<footer class="site-footer">
<!--site-footer nav-->
    <nav class="site-nav">
        <?php
            $args = array(
                'theme-location' => 'footer' 
            );
        ?>
        <?php wp_nav_menu('args'); ?>
    </nav>
    
    <!-- social media links -->
    <div class="social-site">
        <span>Follow us on 
            <a href="#"><img class="social-icon" src="<?php echo get_bloginfo('template_url') ?>/images/facebook.png" alt="facebook"/></a>
            <a href="#"><img class="social-icon" src="<?php echo get_bloginfo('template_url') ?>/images/google-plus.png" alt="google-plus"/></a>
            <a href="#"><img class="social-icon" src="<?php echo get_bloginfo('template_url') ?>/images/instagram.png" alt="instagram"/></a>
            <a href="#"><img class="social-icon" src="<?php echo get_bloginfo('template_url') ?>/images/pinterest.png" alt="pinterest"/></a>
            <a href="#"><img class="social-icon" src="<?php echo get_bloginfo('template_url') ?>/images/twitter.png" alt="" /></a>
            <a href="#"><img class="social-icon" src="<?php echo get_bloginfo('template_url') ?>/images/linkedin.png" alt=""></a>
        </span>
    </div>
    <p> Copyrights &copy; <?php echo date('Y'); ?> EZshopping</p>

</footer>



</div> <!--/container-->

<?php wp_footer(); ?> 
</body>
</html>