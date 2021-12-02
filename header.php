<!DOCTYPE html>
<html <?php language_attributes()?> >
  <head>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900italic,900' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet'>
  <?php wp_head(); ?>
 <div class="menu" >
 <img class="logo" src="<?php the_field("logo") ?>">
   <?php
wp_nav_menu( array( 
    'theme_location' => 'my-custom-menu', 
    'container_class' => 'custom-menu-class' ) ); 
?>
</div>
  </head>
  <body>


  
   




