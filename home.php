

<?php get_header(); ?>
  <div id="content">

    <?php
    wp_nav_menu(array(
    'theme_location' => 'header_navigation', // menu slug from step 1
    'container' => false, // ‘div’ container will not be added
    'menu_class' => 'nav', //

    'fallback_cb' => 'default_header_nav', // name of default function from step 2
    ));

    ?>

      <div id="main-nav"><?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
      </div>

      <h1>Home</h1>

    <?php

    if ( have_posts() ) :
			while ( have_posts() ) : the_post();
        ?>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        <?php
			endwhile;
    endif;
    ?>
  </div>

<div id="delimiter">
</div>
  <?php get_footer(); ?>
