<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <section class="post" id="<?php the_title(); ?>">
        <h3 class="post_title"><?php the_title(); ?></h3>
        <?php the_content(); ?>
    </section>

<?php endwhile; else : ?>

    <?php _e('Sorry, no posts matched your criteria'); ?>

<?php endif; ?>
