<?php get_header(); ?>
<section class="section" style="padding-top:150px;"><div class="container"><?php if (have_posts()) : while (have_posts()) : the_post(); ?><h1><?php the_title(); ?></h1><?php the_content(); endwhile; endif; ?></div></section>
<?php get_footer(); ?>
