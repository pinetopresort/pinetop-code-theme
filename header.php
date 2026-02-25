<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header id="pinetopHeader" class="pinetop-main-header site-header" style="display:block !important; visibility:visible !important; opacity:1 !important;">
  <div class="container nav" id="siteNav">
    <a href="<?php echo esc_url(home_url('/')); ?>" aria-label="Pinetop Resort Home">
      <img class="logo" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/pinetop-logo.png'); ?>" alt="PineTop Resort">
    </a>
    <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="primaryNav">Menu</button>
    <nav class="nav-links" id="primaryNav" aria-label="Primary">
      <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
      <a href="<?php echo esc_url(home_url('/rooms')); ?>">Rooms</a>
      <a href="<?php echo esc_url(home_url('/activities')); ?>">Activities</a>
      <a href="<?php echo esc_url(home_url('/dining')); ?>">Dining</a>
      <a href="<?php echo esc_url(home_url('/reservation')); ?>">Reservation</a>
      <a href="<?php echo esc_url(home_url('/contact')); ?>">Contact</a>
    </nav>
    <a class="btn btn-primary" href="https://wa.me/923004452015?text=Hi%20PineTop%20Resort%2C%20I%20want%20to%20book%20a%20stay." target="_blank" rel="noopener">Book via WhatsApp</a>
  </div>
</header>
