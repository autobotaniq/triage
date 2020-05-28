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
$tg_template_art_reverse = false;
include(locate_template('template-parts/template-art.php', false, false));
?>

<?php get_footer(); ?>