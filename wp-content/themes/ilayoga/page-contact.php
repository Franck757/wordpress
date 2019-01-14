<<?php 
/*
Template Name: Page Contact
*/
?>

<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <section class="container">
    <?php the_content(); ?>
  </section>
  <?php endwhile; else : ?>
  <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6242.233572575128!2d2.31612129916174!3d48.86705935484506!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66fc50dc75ccf%3A0x42f0f4fa01438416!2sFranklin+D.+Roosevelt!5e0!3m2!1sfr!2sfr!4v1451318946422" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
<?php get_footer(); ?>
