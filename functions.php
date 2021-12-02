<?php
function KreativeBlomster_enqueue_style() {
   wp_enqueue_style("KreativeBlomster-style", get_stylesheet_uri());

}
add_action("wp_enqueue_scripts", "KreativeBlomster_enqueue_style");


function wpb_custom_new_menu() {
    register_nav_menus(
      array(
        'my-custom-menu' => __( 'My Custom Menu' ),

      )
    );
  }
  add_action( 'init', 'wpb_custom_new_menu' );

  function footer_custom_new_menu() {
    register_nav_menus(
      array(
        'my-footer-menu' => __( 'My footer Menu' ),

      )
    );
  }
  add_action( 'init', 'footer_custom_new_menu' );
?>