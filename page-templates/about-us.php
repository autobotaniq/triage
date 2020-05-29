<?php
/*
 * Template Name: About us
 */

// Do not allow directly accessing this file.
if (!defined('ABSPATH')) {
  exit('Direct script access denied.');
}
get_header();
?>
  <div class="tg-about">
    <div class="tg-about__approach pt-60 pb-15">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-11">
            <div class="tg-title">OUR APPROACH</div>
            <h3 class="tg-title tg-about__approach__tg-title-subtitle">Identify challenges, develop solutions.</h3>
          </div>
          <div class="tg-news__articles-container tg-maw-720 mb-40">

            <?php
            $tg_about_approach_list = get_field('tg_about_approach_list');
            if (!empty($tg_about_approach_list)) {
              foreach ($tg_about_approach_list as $approach_list) { ?>
                <div class="article">
                  <div class="image"
                       style="background-image: url(<?php echo $approach_list['img']['sizes']['tumb_partners'] ?>)"></div>
                  <div class="info px-15 py-5">
                    <div class="f-size-26 f-weight-700 py-10">
                      <?php echo $approach_list['title'] ?>
                    </div>
                    <p class="f-size-16 pb-5 mb-0">
                      <?php echo $approach_list['text'] ?>
                    </p>
                  </div>
                </div>
              <?php }
            } ?>

          </div>
        </div>
      </div>
    </div>

    <?php
    $tg_about_story_before_text = get_field('tg_about_story_before_text');
    $tg_about_story_title = get_field('tg_about_story_title');
    $tg_about_story_img = get_field('tg_about_story_img');
    $tg_about_story_after_text = get_field('tg_about_story_after_text');
    ?>
    <div class="tg-about__story pt-60 pb-15">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-11">
            <div class="tg-title">OUR STORY</div>
          </div>
          <div class="col-xl-10 py-30">
            <div class="f-size-lg-18 f-size-md-16 f-size-15 f-weight-300">
              <?php echo $tg_about_story_before_text ?>
            </div>
          </div>
        </div>
      </div>

      <div class="tg-info-block-one pb-40">
        <div class="d-flex flex-wrap justify-content-between">
          <div class="tg-info-block-one__text">
            <div class="f-size-lg-30 f-size-md-26 f-size-22 f-weight-700 l-height-110 mb-15 ">
              <?php echo $tg_about_story_title ?>
            </div>
          </div>
          <div class="tg-info-block-one__jp">
            <div class="tg-info-block-one__jp-img">
              <img src="<?php echo esc_url($tg_about_story_img['sizes']['bg_page']) ?>" alt="">
            </div>
            <div class="tg-info-block-one__jp-layout"></div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-10 py-30">
            <div class="f-size-lg-18 f-size-md-16 f-size-15 f-weight-300">
              <?php echo $tg_about_story_after_text ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php
    $tg_template_art_title = get_field('tg_story_art_title');
    $tg_template_art_description = get_field('tg_story_art_description');
    $tg_template_art_link = get_field('tg_story_art_link');
    $tg_template_art_image = get_field('tg_story_art_image');

    $tg_template_art_reverse = false;

    include(locate_template('template-parts/template-art.php', false, false));
    ?>

    <?php
    $tg_story_partners_description = get_field('tg_story_partners_description');
    $tg_story_partners = get_field('tg_story_partners');
    ?>
    <div class="tg-about__partners-container pt-30 pb-20">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-9">
            <div class="tg-title t-align-center t-transform-uppercase">Partners</div>
          </div>
          <div class="col-xl-9 py-30">
            <div class="f-size-lg-18 f-size-md-18 f-size-16 f-weight-300">
              <p>
                <?php echo $tg_story_partners_description ?>
              </p>
            </div>
            <div class="tg-about-partners">
              <?php if (!empty($tg_story_partners)) {
                foreach ($tg_story_partners as $partner) { ?>
                  <div class="tg-about-partners__item"
                       style="background-image:url(<?php echo esc_url($partner['url']) ?>);"></div>
                <?php }
              } ?>
            </div>
          </div>

        </div>
      </div>
    </div>

    <?php /* ?>
    <div class="tg-about__news-container pt-30 pb-20">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 block">
            <div class="tg-title tg-title__news t-transform-uppercase t-align-center">
              read TRIAGE partners in the news <br>
              <span class="tg-title__news__sub-title f-size-18 f-weight-400 t-transform-capitalize">View Our Case Studies</span>
            </div>
            <div class="tg-about__news-container__articles flex-wrap">
              <div class="article mt-25 mx-5">
                <div class="image"
                     style="background-image: url('<?php bloginfo('template_url'); ?>/assets/img/news.jpg')">
                </div>
                <div class="info py-5 px-10">
                  <h1 class="f-size-20 t-transform-uppercase pb-30">Title</h1>
                  <a href="#" class="rd-more t-transform-uppercase f-weight-700">Read more</a>
                </div>
              </div>
              <div class="article mt-25 mx-5">
                <div class="image"
                     style="background-image: url('<?php bloginfo('template_url'); ?>/assets/img/news.jpg')">
                </div>
                <div class="info py-5 px-10">
                  <h1 class="f-size-20 t-transform-uppercase pb-30">Title</h1>
                  <a href="#" class="rd-more t-transform-uppercase f-weight-700">Read more</a>
                </div>
              </div>
              <div class="article mt-25 mx-5">
                <div class="image"
                     style="background-image: url('<?php bloginfo('template_url'); ?>/assets/img/news.jpg')">
                </div>
                <div class="info py-5 px-10">
                  <h1 class="f-size-20 t-transform-uppercase pb-30">Title</h1>
                  <a href="#" class="rd-more t-transform-uppercase f-weight-700">Read more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php */ ?>
  </div>
<?php get_footer(); ?>