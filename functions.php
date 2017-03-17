<?php 
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

if ( !class_exists( 'ReduxFramework' ) && file_exists( dirname( __FILE__ ) . '/ReduxCore/framework.php' ) ) {
    require_once(dirname(__FILE__) . '/ReduxCore/framework.php');
}
if ( !isset( $redux_demo ) && file_exists( dirname( __FILE__ ) . '/options/config.php' ) ) {
    require_once( dirname( __FILE__ ) . '/options/config.php' );
}

add_theme_support( 'menus' );

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );