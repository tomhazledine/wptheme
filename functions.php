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
