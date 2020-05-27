<?php

// Do not allow directly accessing this file.
if (!defined('ABSPATH')) {
  exit('Direct script access denied.');
}

if (!class_exists('Beyond')) :

  /**
   * Main Beyond Class.
   *
   * @class Beyond
   * @version  1.0.0
   */
  class Beyond
  {

    /**
     * The theme version.
     *
     * @static
     * @access public
     * @var string
     */
    public static $version = '1.0.0';

    /**
     * The one, true instance of object.
     *
     * @static
     * @access public
     * @var null|object
     */
    public static $instance = null;

    /**
     * @var array Contains an array of classes instances
     */
    public $instances = array();

    /**
     * Access the single instance of this class.
     *
     * @return Beyond
     */
    public static function get_instance()
    {
      if (null === self::$instance) {
        self::$instance = new Beyond();
      }
      return self::$instance;
    }

    /**
     * The class constructor
     */
    public function __construct()
    {
      $this->define_constants();
      $this->class_include();
    }

    /**
     * Define constants.
     */
    private function define_constants()
    {
      if (!defined('B_VERSION')) define('B_VERSION', self::$version);
      if (!defined('B_TEMP_PATH')) define('B_TEMP_PATH', get_template_directory());
      if (!defined('B_TEMP_URL')) define('B_TEMP_URL', get_template_directory_uri());
      if (!defined('B_STYLE_PATH')) define('B_STYLE_PATH', get_stylesheet_directory());
      if (!defined('B_STYLE_URL')) define('B_STYLE_URL', get_stylesheet_directory_uri());
    }

    public function class_include()
    {
      include_once('class-beyond-tgm.php');
      include_once('class-beyond-sidebars.php');
      include_once('class-beyond-walker-nav-menu.php');
      include_once('class-beyond-init.php');

      /* Widgets */
      //include_once('widget/class-widget-popular.php');
    }

    /**
     *  register_class
     *
     *  This function will register a class instance
     *
     * @param  $class (string)
     *
     */
    function register_class($class)
    {
      $instance = new $class();
      $name = strtolower($class);
      $this->instances[$name] = $instance;
    }

  }

  new Beyond();

endif;