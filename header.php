<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <title></title>

    <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
<link href="<?php echo get_bloginfo('template_directory'); ?>/pagenavi-css.css" rel="stylesheet">
<link href="<?php echo get_bloginfo('template_directory'); ?>/archives-page-style.css" rel="stylesheet">
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

    <div id="main-nav">
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
    </div>
