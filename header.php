<?php

// Do not allow directly accessing this file.
if (!defined('ABSPATH')) {
  exit('Direct script access denied.');
}

?><!DOCTYPE HTML>
<html <?php language_attributes(); ?>>

<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1, shrink-to-fit=no">
  <?php
  if (isset($_SERVER['HTTP_USER_AGENT']) && (false !== strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE'))) {
    echo '<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>';
  }

  $favicon = get_field('acf_theme_favicon', 'option');
  $mobile_favicon = get_field('acf_theme_favicon_ios_android', 'option');
  $header_bar_color = get_field('acf_theme_bar_color', 'option');

  if (!empty($favicon)) echo '<link rel="shortcut icon" href="' . esc_url($favicon['url']) . '">';
  if (!empty($mobile_favicon)) echo '<link rel="apple-touch-icon-precomposed" href="' . esc_url($mobile_favicon['url']) . '">';
  if (!empty($header_bar_color)) echo '<meta name="theme-color" content="' . $header_bar_color . '">';
  ?>
  <?php wp_head(); ?>
</head>

<body <?php body_class('loaded-hiding'); ?> itemscope="itemscope" itemtype="http://schema.org/WebPage">


<header class="tg-header">
  <div class="container">
    <div class="row align-items-center justify-content-between">
      <div class="col-auto">
        <?php beyond_get_logo('acf_theme_logo_header', 'acf_theme_logo_header_retina'); ?>
      </div>

      <div class="col-lg col-auto align-self-lg-start">
        <button class="tg-header__nav-open nav-open">
          <span></span>
        </button>

        <nav class="tg-header__nav-search" itemscope itemtype="http://schema.org/SiteNavigationElement"
             role="navigation">
          <?php beyond_get_nav_menu('tg-header__menu', 'tg-menu-id'); ?>

          <?php get_search_form(); ?>
        </nav>
      </div>
    </div>
  </div>

  <nav class="tg-header__mobile-nav-search" itemscope itemtype="http://schema.org/SiteNavigationElement"
       role="navigation">
    <?php beyond_get_nav_menu('tg-header__mobile-menu', 'tg-mobile-menu-id'); ?>

    <?php get_search_form(); ?>
  </nav>
</header>


<?php
$tg_subtitle = get_field('tg_subtitle');
$tg_image = get_field('tg_image');
$tg_description = get_field('tg_description');

if (!empty($tg_subtitle)) { ?>
<div class="tg-breadcrumbs">

  <div class="tg-breadcrumbs__top">
    <div class="container position-relative z-index-2">
      <div class="row justify-content-center align-items-center">
        <div class="col-xl-9">
          <div class="tg-breadcrumbs__title">
            <h1 class="f-size-xl-42 f-size-lg-38 f-size-md-34 f-size-28 text-uppercase l-height-110 mb-10">
              <?php the_title() ?>
            </h1>
            <h2 class="f-size-lg-26 f-size-md-22 f-size-sm-20 f-size-18 f-weight-400 pt-0 mb-0"><?php echo $tg_subtitle ?></h2>
          </div>
        </div>
      </div>
    </div>

    <div class="tg-breadcrumbs__image">
      <div class="tg-breadcrumbs__image-layer"
           style="background-image:url(<?php echo esc_url($tg_image['sizes']['bg_page']) ?>);">
      </div>
    </div>
  </div>

  <?php if (!empty($tg_description)) { ?>
    <div class="tg-breadcrumbs__description py-lg-50 py-30">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-10">
            <div class="f-size-lg-18 f-size-md-16 f-size-15 f-weight-300">
              <?php echo $tg_description ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>

</div>
<?php } ?>