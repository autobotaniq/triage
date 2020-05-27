<?php

// Do not allow directly accessing this file.
if (!defined('ABSPATH')) {
  exit('Direct script access denied.');
}

if (!class_exists('Beyond_Init')) :

  /**
   * Beyond_Init Class.
   *
   * @class Beyond_Init
   */
  class Beyond_Init
  {

    /**
     * Woocommerce styles.
     *
     * @access public
     * @var string
     */
    public $woocommerce_styles = true;

    /**
     * Custom stylesheet uri.
     *
     * @static
     * @access public
     * @var string
     */
    public static $stylesheet_uri = B_STYLE_URL . '/assets/css/style.css';

    /**
     * The class constructor
     */
    public function __construct()
    {
      /* Action */
      add_action('wp_enqueue_scripts', array($this, 'set_styles'));
      add_action('wp_enqueue_scripts', array($this, 'set_scripts'));
      add_action('wp_enqueue_scripts', array($this, 'set_remove'));
      add_action('after_setup_theme', array($this, 'add_theme_supports'));
      add_action('after_setup_theme', array($this, 'register_nav_menus'));
      add_action('after_setup_theme', array($this, 'add_image_size'));
      add_action('acf/init', array($this, 'theme_acf_init'));
      add_action('widgets_init', array($this, 'widget_init'));
      add_action('wp_footer', array($this, 'deregister_scripts'));
      add_action('wp_default_scripts', array($this, 'remove_jquery_migrate'));

      /* Filter */
      //add_filter('acf/settings/show_admin', '__return_false'); // Hide ACF field group menu item
      add_filter('big_image_size_threshold', '__return_false');
      add_filter('use_block_editor_for_post', '__return_false', 5);
      if (!$this->woocommerce_styles) {
        add_filter('woocommerce_enqueue_styles', '__return_empty_array');
      }

      $this->option_theme();
    }


    /**
     * Init options theme
     */
    public function option_theme()
    {
      $option_theme = array(
        'permalink_structure' => '/%postname%/',
        //'category_base' => '/tours',
        //'tag_base' => '/tag',
      );
      foreach ($option_theme as $key => $value) {
        update_option($key, $value);
      }
      global $wp_rewrite;
      $wp_rewrite->flush_rules();
    }

    /**
     * Connection styles
     */
    public function set_styles()
    {

      wp_enqueue_style('roboto', '//fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap', array(), false, 'all');
      wp_enqueue_style('bootstrap', B_STYLE_URL . '/assets/css/bootstrap.css', array(), false, 'all');

      wp_enqueue_style('theme-style', self::$stylesheet_uri, array(), B_VERSION, 'all');

    }

    /**
     * Connection scripts
     */
    public function set_scripts()
    {

      wp_enqueue_script('jquery');

      wp_enqueue_script('theme-script', B_TEMP_URL . '/assets/js/script.js', array('jquery'), B_VERSION, true);

      wp_localize_script('jquery', 'beyondVars', array(
        'adminAjaxUrl' => admin_url('admin-ajax.php'),
        'ajaxNonce' => wp_create_nonce('ajax-nonce')
      ));

    }

    /**
     * Register supports
     */
    public function add_theme_supports()
    {

      // Localisation Support
      load_theme_textdomain('html5blank', B_TEMP_PATH . '/languages');

      // Let WordPress manage the document title.
      add_theme_support('title-tag');

      // Add default posts and comments RSS feed links to head.
      add_theme_support('automatic-feed-links');

      // Enable support for Post Thumbnails on posts and pages.
      add_theme_support('post-thumbnails');

      // Switch default core markup for search form, comment form, and comments to output valid HTML5.
      add_theme_support('html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
      ));

      // Post formats
      add_theme_support('post-formats', array(
        'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'chat', 'audio'
      ));

      add_theme_support('woocommerce');

    }

    /**
     * Register navigation menus.
     *
     * @access  public
     */
    public function register_nav_menus()
    {
      register_nav_menus(array(
        'theme_menu' => __('Menu', 'ld'),
        'theme_menu_footer' => __('Menu Footer', 'ld'),
        'theme_menu_footer_copyright' => __('Menu Footer copyright', 'ld'),
      ));
    }

    /**
     * Add image sizes.
     *
     * @access  public
     */
    public function add_image_size()
    {
      add_image_size('info_block_one', 856, 692, true);
      add_image_size('info_expert', 888, 316, true);
      add_image_size('bg_page', 1000, 99999);
    }

    /**
     * Register widgets.
     *
     * @access  public
     */
    public function widget_init()
    {

      //register_widget('Popular_News_Widget');

    }

    /**
     * ACF Init
     */
    public function theme_acf_init()
    {
      if (function_exists('acf_add_options_page')) {
        $option_page = acf_add_options_page(array(
          'page_title' => __('Theme general settings', 'my_text_domain'),
          'menu_title' => __('Theme settings', 'my_text_domain'),
          'menu_slug' => 'theme-general-settings',
          'position' => 1.1
        ));
      }
    }

    /**
     * Load Enqueued Scripts in the Footer
     */
    public function set_remove()
    {
      remove_action('wp_head', 'wp_print_scripts');
      remove_action('wp_head', 'wp_print_head_scripts', 9);
      remove_action('wp_head', 'wp_enqueue_scripts', 1);
      remove_action('wp_head', 'feed_links', 2);
      remove_action('wp_head', 'feed_links_extra', 3);
      remove_action('wp_head', 'rsd_link');
      remove_action('wp_head', 'wlwmanifest_link');
      remove_action('wp_head', 'index_rel_link');
      remove_action('wp_head', 'parent_post_rel_link', 10);
      remove_action('wp_head', 'start_post_rel_link', 10);
      remove_action('wp_head', 'adjacent_posts_rel_link', 10);
      remove_action('wp_head', 'wp_generator');
      remove_action('wp_head', 'rel_canonical');
      remove_action('wp_head', 'wp_shortlink_wp_head');
      remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10);

      //wp_dequeue_style('wp-block-library'); // Wordpress core
      //wp_dequeue_style('wp-block-library-theme'); // Wordpress core
      //wp_dequeue_style('wc-block-style'); // WooCommerce
      //wp_dequeue_style('storefront-gutenberg-blocks'); // Storefront theme
    }

    public function deregister_scripts()
    {
      wp_deregister_script('wp-embed');
    }

    public function remove_jquery_migrate($scripts)
    {
      if (!is_admin() && isset($scripts->registered['jquery'])) {
        $script = $scripts->registered['jquery'];

        if ($script->deps) {
          $script->deps = array_diff($script->deps, array(
            'jquery-migrate'
          ));
        }
      }
    }

  }

  // initialize
  beyond_register_class('Beyond_Init');
endif;