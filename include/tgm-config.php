<?php

add_action( 'tgmpa_register', 'theme_register_required_plugins' );

function theme_register_required_plugins() {
  $plugins = array(

    array(
      'name'               => 'ACF Pro',
      'slug'               => 'advanced-custom-fields-pro',
      'source'             => get_template_directory() . '/plugin-archives/advanced-custom-fields-pro.zip',
      'required'           => true
    ),

    array(
      'name'               => 'Safe SVG',
      'slug'               => 'safe-svg',
      'required'           => true
    ),

    array(
      'name'               => 'Autoptimize',
      'slug'               => 'autoptimize',
      'required'           => false
    ),

    array(
      'name'               => 'Regenerate Thumbnails',
      'slug'               => 'regenerate-thumbnails',
      'required'           => false
    ),

    array(
      'name'               => 'WebP Converter for Media',
      'slug'               => 'webp-converter-for-media',
      'required'           => false
    ),

    /*array(
      'name'               => 'Advanced Custom Fields: Table Field',
      'slug'               => 'advanced-custom-fields-table-field',
      'required'           => false
    ),*/

  );

  $config = array(
    'id'           => 'BraatheGruppen',
    'default_path' => '',
    'menu'         => 'tgmpa-install-plugins',
    'has_notices'  => true,
    'dismissable'  => false,
    'dismiss_msg'  => '',
    'is_automatic' => true,
    'message'      => '',
  );

  tgmpa( $plugins, $config );
}