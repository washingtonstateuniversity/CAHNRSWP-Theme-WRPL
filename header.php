<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title><?php bloginfo('name'); ?></title>

<meta name="viewport" content="width=device-width,initial-scale=1">

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<?php wp_head(); ?>
</head>

<body>
<!-- <div id="container"> //-->
<header>
<!-- <div id="header"> //-->

  <?php get_template_part( 'parts/header', 'logo' ); ?>
  <?php get_template_part( 'parts/header', 'nav' ); ?>
  
  <?php  //wp_nav_menu( array( 'theme_location' => 'mobile-menu' ) ); ?>
 

<!--</div> //-->
</header>
