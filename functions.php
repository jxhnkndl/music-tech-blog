<?php

  function jkr_register_styles() {
    $version = wp_get_theme()->get( 'Version' );
    
    wp_enqueue_style( 
      'jkr-custom-styles',
      get_template_directory_uri() . '/style.css',
      array(),
      $version,
      'all'
    );
  }

  add_action( 'wp_enqueue_scripts', 'jkr_register_styles' )

?>