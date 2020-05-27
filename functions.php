<?php

// Do not allow directly accessing this file.
if (!defined('ABSPATH')) {
  exit('Direct script access denied.');
}


/**
 * Include the main Beyond.
 */
include_once('include/class-beyond.php');
include_once('include/helper-functions.php');

include_once('include/tgm-config.php');
//include_once( 'include/translit' );

//include_once('include/acf-config.php');

/**
 * Post types
 */
//include_once( 'include/post-type-1.php' );


/**
 * Instance class Beyond
 *
 * @return object
 */
function Beyond()
{
  return Beyond::get_instance();
}

/**
 * Register classes
 *
 * @param $class
 * @return mixed
 */
function beyond_register_class($class)
{
  return Beyond()->register_class($class);
}