<?php
if (!defined('ABSPATH')) { exit; }

add_action('after_setup_theme', function () {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  register_nav_menus(array('primary' => __('Primary Menu', 'pinetop-code')));
});

add_action('wp_enqueue_scripts', function () {
  $css_path = get_template_directory() . '/style.css';
  $js_path  = get_template_directory() . '/assets/js/theme.js';

  wp_enqueue_style(
    'pinetop-code-style',
    get_stylesheet_uri(),
    array(),
    file_exists($css_path) ? (string) filemtime($css_path) : '1.0.1'
  );

  wp_enqueue_script(
    'pinetop-code-js',
    get_template_directory_uri() . '/assets/js/theme.js',
    array(),
    file_exists($js_path) ? (string) filemtime($js_path) : '1.0.1',
    true
  );
});

function pinetop_seed_pages() {
  $pages = array(
    'home' => 'Home',
    'rooms' => 'Rooms',
    'activities' => 'Activities',
    'dining' => 'Dining',
    'reservation' => 'Reservation',
    'contact' => 'Contact',
    'privacy-policy' => 'Privacy Policy',
    'terms-and-conditions' => 'Terms and Conditions',
  );
  $ids = array();
  foreach ($pages as $slug => $title) {
    $p = get_page_by_path($slug);
    if ($p) { $ids[$slug] = (int) $p->ID; continue; }
    $ids[$slug] = wp_insert_post(array('post_type'=>'page','post_title'=>$title,'post_name'=>$slug,'post_status'=>'publish','post_content'=>''));
  }
  if (!empty($ids['home'])) {
    update_option('show_on_front', 'page');
    update_option('page_on_front', (int) $ids['home']);
  }
}

add_action('after_switch_theme', function () {
  pinetop_seed_pages();
  flush_rewrite_rules(false);
});

function pinetop_rooms_data() {
  return array(
    array('Executive Lake View with Balcony','Max 4 guests | Private balcony | Signature view','Rs 14,000 / night','https://pinetopresort.com/wp-content/uploads/2025/05/Pinetop_0691-scaled.jpg'),
    array('Deluxe Lake View with Terrace','Max 4 guests | Open terrace | Sunrise-facing','Rs 12,000 / night','https://pinetopresort.com/wp-content/uploads/2025/05/Pinetop_2264-scaled.jpg'),
    array('Deluxe Lake View','Max 4 guests | Lake Facing','Rs 12,000 / night','https://pinetopresort.com/wp-content/uploads/2025/05/IMG_3224-scaled.jpg'),
    array('Standard Room','Max 4 guests | Flexible bedding | Value comfort','Rs 10,000 / night','https://pinetopresort.com/wp-content/uploads/2025/05/IMG_3677-scaled.jpg'),
    array('Whole Resort Booking','All 4 rooms | Up to 18 guests | Private property access','Rs 50,000 / night','https://pinetopresort.com/wp-content/uploads/2026/02/IMG_7100.jpg'),
  );
}

function pinetop_room_galleries() {
  return array(
    'Executive Lake View with Balcony' => array(
      'https://pinetopresort.com/wp-content/uploads/2025/05/Pinetop_0695-scaled.jpg',
      'https://pinetopresort.com/wp-content/uploads/2025/05/Pinetop_0691-scaled.jpg',
      'https://pinetopresort.com/wp-content/uploads/2025/05/Pinetop_0689-scaled.jpg',
      'https://pinetopresort.com/wp-content/uploads/2025/05/Pinetop_6097-scaled.jpg',
    ),
    'Deluxe Lake View with Terrace' => array(
      'https://pinetopresort.com/wp-content/uploads/2025/05/Pinetop_2267-scaled.jpg',
      'https://pinetopresort.com/wp-content/uploads/2025/05/Pinetop_2262-scaled.jpg',
      'https://pinetopresort.com/wp-content/uploads/2025/05/Pinetop_2264-scaled.jpg',
      'https://pinetopresort.com/wp-content/uploads/2025/05/Pinetop_2265-scaled.jpg',
    ),
    'Deluxe Lake View' => array(
      'https://pinetopresort.com/wp-content/uploads/2025/05/IMG_3223-scaled.jpg',
      'https://pinetopresort.com/wp-content/uploads/2025/05/IMG_3218-scaled.jpg',
      'https://pinetopresort.com/wp-content/uploads/2025/05/IMG_3221-scaled.jpg',
      'https://pinetopresort.com/wp-content/uploads/2025/05/IMG_3222-scaled.jpg',
      'https://pinetopresort.com/wp-content/uploads/2025/05/IMG_3224-scaled.jpg',
    ),
    'Standard Room' => array(
      'https://pinetopresort.com/wp-content/uploads/2025/05/IMG_3677-scaled.jpg',
      'https://pinetopresort.com/wp-content/uploads/2025/05/IMG_3670-scaled.jpg',
      'https://pinetopresort.com/wp-content/uploads/2025/05/IMG_3671-scaled.jpg',
      'https://pinetopresort.com/wp-content/uploads/2025/05/IMG_3672-scaled.jpg',
      'https://pinetopresort.com/wp-content/uploads/2025/05/IMG_3673-scaled.jpg',
      'https://pinetopresort.com/wp-content/uploads/2025/05/IMG_3674-scaled.jpg',
    ),
    'Whole Resort Booking' => array(
      'https://pinetopresort.com/wp-content/uploads/2026/02/IMG_7100.jpg',
    ),
  );
}
