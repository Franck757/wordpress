<?php get_header(); ?>

<section class="container">
<?php $obj = get_queried_object(); ?>

        <?php
        $i=0;
        if(have_posts()):
            while ( have_posts() ) :
                the_post();
            $maclasse="alignleft";
            if($i==1)
                {$maclasse="alignright";}
            ?>
            <article class="item clearfloat">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail');?></a>
                <a href="<?php the_permalink(); ?>"><h2 class="item-title"><?php the_title();?></h2></a>
                <!--<div class="item-text"><?php the_excerpt(); ?></div>-->
                <p class="item-text"><strong>Auteur : </strong><em><?php echo the_field('book_author'); ?></em></p>
            </article>

            <?php

            if($i==1)
                {$i=0;}
            else
                {$i=1;}
            endwhile;  else :
            ?>
            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>

</section>
        <div class="navigation"><p><?php posts_nav_link(); ?></p></div>

<?php get_footer(); ?>