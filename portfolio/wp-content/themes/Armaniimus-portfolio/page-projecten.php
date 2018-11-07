<?php
/*
    Template Name: Projecten
*/
?>
<?php get_header(); ?>
    <main class="row">
        <div class="float-l col-xs-1"><br></div>
        <div class="float-l col-xs-10 container">

            <!-- Repeating posts -->
            <div class="row">
                <div class="float-l col-xs-12 col-xl-6 small-container">

                    <?php
                        $args = array( 'category_name' => $pagename );
                        $query = new WP_Query($args);
                    ?>
                    <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

                        <section class="post" id="<?php the_title(); ?>">
                            <h2 class="post_title"><?php the_title(); ?></h2>
                            <br>
                            <a class="alignleft" href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('medium'); ?>
                            </a>

                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink();?>">Klik hier om mij te bekijken</a>
                        </section>
                        <br>
                        <br>
                        <br>


                    <?php endwhile; endif; ?>
                </div>
            </div>

            <!-- back to top link -->
            <div class="row">
                <br>
                <a class="back-to-top-link" href="#top">Terug naar boven</a>
            </div>

        </div>
        <div class="float-l col-xs-1"><br></div>
    </main>
    <!-- <h1>index file </h1> -->
<?php get_footer(); ?>
