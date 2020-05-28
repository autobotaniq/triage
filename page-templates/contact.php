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

        <div class="tg-contact__locations">

          <?php if (!empty($tg_contact_locations)) {
            foreach ($tg_contact_locations as $location) { ?>
              <div class="tg-contact__locations__city mt-35">
                <div class="name text-uppercase py-10 pl-15 f-size-22 f-weight-500">
                  <?php echo $location['title'] ?>
                </div>
                <div class="flex-column card-container ml-30 mt-15">
                  <div class="image"
                       style="background-image: url(<?php echo $location['thumbnail']['sizes']['tumb_partners'] ?>)">
                  </div>
                  <div class="info">
                    <?php echo $location['text'] ?>
                  </div>
                </div>
              </div>
            <?php }
          } ?>

        </div>
      </div>
    </div>
  </div>
<?php get_footer(); ?>