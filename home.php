

<?php get_header(); ?>
  <div id="content">






      <h1>Latest Posts</h1>
<?php if ( function_exists( 'wp_pagenavi' ) ) {
    wp_pagenavi();
} else {
    echo 'hello!';
} ?>


 <div id="posthead">
    <?php

    if ( function_exists( 'wp_pagenavi' ) ) {
    wp_pagenavi();
} else {
    if ( get_next_posts_link() ) {
        next_posts_link();
    }

    if ( get_previous_posts_link() ) {
        previous_posts_link();
    }
}?>
        <div class="post_item">
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

</div>
<div id="navigation">
    <?php if ( function_exists( 'wp_pagenavi' ) ) {
    wp_pagenavi();
} else {
    if ( get_next_posts_link() ) {
        next_posts_link();
    }

    if ( get_previous_posts_link() ) {
        previous_posts_link();
    }
}?>

</div>


  </div>


<div id="delimiter">
</div>
  <?php get_footer(); ?>
