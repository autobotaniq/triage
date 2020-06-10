<?php
/*
 * Template Name: Home Page
 */

// Do not allow directly accessing this file.
if (!defined('ABSPATH')) {
  exit('Direct script access denied.');
}

get_header();

?>


<?php
$tg_hp_slider = get_field('tg_hp_slider');
?>

  <div class="tg-header-slider">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <?php
        if (!empty($tg_hp_slider)) {
          foreach ($tg_hp_slider as $slide) {
            switch ($slide['versions']) {
              case 'v1': ?>
                <div class="swiper-slide">
                  <div class="tg-header-slider__item tg-header-slider__item_v1"
                       style="background-image:url(<?php echo esc_url($slide['version_1']['background']['url']) ?>);">

                    <div class="container">
                      <h1 class="f-size-xl-50 f-size-lg-46 f-size-md-40 f-size-34 l-height-110 mb-0 text-uppercase">
                        <?php echo $slide['version_1']['heading']; ?>
                      </h1>

                      <div class="f-size-xl-42 f-size-lg-38 f-size-md-30 f-size-26 l-height-110 pt-lg-50 pt-35 mt-lg-5">
                        <?php echo $slide['version_1']['text']; ?>
                      </div>
                    </div>
                  </div>
                </div>
                <?php break;
              case 'v2': ?>
                <div class="swiper-slide">
                  <div class="swiper-slide">
                    <div class="tg-header-slider__item tg-header-slider__item_v2"
                         style="background-image:url(<?php echo esc_url($slide['version_2']['background']['url']) ?>);">

                      <div class="container">
                        <h1 class="f-size-xl-50 f-size-lg-46 f-size-md-40 f-size-34 l-height-110 mb-30 text-uppercase">
                          <?php echo $slide['version_2']['heading']; ?>
                        </h1>

                        <div class="row">
                          <div class="col-4">
                            <div class="tg-header-slider__item-section">
                              <img src="<?php echo esc_url($slide['version_2']['section_1']['url']) ?>"
                                   alt="<?php echo esc_attr($slide['version_2']['heading']) ?>">
                            </div>
                          </div>
                          <div class="col-4">
                            <div class="tg-header-slider__item-section">
                              <img src="<?php echo esc_url($slide['version_2']['section_2']['url']) ?>"
                                   alt="<?php echo esc_attr($slide['version_2']['heading']) ?>">
                            </div>
                          </div>
                          <div class="col-4">
                            <div class="tg-header-slider__item-section">
                              <img src="<?php echo esc_url($slide['version_2']['section_3']['url']) ?>"
                                   alt="<?php echo esc_attr($slide['version_2']['heading']) ?>">
                            </div>
                          </div>
                        </div>

                        <div class="f-size-lg-26 f-size-sm-22 f-size-18 l-height-110 pt-lg-40 pt-30">
                          <?php echo $slide['version_2']['text']; ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php break;
              case 'v3': ?>
                <div class="swiper-slide">
                  <div class="tg-header-slider__item tg-header-slider__item_v3"
                       style="background-image:url(<?php echo esc_url($slide['version_3']['background']['url']) ?>);">

                    <div class="container">
                      <div class="row justify-content-lg-between justify-content-center mb-lg-200 mb-30">
                        <div class="col-auto">
                          <div class="f-size-xl-50 f-size-lg-46 f-size-md-40 f-size-34 l-height-110 f-weight-700 text-uppercase">
                            <?php echo $slide['version_3']['heading_left']; ?>
                          </div>
                        </div>
                        <div class="col-auto">
                          <div class="f-size-xl-50 f-size-lg-46 f-size-md-40 f-size-34 l-height-110 f-weight-700 text-uppercase">
                            <?php echo $slide['version_3']['heading_center']; ?>
                          </div>
                        </div>
                        <div class="col-auto">
                          <div class="f-size-xl-50 f-size-lg-46 f-size-md-40 f-size-34 l-height-110 f-weight-700 text-uppercase">
                            <?php echo $slide['version_3']['heading_right']; ?>
                          </div>
                        </div>
                      </div>

                      <div class="f-size-lg-26 f-size-sm-22 f-size-18 l-height-110 pb-xl-50">
                        <?php echo $slide['version_3']['text']; ?>
                      </div>
                    </div>
                  </div>
                </div>
                <?php break;
            }
          }
        } ?>
      </div>

      <div class="tg-swiper-pagination"></div>
    </div>
  </div>


<?php
$tg_hp_heading_info_one = get_field('tg_hp_heading_info_one');
$tg_hp_text_info_one = get_field('tg_hp_text_info_one');
$tg_hp_img = get_field('tg_hp_img');
?>
  <div class="tg-info-block-one pb-40">
    <div class="d-flex flex-wrap justify-content-between">
      <div class="tg-info-block-one__text">
        <div class="f-size-lg-36 f-size-md-30 f-size-26 f-weight-700 l-height-110 mb-15">
          <?php echo $tg_hp_heading_info_one ?>
        </div>

        <div class="f-size-lg-18 f-size-16 f-weight-300">
          <?php echo $tg_hp_text_info_one ?>
        </div>
      </div>

      <div class="tg-info-block-one__jp">
        <div class="tg-info-block-one__jp-img">
          <img src="<?php echo esc_url($tg_hp_img['sizes']['info_block_one']) ?>"
               alt="">
        </div>
        <div class="tg-info-block-one__jp-layout"></div>
      </div>
    </div>
  </div>


<?php
$tg_hp_help_title = get_field('tg_hp_help_title');
$tg_hp_help_description = get_field('tg_hp_help_description');
$tg_hp_help_blocks = get_field('tg_hp_help_blocks');
$tg_hp_help_link = get_field('tg_hp_help_link');
?>
  <div class="tg-block-help py-md-60 py-30">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-11">

          <div class="tg-title mb-15">
            <?php echo $tg_hp_help_title ?>
          </div>

          <div class="f-size-lg-18 f-size-16 f-weight-300 tg-maw-720 mx-auto mb-10">
            <?php echo $tg_hp_help_description ?>
          </div>


          <div class="row justify-content-center">
            <?php
            if (!empty($tg_hp_help_blocks)) {
              foreach ($tg_hp_help_blocks as $help_block) { ?>
                <div class="col-lg-3 col-md-4 col-sm-6 py-15">
                  <div class="tg-block-help__item">
                    <div class="tg-block-help__item-icon"
                         style="background-image:url(<?php echo esc_url($help_block['icon']['url']) ?>);"></div>
                    <div class="tg-block-help__item-title">
                      <?php echo $help_block['text'] ?>
                    </div>
                  </div>
                </div>
              <?php }
            } ?>
          </div>

          <div class="text-center pt-lg-40 pt-20">
            <?php
            $target = ($tg_hp_help_link['target'] === '_blank') ? 'target="_blank"' : '';
            echo '<a href="' . $tg_hp_help_link['url'] . '" class="tg-botton tg-botton_dark" ' . $target . '>' . $tg_hp_help_link['title'] . '</a>'
            ?>
          </div>

        </div>
      </div>
    </div>
  </div>


<?php
$tg_hp_explore_title = get_field('tg_hp_explore_title');
$tg_hp_explore_description = get_field('tg_hp_explore_description');
$tg_hp_explore_sub_brands = get_field('tg_hp_explore_sub_brands');
$tg_hp_explore_link = get_field('tg_hp_explore_link');
?>
  <div class="tg-explore py-40">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-11">
          <div class="text-center text-uppercase f-size-lg-36 f-size-md-30 f-size-24 l-height-130 f-weight-700 mb-20">
            <?php echo $tg_hp_explore_title ?>
          </div>
          <div class="f-size-lg-18 f-size-16 f-weight-300 tg-maw-720 mx-auto mb-10">
            <?php echo $tg_hp_explore_description ?>
          </div>

          <div class="row justify-content-center d-md-flex d-none">
            <?php
            if (!empty($tg_hp_explore_sub_brands)) {
              foreach ($tg_hp_explore_sub_brands as $sub_brands) { ?>
                <div class="col-md-4 col-6 py-15">
                  <div class="tg-explore__item">
                    <div class="tg-explore__icon">
                      <div class="tg-explore__icon-img"
                           style="background-image:url(<?php echo esc_url($sub_brands['icon']['url']) ?>);"></div>
                    </div>

                    <div class="tg-explore__logo">
                      <img src="<?php echo esc_url($sub_brands['logo']['url']) ?>"
                           alt="">
                    </div>

                    <div class="tg-explore__text">
                      <?php echo $sub_brands['text'] ?>
                    </div>
                  </div>
                </div>
              <?php }
            } ?>
          </div>

        </div>
      </div>
    </div>


    <div class="tg-explore-slider d-md-none pt-30 pb-15">
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <?php
          if (!empty($tg_hp_explore_sub_brands)) {
            foreach ($tg_hp_explore_sub_brands as $sub_brands) { ?>
              <div class="swiper-slide tg-explore__item">
                <div class="tg-explore__icon">
                  <div class="tg-explore__icon-img"
                       style="background-image:url(<?php echo esc_url($sub_brands['icon']['url']) ?>);"></div>
                </div>

                <div class="tg-explore__logo">
                  <img src="<?php echo esc_url($sub_brands['logo']['url']) ?>"
                       alt="">
                </div>

                <div class="tg-explore__text">
                  <?php echo $sub_brands['text'] ?>
                </div>
              </div>
            <?php }
          } ?>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="text-center pt-lg-40 pt-30">
        <?php
        $target = ($tg_hp_explore_link['target'] === '_blank') ? 'target="_blank"' : '';
        echo '<a href="' . $tg_hp_explore_link['url'] . '" class="tg-botton tg-botton_white" ' . $target . '>' . $tg_hp_explore_link['title'] . '</a>'
        ?>
      </div>
    </div>

  </div>


<?php
$tg_hp_expert_title = get_field('tg_hp_expert_title');
$tg_hp_expert_description = get_field('tg_hp_expert_description');
$tg_hp_expert_blocks = get_field('tg_hp_expert_blocks');
?>
  <div class="tg-expert py-md-50 py-30">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-11">
          <div class="tg-title mb-15">
            <?php echo $tg_hp_expert_title ?>
          </div>

          <div class="f-size-lg-18 f-size-16 f-weight-300 tg-maw-720 mx-auto mb-30">
            <?php echo $tg_hp_expert_description ?>
          </div>

          <div class="row justify-content-center">
            <?php
            if (!empty($tg_hp_expert_blocks)) {
              foreach ($tg_hp_expert_blocks as $expert_block) { ?>
                <div class="col-lg-6 py-15">
                  <div class="tg-expert__item">
                    <img src="<?php echo esc_url($expert_block['img']['sizes']['info_expert']) ?>"
                         alt="<?php echo esc_attr($expert_block['text']) ?>">

                    <div class="f-size-lg-20 f-size-18 l-height-100 f-weight-700 pt-15 pl-15">
                      <?php echo $expert_block['title'] ?>
                    </div>

                    <div class="f-size-lg-18 f-size-16 l-height-120 pt-10 pl-15">
                      <?php echo $expert_block['text'] ?>
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
$tg_hp_ready_title = get_field('tg_hp_ready_title');
$tg_hp_ready_description = get_field('tg_hp_ready_description');
$tg_hp_ready_link = get_field('tg_hp_ready_link');
$tg_hp_ready_img = get_field('tg_hp_ready_img');
?>
  <div class="tg-ready pt-30 pb-20">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-11">

          <div class="row justify-content-between align-items-center">
            <div class="col-xl-8 col-lg-7 text-white pb-30 pb-lg-0">
              <div class="f-size-lg-32 f-size-md-28 f-size-24 text-uppercase f-weight-700 text-center">
                <?php echo $tg_hp_ready_title ?>
              </div>

              <div class="f-size-lg-20 f-size-md-18 f-size-16 text-center text-lg-left "><?php echo $tg_hp_ready_description ?></div>

              <div class="text-center pt-lg-30 pt-20">
                <?php
                $target = ($tg_hp_ready_link['target'] === '_blank') ? 'target="_blank"' : '';
                echo '<a href="' . $tg_hp_ready_link['url'] . '" class="tg-botton tg-botton_white" ' . $target . '>' . $tg_hp_ready_link['title'] . '</a>'
                ?>
              </div>
            </div>

            <div class="col-xl-4 col-lg-5 text-center">
              <img src="<?php echo esc_url($tg_hp_ready_img['url']) ?>" alt="">
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>


<?php get_footer(); ?>