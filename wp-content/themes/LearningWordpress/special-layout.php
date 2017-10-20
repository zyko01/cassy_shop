<?php 

/*
Template Name: Special Layout
*/
get_header();

if(have_posts()) :
    while(have_posts()) : the_post();?>

    <article class="post page">
        <h1><?php the_title(); ?></h1>

        <div class="info-box">
            <h4>Disclaimer Title</h4>
            <p>lorem ipsum lorem ipsum loerem aasfasasfasvas
                sadfsafasfasfasf asdfmaslf loreme  ipsum mark
                christian biglang-awa. 
            </p>
        </div>

        <?php the_content();?>
    </article>
    <?php endwhile;

    else :
        echo '<p> No Content Found!</p>';

    endif;

get_footer();
?>