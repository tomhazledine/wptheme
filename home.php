

<?php get_header(); ?>
  <div id="content">






      <h1>Latest Posts</h1>
<?php wp_pagenavi(); ?>
 <div id="posthead">
    <?php

    if ( have_posts() ) :
			while ( have_posts() ) : the_post();
        ?>
        <div class="post_item">
            <div id="posthead2">
                </br>
                <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
            </div>
            <div id="posthead3">
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
  <?php get_footer(); ?>
