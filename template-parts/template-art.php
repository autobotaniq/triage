<?php

$tg_template_art_title = !empty($tg_template_art_title) ? $tg_template_art_title : 'Visualize What’s Possible';
$tg_template_art_description = !empty($tg_template_art_description) ? $tg_template_art_description : 'Schedule a demo and find out how Triage<br> Partners can help optimize your operations.';

$tg_template_art_link = !empty($tg_template_art_link) ? $tg_template_art_link : array(
  'title' => 'Contact Us',
  'url' => '#',
  'target' => ''
);

$tg_template_art_image = !empty($tg_template_art_image) ? $tg_template_art_image : array(
  'sizes' => array(
    'bg_page' => B_TEMP_URL . '/assets/img/iStock-1146417954.jpg'
  )
);

$tg_template_art_reverse = $tg_template_art_reverse === true ? ' tg-template-art_reverse' : '';
?>

<div class="tg-template-art<?php echo $tg_template_art_reverse ?>">

  <div class="tg-template-art__top">
    <div class="container position-relative z-index-2">
      <div class="row justify-content-center align-items-center">
        <div class="col-xl-11">

          <div class="tg-template-art__title">
            <div class="f-size-xl-32 f-size-lg-30 f-size-md-28 f-size-sm-26 f-size-24 text-uppercase f-weight-700 l-height-110 mb-20">
              <?php echo $tg_template_art_title ?>
            </div>
            <div class="f-size-lg-20 f-size-md-18 f-size-16 f-weight-400 mb-40">
              <?php echo $tg_template_art_description ?>
            </div>

            <?php
            $target = ($tg_template_art_link['target'] === '_blank') ? 'target="_blank"' : '';
            echo '<a href="' . $tg_template_art_link['url'] . '" class="tg-botton tg-botton_white" ' . $target . '>' . $tg_template_art_link['title'] . '</a>'
            ?>
          </div>

        </div>
      </div>
    </div>

    <div class="tg-template-art__image">
      <div class="tg-template-art__image-layer"
           style="background-image:url(<?php echo esc_url($tg_template_art_image['sizes']['bg_page']) ?>);">
      </div>
    </div>
  </div>

</div>
