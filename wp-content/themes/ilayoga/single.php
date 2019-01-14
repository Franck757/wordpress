<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <section class="container">

    <h2><?php the_title(); ?></h2>

    <p><?php the_time(); ?></p>

    <?php the_content(); ?>
    
    <p><?php the_category(); ?></p>

  </section>
<?php endwhile; else : ?>
  <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<?php get_footer(); ?>
