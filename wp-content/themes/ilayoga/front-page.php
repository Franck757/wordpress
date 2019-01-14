<?php get_header(); ?>
<section id="actu">
    <?php
    $args = array(
     'post_type' => 'post',
     'posts_per_page' => 2,
     'order' => 'DESC'
     );
    $query = new WP_Query( $args );
    if ( $query->have_posts() ) :
     ?>

 <section class="container" id="actu">

     <?php 
     $i = 0;
     $mesclasses=["alignleft","alignright"];

     while ( $query->have_posts() ) : 
        $query->the_post(); ?>
    <article class="item clearfloat">
     <a href="<?php the_permalink(); ?>">

         <?php
         the_post_thumbnail('thumbnail', array('class' => $mesclasses[$i]));?></a>

         <a href="<?php the_permalink(); ?>"><h2 class="item-title"><?php the_title();?></h2></a>
         <div class="item-text"><?php the_excerpt(); ?></div>
         <p><?php the_time(); ?></p>
         <p><?php the_category(); ?></p>
     </article>
 </section>

 <?php 
 if($i == 0)
    $i=1;
else
    $i=0;
endwhile; else : ?>

<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>

<?php endif; ?>
</section>
<?php while(have_posts()): the_post();?>
<section id="about" class="clearfloat bg-purple-grad">
    <!-- Positionnement des éléments en float avec une classe -->

    <div class="item col-one-third">    
        <h2 class="item-title"><?php echo the_field('about-title-1'); ?></h2>

        <?php 
        $image = get_field('about-img-1');
        if( !empty($image) ): ?>

        <img src="<?php echo $image['url']; ?>" />
        <?php endif; ?>

        <p class="item-text"><?php echo the_field('about-text-1'); ?></p>
    </div>





        <div class="item col-one-third">
            <h2 class="item-title"><?php echo the_field('about-title-2'); ?></h2>
            <?php 
        $image = get_field('about-img-2');
        if( !empty($image) ): ?>
        <img src="<?php echo $image['url']; ?>" />
        <?php endif; ?>
            <p class="item-text"><?php echo the_field('about-text-2'); ?></p>
            </div>





            <div class="item col-one-third">
                <h2 class="item-title"><?php echo the_field('about-title-3'); ?></h2>
                <?php 
        $image = get_field('about-img-3');
        if( !empty($image) ): ?>

        <img src="<?php echo $image['url']; ?>" />
        <?php endif; ?>
                <p class="item-text"><?php echo the_field('about-text-3'); ?></p>
                </div>
            </section>
        <?php endwhile; ?>

            <?php get_footer(); ?>
