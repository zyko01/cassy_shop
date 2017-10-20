<?php 

get_header();

if(have_posts()) :
    while(have_posts()) : the_post();?>

    <article class="post">
    <!-- <div class="slideshow-container">
    
    <div class="mySlides fades">
      <div class="numbertext">1 / 3</div>
      <img src="http://localhost/online_business/wp-content/uploads/2017/09/banner1.jpg" style="width:100%">
      <div class="text">Caption Text</div>
    </div>
    
    <div class="mySlides fades">
      <div class="numbertext">2 / 3</div>
      <img src="http://localhost/online_business/wp-content/uploads/2017/09/banner1.jpg" style="width:100%">
      <div class="text">Caption Two</div>
    </div>
    
    <div class="mySlides fades">
      <div class="numbertext">3 / 3</div>
      <img src="http://localhost/online_business/wp-content/uploads/2017/09/banner1.jpg" style="width:100%">
      <div class="text">Caption Three</div>
    </div>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
    
    </div>
    <br>
    
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span> 
      <span class="dot" onclick="currentSlide(2)"></span> 
      <span class="dot" onclick="currentSlide(3)"></span> 
    </div> -->

        <div class="banner">
            <div class="buttons">
                <ul>
                   <a href="<?php echo site_url('product-category/kidsbaby/kids-clothing'); ?>"><li>Kids Fashion</li></a>
                  <a href="<?php echo site_url('product-category/kidsbaby/babies-clothing'); ?>"><li>Baby Fashion</li></a>
                </ul>
            </div>
            <div class="slideshow-container">
            <div class="mySlides fades">
                <img src="<?php echo get_bloginfo('template_url'); ?>/images/banner3.jpg" alt="banner image1" style="width:100%">
            </div>
            <div class="mySlides fades">
            <img src="<?php echo get_bloginfo('template_url'); ?>/images/kids-banner.jpg" alt="banner image" style="width:100%">
            </div>
            <div class="mySlides fades">
            <img src="<?php echo get_bloginfo('template_url'); ?>/images/kids-banner1.jpg" alt="banner image" style="width:100%">
            </div>
            <div class="mySlides fades">
            <img src="<?php echo get_bloginfo('template_url'); ?>/images/babykidsbanner.jpg" alt="banner image" style="width:100%">
            </div>
            <!-- <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>     -->
            </div>
        </div>
        <?php the_content();?>
    </article>
    <?php endwhile;

    else :
        echo '<p> No Content Found!</p>';

    endif;

get_footer();
?>