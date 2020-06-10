<?php
/*
 * Template Name: Contact
 */

// Do not allow directly accessing this file.
if (!defined('ABSPATH')) {
  exit('Direct script access denied.');
}

get_header();

$tg_contact_form = get_field('tg_contact_form');
$tg_contact_locations = get_field('tg_contact_locations');
$tg_contact_description = get_field('tg_contact_description');

?>

  <div class="tg-contact mt-20">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-10">
          <div class="tg-contact__form-container py-30 mb-70">
            <div class="tg-title">
              Let’s connect.
            </div>
            <div class="tg-contact__form my-25">
              <?php echo do_shortcode($tg_contact_form) ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="tg-contact__locations-container py-md-60 py-30">
      <div class="container">
        <div class="tg-title">
          LOCATIONS
        </div>

        <div class="container">
          <div class="text-center f-size-lg-18 f-size-16 pt-30">
            <?php echo $tg_contact_description ?>
          </div>
        </div>

        <div class="tg-location">
          <div class="container">
            <div class="tg-location-map">
              <img src="<?php echo esc_url(B_STYLE_URL . '/assets/img/triage_map.png') ?>" alt="">

              <?php if (!empty($tg_contact_locations)) {
                foreach ($tg_contact_locations as $location) {
                  $map_id = 'tg-' . mb_strtolower($location['state'] . '-' . str_replace(' ','-', $location['city']));
                  $red_icon = !empty($location['red_icon']) ? 'red-icon' : '';

                  $map_marker_id = '.tg-' . mb_strtolower($location['state'] . '-' . str_replace(' ','-', $location['city']));
                  ?>
                  <div class="tg-location-map__marker <?php echo esc_attr($map_id); ?>"
                       data-marker-id="<?php echo esc_attr($map_marker_id) ?>">
                    <div class="tg-location-map__marker-icon <?php echo $red_icon; ?>"></div>

                    <div class="tg-location-map__marker-popup">
                      <div class="tg-location-map__marker-state">
                        <?php echo $location['state'] ?>
                      </div>

                      <div class="tg-location-map__marker-address">
                        <?php echo $location['address'] ?>
                      </div>
                    </div>
                  </div>
                <?php }
              } ?>
            </div>
          </div>

          <div class="container">
            <div class="row justify-content-center">
              <?php if (!empty($tg_contact_locations)) {
                foreach ($tg_contact_locations as $location) {
                  $map_item_id = '.tg-' . mb_strtolower($location['state'] . '-' . str_replace(' ','-', $location['city']));
                  ?>
                  <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="tg-location-item"
                         data-map-id="<?php echo esc_attr($map_item_id) ?>">
                      <div class="tg-location-item__state">
                        <?php echo $location['state'] ?>
                      </div>
                      <div class="tg-location-item__city">
                        <?php echo $location['city'] ?>
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
<?php get_footer(); ?>