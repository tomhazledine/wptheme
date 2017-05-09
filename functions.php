<?php

function register_my_menus() {
register_nav_menus(
array(
'header_navigation' => __( 'Header Navigation' ),
'expanded_footer' => __( 'Expanded Footer' )
)
);
}
add_action( 'init', 'register_my_menus' );

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $my_excerpt ) {
    return 10;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

function add_meta_tags() {
    global $post;
    if ( is_single() ) {
        $meta = strip_tags( $post->post_content );
        $meta = strip_shortcodes( $post->post_content );
        $meta = str_replace( array("\n", "\r", "\t"), ' ', $meta );
        $meta = substr( $meta, 0, 125 );
        $keywords = get_the_category( $post->ID );
        $metakeywords = '';
        foreach ( $keywords as $keyword ) {
            $metakeywords .= $keyword->cat_name . ", ";
        }
        echo '<meta name="description" content="' . $meta . '" />' . "\n";
        echo '<meta name="keywords" content="' . $metakeywords . '" />' . "\n";
    }
}
add_action( 'wp_head', 'add_meta_tags' , 2 );

function namespace_add_custom_types( $query ) {
  if( is_category() || is_tag() && empty( $query->query_vars['suppress_filters'] ) ) {
    $query->set( 'post_type', array(
     'post', 'nav_menu_item', 'your-custom-post-type-here'
		));
	  return $query;
	}
}
add_filter( 'pre_get_posts', 'namespace_add_custom_types' );

// Define what post types to search
function searchAll( $query ) {
	if ( $query->is_search ) {
		$query->set( 'post_type', array( 'post', 'page', 'feed', 'custom_post_type1', 'custom_post_type2'));
	}
	return $query;
}

// The hook needed to search ALL content
add_filter( 'the_search_query', 'searchAll' );

require get_template_directory() . '/archives-page-functions.php';
