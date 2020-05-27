<?php


// Do not allow directly accessing this file.
if (!defined('ABSPATH')) {
  exit('Direct script access denied.');
}

if (!class_exists('Beyond_Sidebars')) :

  class Beyond_Sidebars
  {

    /**
     * The class constructor
     */
    public function __construct()
    {
      add_action('widgets_init', array($this, 'widgets_init'));
    }

    /**
     * Register our sidebars.
     */
    public function widgets_init()
    {

      register_sidebar(
        array(
          'name' => __('Sidebar', 'beyond'),
          'id' => 'sidebar-l',
          'description' => __('', 'beyond'),
          'before_widget' => '<section id="%1$s" class="widget %2$s">',
          'after_widget' => '</section>',
          'before_title' => '<div class="heading"><h4 class="widget-title">',
          'after_title' => '</h4></div>',
        )
      );

    }

  }

  // initialize
  beyond_register_class('Beyond_Sidebars');

endif;