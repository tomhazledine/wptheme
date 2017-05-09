<?php
/*Template Name : Nature */
?>
<?php get_header();?>
<div id="content">






    <h1>News</h1>
<?php wp_pagenavi(); ?>
<?php

if ( have_posts() ) :
        while ( have_posts() ) : the_post();
    ?>
    <div class="post_item post_item_news">
        <div class="posthead2">
            </br>
            <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
        </div>
        <div class="posthead3">
            </br>
            <a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a>
            </br>
            <!-- </a> -->
        </div>

    </div>
    <?php
        endwhile;
    endif;
    ?>
    </div>
    <div id="navigation">
    <?php wp_pagenavi(); ?>

    </div>


    </div>


    <div id="delimiter">
    </div>
    <?php get_footer();?>
