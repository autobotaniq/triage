<?php
/*
 * Template Name: Data We Enable
 */

// Do not allow directly accessing this file.
if (!defined('ABSPATH')) {
  exit('Direct script access denied.');
}

get_header();

?>


<?php
$tg_dwe_double_block = get_field('tg_dwe_double_block');
?>
  <div class="tg-double-block pt-lg-70 pt-40 pb-lg-50 pb-30">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-9 col-lg-11">

          <div class="tg-double-block__container">
            <div class="row">
              <?php if (!empty($tg_dwe_double_block)) {
                foreach ($tg_dwe_double_block as $double_block) { ?>
                  <div class="col-md-6 py-md-0 py-20">
                    <div class="tg-double-block__item">
                      <div class="f-size-lg-42 f-size-md-36 f-size-30 f-weight-700 l-height-110 mb-15">
                        <?php echo $double_block['title'] ?>
                      </div>

                      <div class="tg-double-block__text">
                        <?php echo $double_block['text'] ?>
                      </div>
                    </div>
                  </div>
                <?php }
              } ?>

            </div>
          </div>

        </div>
      </div>
    </div>
  </div>


<?php
$tg_dwe_partners_items = get_field('tg_dwe_partners_items');
?>
  <div class="tg-dwe-partners pt-25 pb-40">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-10">
          <div class="tg-title text-uppercase text-white mb-25">
            WHY TRIAGE partners?
          </div>

          <div class="row">
            <?php if (!empty($tg_dwe_partners_items)) {
              foreach ($tg_dwe_partners_items as $item) { ?>
                <div class="col-lg-4 py-15">
                  <div class="tg-dwe-partners__item">
                    <div class="tg-dwe-partners__item-icon"
                         style="background-image:url(<?php echo esc_url($item['icon']['url']) ?>);"></div>

                    <div class="tg-dwe-partners__item-text">
                      <div class="f-size-18 f-weight-700 mb-15">
                        <?php echo $item['title'] ?>
                      </div>

                      <div class="f-size-16">
                        <?php echo $item['text'] ?>
                      </div>
                    </div>
                  </div>
                </div>
              <?php }
            } ?>
          </div>
        </div>
      </div>
    </div>
  </div>


<?php
$tg_template_art_title = get_field('tg_dwe_art_title');
$tg_template_art_description = get_field('tg_dwe_art_description');
$tg_template_art_link = get_field('tg_dwe_art_link');
$tg_template_art_image = get_field('tg_dwe_art_image');

$tg_template_art_reverse = true;

include(locate_template('template-parts/template-art.php', false, false));
?>


<?php get_footer(); ?>