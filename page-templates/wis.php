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
?>
<div class="tg-panel-solution">

  <div class="tg-panel-solution__top">
    <div class="d-flex flex-wrap justify-content-between">
      <div class="tg-panel-solution__text">

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


</div>

<?php get_footer(); ?>