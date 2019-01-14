<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <section class="container">
<?php the_post_thumbnail('thumbnail');?>
    <h2><?php the_title(); ?></h2>

    <p><?php the_time(); ?></p>

    <?php the_content(); ?>
    <p class="item-text"><strong>Auteur : </strong><em><?php echo the_field('book_author'); ?></em></p>
    <p class="item-text"><strong>Editeur : </strong><em><?php echo the_field('book_publisher'); ?></em></p>
    
  </section>
<?php endwhile; else : ?>
  <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<?php get_footer(); ?>
