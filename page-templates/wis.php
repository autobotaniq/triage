<?php
/*
 * Template Name: Software
 */

// Do not allow directly accessing this file.
if (!defined('ABSPATH')) {
  exit('Direct script access denied.');
}

get_header();

?>


<?php
$tg_software_solution_1_text = get_field('tg_software_solution_1_text');
$tg_software_solution_1_img = get_field('tg_software_solution_1_img');
$tg_software_solution_1_blocks = get_field('tg_software_solution_1_blocks');
?>
  <div class="tg-panel-solution pb-lg-60 pb-35">

    <div class="tg-panel-solution__top">
      <div class="d-flex flex-wrap justify-content-between align-items-start">
        <div class="tg-panel-solution__text">
          <div class="brand-primary-color f-size-lg-22 f-size-18 text-uppercase">
            <?php echo $tg_software_solution_1_text['beforetitle'] ?>
          </div>
          <div class="f-size-lg-36 f-size-md-30 f-size-26 f-weight-700 l-height-110 py-10">
            <?php echo $tg_software_solution_1_text['title'] ?>
          </div>
          <div class="f-size-lg-20 f-size-18">
            <?php echo $tg_software_solution_1_text['subtitle'] ?>
          </div>
          <div class="f-size-lg-18 f-size-16 f-weight-300 pt-10 l-height-120">
            <?php echo $tg_software_solution_1_text['description'] ?>
          </div>
        </div>

        <div class="tg-panel-solution__jp">
          <div class="tg-panel-solution__jp-img">
            <img src="<?php echo esc_url($tg_software_solution_1_img['sizes']['info_block_one']) ?>"
                 alt="">
          </div>
          <div class="tg-panel-solution__jp-layout"></div>
        </div>
      </div>
    </div>

    <div class="container pt-lg-40 pt-25">
      <div class="row justify-content-center">
        <div class="col-xl-10">

          <div class="row">
            <?php
            if (!empty($tg_software_solution_1_blocks)) {
              foreach ($tg_software_solution_1_blocks as $tg_software_block) { ?>
                <div class="col-lg-6 py-15">
                  <div class="tg-panel-solution__item p-md-30 p-20">
                    <img src="<?php echo esc_url($tg_software_block['logo']['url']) ?>"
                         alt="<?php echo esc_attr($tg_software_block['title']) ?>">

                    <div class="f-size-lg-20 f-size-18 f-weight-500 l-height-120 mb-15">
                      <?php echo esc_attr($tg_software_block['title']) ?>
                    </div>

                    <div class="tg-panel-solution__item-text">
                      <?php echo $tg_software_block['text'] ?>
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
$tg_software_solution_2_text = get_field('tg_software_solution_2_text');
$tg_software_solution_2_img = get_field('tg_software_solution_2_img');
$tg_software_solution_2_blocks = get_field('tg_software_solution_2_blocks');
?>
  <div class="tg-panel-solution tg-panel-solution_revers pb-lg-60 pb-35">

    <div class="tg-panel-solution__top">
      <div class="d-flex flex-wrap justify-content-between align-items-start">
        <div class="tg-panel-solution__text">
          <div class="brand-primary-color f-size-lg-22 f-size-18 text-uppercase">
            <?php echo $tg_software_solution_2_text['beforetitle'] ?>
          </div>
          <div class="f-size-lg-36 f-size-md-30 f-size-26 f-weight-700 l-height-110 py-10">
            <?php echo $tg_software_solution_2_text['title'] ?>
          </div>
          <div class="f-size-lg-20 f-size-18">
            <?php echo $tg_software_solution_2_text['subtitle'] ?>
          </div>
          <div class="f-size-lg-18 f-size-16 f-weight-300 pt-10 l-height-120">
            <?php echo $tg_software_solution_2_text['description'] ?>
          </div>
        </div>

        <div class="tg-panel-solution__jp">
          <div class="tg-panel-solution__jp-img">
            <img src="<?php echo esc_url($tg_software_solution_2_img['sizes']['info_block_one']) ?>"
                 alt="">
          </div>
          <div class="tg-panel-solution__jp-layout"></div>
        </div>
      </div>
    </div>

    <div class="container pt-lg-40 pt-25">
      <div class="row justify-content-center">
        <div class="col-xl-10">

          <div class="row">
            <?php
            if (!empty($tg_software_solution_2_blocks)) {
              foreach ($tg_software_solution_2_blocks as $tg_software_block) { ?>
                <div class="col-lg-6 py-15">
                  <div class="tg-panel-solution__item p-md-30 p-20">
                    <img src="<?php echo esc_url($tg_software_block['logo']['url']) ?>"
                         alt="<?php echo esc_attr($tg_software_block['title']) ?>">

                    <div class="f-size-lg-20 f-size-18 f-weight-500 l-height-120 mb-15">
                      <?php echo esc_attr($tg_software_block['title']) ?>
                    </div>

                    <div class="tg-panel-solution__item-text">
                      <?php echo $tg_software_block['text'] ?>
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
$tg_template_art_title = get_field('tg_software_art_title');
$tg_template_art_description = get_field('tg_software_art_description');
$tg_template_art_link = get_field('tg_software_art_link');
$tg_template_art_image = get_field('tg_software_art_image');

$tg_template_art_reverse = false;

include(locate_template('template-parts/template-art.php', false, false));
?>


<?php
$tg_software_process_title = get_field('tg_software_process_title');
$tg_software_process_description = get_field('tg_software_process_description');
$tg_software_process_link = get_field('tg_software_process_link');
$tg_software_process_image = get_field('tg_software_process_image');
?>
  <div class="tg-process">
    <div class="container py-35 py-xl-0">
      <div class="row align-items-center justify-content-center">
        <div class="col-xl-10">

          <div class="tg-process__item">
            <div class="f-size-lg-32 f-size-md-28 f-size-22 f-weight-700 text-uppercase l-height-110 mb-lg-20 mb-10">
              <?php echo $tg_software_process_title ?>
            </div>

            <div class="f-size-lg-20 f-size-16 l-height-110 mb-lg-40 mb-20">
              <?php echo $tg_software_process_description ?>
            </div>

            <?php
            $target = ($tg_software_process_link['target'] === '_blank') ? 'target="_blank"' : '';
            echo '<a href="' . $tg_software_process_link['url'] . '" class="tg-botton tg-botton_dark" ' . $target . '>' . $tg_software_process_link['title'] . '</a>'
            ?>
          </div>

        </div>
      </div>
    </div>

    <div class="tg-process__image"
         style="background-image:url(<?php echo $tg_software_process_image['sizes']['bg_page'] ?>);">
    </div>
  </div>


<?php
$tg_software_partners_title = get_field('tg_software_partners_title');
$tg_software_partners_list_partners = get_field('tg_software_partners_list_partners');
?>
  <div class="tg-partners py-lg-50 py-30">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-11">
          <div class="tg-title mb-40">
            <?php echo $tg_software_partners_title ?>
          </div>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-xl-11">

          <div class="tg-partners__lists">
            <div class="row">
              <?php
              if (!empty($tg_software_partners_list_partners)) {
                $i = 1;
                foreach ($tg_software_partners_list_partners as $list_partners) {
                  $thumb = 'tg-partners__thumb_ov-' . $i;
                  ?>
                  <div class="col-lg-4 col-sm-6 py-25">
                    <div class="tg-partners__item">
                      <div class="tg-partners__thumb mb-lg-35 mb-20 <?php echo $thumb ?>">
                        <img src="<?php echo esc_url($list_partners['thumbnail']['sizes']['tumb_partners']) ?>"
                             alt="<?php echo esc_attr($list_partners['title']) ?>">
                      </div>

                      <div class="f-size-20 l-height-110 f-weight-700 mb-10">
                        <?php echo esc_attr($list_partners['title']) ?>
                      </div>

                      <div class="f-size-lg-18 f-size-16 l-height-120 f-weight-300">
                        <?php echo $list_partners['text'] ?>
                      </div>
                    </div>
                  </div>
                  <?php
                  if($i >= 6) $i = 1;
                  $i++;
                }
              } ?>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>


<?php
$tg_software_ready_title = get_field('tg_software_ready_title');
$tg_software_ready_description = get_field('tg_software_ready_description');
$tg_software_ready_link = get_field('tg_software_ready_link');
?>
<div class="tg-template-ready">
  <div class="tg-template-ready__top">
    <div class="container position-relative z-index-2">
      <div class="row align-items-center">
        <div class="col-12">
          <div class="tg-template-ready__title">
            <div class="f-size-xl-32 f-size-lg-30 f-size-md-28 f-size-sm-26 f-size-24 text-uppercase f-weight-700 l-height-110 mb-20">
              <?php echo $tg_software_ready_title ?>
            </div>
            <div class="f-size-lg-20 f-size-md-18 f-size-16 f-weight-400 mb-40">
              <?php echo $tg_software_ready_description ?>
            </div>

            <?php
            $target = ($tg_software_ready_link['target'] === '_blank') ? 'target="_blank"' : '';
            echo '<a href="' . $tg_software_ready_link['url'] . '" class="tg-botton tg-botton_white" ' . $target . '>' . $tg_software_ready_link['title'] . '</a>'
            ?>
          </div>
        </div>
      </div>
    </div>

    <div class="tg-template-ready__image">
      <div class="tg-template-ready__image-layer"></div>
    </div>
  </div>
</div>


<?php get_footer(); ?>