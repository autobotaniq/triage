<?php

/**
 * Get the Navigation.
 *
 * @param string $menu_class
 * @param string $menu_id
 * @param string $location
 * @param integer $depth
 * @echo string
 */
function beyond_get_nav_menu($menu_class = '', $menu_id = '', $location = 'theme_menu', $depth = 0)
{
  echo wp_nav_menu(array(
    'theme_location' => $location,
    'container' => false,
    'menu_class' => $menu_class,
    'menu_id' => $menu_id,
    'echo' => false,
    'fallback_cb' => '__return_empty_string', // wp_page_menu
    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
    'depth' => $depth,
    'walker' => new Beyond_Walker_Nav_Menu()
  ));
}


/**
 * Get the Pagination.
 *
 * @param bool $prev_next
 * @param string $prev
 * @param string $next
 * @param string $custom_query
 * @param bool $paged
 * @echo string
 */
function beyond_get_pagination($prev_next = true, $prev = '« Previous', $next = 'Next »', $custom_query = '', $paged = false)
{
  global $wp_query;
  $query = !empty($custom_query) ? $custom_query : $wp_query;
  $big = 999999999;

  $paged = !empty($paged) ? 'paged' : 'page';

  $args = array(
    'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
    'format' => '?page=%#%',
    'total' => $query->max_num_pages,
    'current' => max(1, get_query_var($paged)),
    'show_all' => false,
    'end_size' => 1,
    'mid_size' => 1,
    'prev_next' => $prev_next,
    'prev_text' => $prev,
    'next_text' => $next,
    'type' => 'plain',
    'add_args' => false,
    'add_fragment' => '',
    'before_page_number' => '',
    'after_page_number' => ''
  );

  echo '<div class="navigation">
        	<div class="nav-links">' . paginate_links($args) . '</div>
        </div>';
}


/**
 * Get the Logotype.
 *
 * @param string $logo
 * @param string $logo_retina
 * @param string $image_size
 * @param string $image_size_retina
 * @param string $link_class
 * @echo string
 */
function beyond_get_logo($logo, $logo_retina = null, $image_size = '', $image_size_retina = '', $link_class = 'logo')
{
  $logo = get_field($logo, 'option');
  $logo_url = (!empty($image_size)) ? $logo['sizes'][$image_size] : $logo['url'];

  $logo_retina = get_field($logo_retina, 'option');
  $logo_retina_url = (!empty($image_size_retina)) ? $logo_retina['sizes'][$image_size_retina] : $logo_retina['url'];

  $logo_width = (!empty($image_size)) ? $logo['sizes'][$image_size . '-width'] : $logo['width'];
  $logo_height = (!empty($image_size)) ? $logo['sizes'][$image_size . '-height'] : $logo['height'];

  if($logo['mime_type'] === 'image/svg+xml') { // SVG
    $logotype = '<a class="' . $link_class . ' svg" href="' . esc_url(home_url('/')) . '" rel="homepage">';

    $logotype .= '<img itemprop="image" src="' . $logo_url . '" alt="' . get_bloginfo('name') . '">';

    $logotype .= '</a>';
  } elseif (!empty($logo_retina)) { // JPG/PNG
    $logotype = '<a class="' . $link_class . ' retina" href="' . esc_url(home_url('/')) . '" rel="homepage">';

    $logotype .= '<img itemprop="image" src="' . $logo_url . '" 
    srcset="' . $logo_url . ', ' . $logo_retina_url . ' 2x" 
    width="' . $logo_width . '" 
    height="' . $logo_height . '"
    alt="' . get_bloginfo('name') . '">';

    $logotype .= '</a>';
  } else { // JPG/PNG
    $logotype = '<a class="' . $link_class . '" href="' . esc_url(home_url('/')) . '" rel="homepage">';

    $logotype .= '<img itemprop="image" src="' . $logo_url . '" alt="' . get_bloginfo('name') . '">';

    $logotype .= '</a>';
  }

  echo $logotype;
}