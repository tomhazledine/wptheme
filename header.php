<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>

  </head>
  <body>
    <div id="header">
 <div id="headerimg">
   <h1>
    <a href="<?php echo get_option('single'); ?>"></a>
       <?php bloginfo('name'); ?>
   </h1>
     <div class="description">
       <?php bloginfo('description'); ?>
     </div>
  </div>
</div>
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
function default_header_nav() { // HTML markup for a default message in menu location
echo "


";
}

function default_expanded_footer() {
echo "

Create the Expanded Footer
";
}

?>
  </body>
</html>
