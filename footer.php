<?php

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

$acf_theme_footer_address = get_field('acf_theme_footer_address', 'option');
$acf_theme_footer_copyright = get_field('acf_theme_footer_copyright', 'option');
$acf_theme_footer_socials = get_field('acf_theme_footer_socials', 'option');

?>

<footer class="tg-footer pt-70 pb-40" itemscope itemtype="http://schema.org/WPFooter">
  <div class="container">
    <div class="row align-items-center justify-content-lg-between justify-content-center">
      <div class="col-auto">
        <?php beyond_get_logo('acf_theme_logo_footer', 'acf_theme_logo_footer_retina'); ?>
      </div>

      <div class="col-lg d-none d-lg-block">
        <nav class="tg-footer__nav" itemscope itemtype="http://schema.org/SiteNavigationElement" role="navigation">
          <?php beyond_get_nav_menu('tg-footer__menu', 'tg-footer-menu-id', 'theme_menu_footer'); ?>
        </nav>
      </div>
    </div>

    <div class="tg-footer__address text-center text-lg-right pb-lg-50 pb-25 pt-lg-10 pt-30">
      <div class="f-size-20 f-weight-700 mb-5">Corporate Office</div>
      <div class="f-size-18"><?php echo $acf_theme_footer_address ?></div>
    </div>

    <div class="row justify-content-md-end justify-content-center">
      <div class="col-xl-9 col-lg-10">
        <div class="tg-footer__social pb-25">
          <a class="tg-footer__social-fb" href="<?php echo $acf_theme_footer_socials['facebook'] ?>"></a>
          <a class="tg-footer__social-tw" href="<?php echo $acf_theme_footer_socials['twitter'] ?>"></a>
          <a class="tg-footer__social-in" href="<?php echo $acf_theme_footer_socials['linkedin'] ?>"></a>
        </div>

        <div class="row justify-content-center justify-content-lg-between align-items-center">
          <div class="col-lg-auto order-lg-1">
            <nav class="tg-footer__nav-copyright" itemscope itemtype="http://schema.org/SiteNavigationElement" role="navigation">
              <?php beyond_get_nav_menu('tg-footer__menu-copyright', 'tg-footer-menu-copyright-id', 'theme_menu_footer_copyright'); ?>
            </nav>
          </div>
          <div class="col-lg-auto order-lg-0">
            <div class="tg-footer__copyright pt-30 pt-lg-0">
              <span itemprop="copyrightYear"><?php echo '© ' . date('Y'); ?></span>
              <?php echo $acf_theme_footer_copyright ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>


    <?php wp_footer(); ?>
</body>

</html>