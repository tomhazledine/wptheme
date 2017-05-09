<?php
/**

* Template Name: Custom Page Template

*/
get_header(); ?>

  <body>


     <div id="posthead">
        <?php

        if ( have_posts() ) :
    			while ( have_posts() ) : the_post();
            ?>
            <div id="posttitle">
                <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
            </div>
            <div id="posthead4">
                <?php the_content(); ?>
                <?php
$posttags = get_the_tags();
if ($posttags) {
  foreach($posttags as $tag) {
    echo '<img src="' . get_template_directory_uri() . '/assets/tagicon.png"
alt="' . $tag->name . '" />';
  }
}
?>
            </div>
            <?php
    			endwhile;
        endif;
        ?>
    </div>

    <?php function add_taxonomies_to_pages() {
 register_taxonomy_for_object_type( 'post_tag', 'page' );
 register_taxonomy_for_object_type( 'category', 'page' );
 }
add_action( 'init', 'add_taxonomies_to_pages' );?>


<?php get_footer('custom'); ?>
