<?php
/*
 * Template Name: Turkney Solution
 */

// Do not allow directly accessing this file.
if (!defined('ABSPATH')) {
  exit('Direct script access denied.');
}

get_header();

?>
  <div class="tg-turnkey">

    <?php
    $tg_ts_services = get_field('tg_ts_services');
    ?>
    <div class="tg-turnkey__section-1">
      <?php if (!empty($tg_ts_services)) {
        $i = 0;
        foreach ($tg_ts_services as $service) {
          $class = ($i % 2) ? '' : ' brand-secondary-bg'; ?>
          <div class="tg-turnkey__section-1__block<?php echo $class ?>">
            <div class="container">
              <div class="row justify-content-center">
                <div class="tg-turnkey__section-1__block__content mt-60 py-10 px-20 col-xl-9">
                  <div class="part-of-border brand-primary-bg"></div>
                  <div class="main-block">
                    <h2 class="pt-30 f-size-lg-42 f-size-md-36 f-size-30 mb-0 l-height-100">
                      <?php echo $service['title'] ?>
                    </h2>
                    <h3 class="pt-5 f-size-18">
                      <?php echo $service['subtitle'] ?>
                    </h3>
                    <div class="f-size-lg-18 f-size-md-16 f-size-15 l-height-130 mb-0 pb-20">
                      <?php echo $service['text'] ?>
                    </div>
                  </div>
                  <div class="lower-block">
                    <?php if (!empty($service['after_title'])) { ?>
                      <h4 class="f-size-lg-18 f-size-md-16 f-size-15 mb-5 pr-15">
                        <?php echo $service['after_title'] ?>
                      </h4>
                    <?php } ?>
                    <div class="tg-turnkey__section-1-lb brand-primary-bg py-10 pl-15 ml-0 f-size-md-16 f-size-15">
                      <?php echo $service['after_text'] ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php $i++;
        }
      } ?>
    </div>

    <?php
    $tg_ts_partners = get_field('tg_ts_partners');
    ?>
    <div class="tg-turnkey__section-2">
      <div class="tg-explore py-40 pb-80">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-11">
              <div class="tg-title text-uppercase f-size-lg-36 f-size-md-30 f-size-24 l-height-130 f-weight-700 mb-20">
                SEE TRIAGE partners AT WORK
              </div>
              <div class="row justify-content-around mt-40">
                <?php
                if (!empty($tg_ts_partners)) {
                  foreach ($tg_ts_partners as $partner) {
                    ?>
                    <div class="py-15">
                      <div class="tg-explore__item">
                        <div class="tg-explore__icon">
                          <div class="tg-explore__icon-img"
                               style="background-image:url(<?php echo esc_url($partner['icon']['url']) ?>)"></div>
                          <span class="f-size-lg-22 f-size-md-20 f-size-18 f-weight-500 l-height-120">
                            <?php echo $partner['title'] ?>
                          </span>
                        </div>
                        <div class="rd-more py-10 pl-10 f-weight-700 f-size-16">
                          <?php
                          $target = ($partner['link']['target'] === '_blank') ? 'target="_blank"' : '';
                          echo '<a href="' . $partner['link']['url'] . '" ' . $target . '>' . $partner['link']['title'] . '</a>'
                          ?>
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

    <div class="tg-turnkey__section-3 brand-secondary-bg">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-10 py-60">
            <div class="tg-title text-uppercase f-size-lg-36 f-size-md-30 f-size-24 l-height-130 f-weight-700 mb-20">
              WHY TRIAGE partners?
            </div>

            <?php
            $tg_ts_why_triage_partners = get_field('tg_ts_why_triage_partners');
            ?>
            <div class="tg-turnkey__section-3__main-content">
              <?php if (!empty($tg_ts_why_triage_partners)) {
                foreach ($tg_ts_why_triage_partners as $triage_partner) { ?>
                  <div class="feature">
                    <h4 class="f-size-md-20 f-size-18">
                      <?php echo $triage_partner['title'] ?>
                    </h4>
                    <p class="f-size-md-16 f-size-14">
                      <?php echo $triage_partner['text'] ?>
                    </p>
                  </div>
                <?php }
              } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
    $tg_template_art_title = get_field('tg_ts_process_title');
    $tg_template_art_description = get_field('tg_ts_process_description');
    $tg_template_art_link = get_field('tg_ts_process_link');
    $tg_template_art_image = get_field('tg_ts_process_image');

    $tg_template_art_reverse = false;

    include(locate_template('template-parts/template-art.php', false, false));
    ?>
  </div>
<?php get_footer(); ?>