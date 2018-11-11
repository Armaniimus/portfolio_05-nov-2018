<?php get_header(); ?>
    <main class="row">
        <div class="float-l col-xs-1"><br></div>
        <div class="float-l col-xs-10 container">

            <!-- TitleHead -->
            <div class="row title-wrap">
                <div class="title-head float-l col-xs-12 col-m-12">

                    <?php
                    $armaniimus_ii = 0;
                    if ( have_posts() ) : while ( have_posts() ) : the_post();
                        $armaniimus_ii++;
                    endwhile; endif;?>

                    <?php if ( $armaniimus_ii > 1 ) {
                        echo "<h2>Artikelen op deze pagina</h2>";
                        echo "<ul class='post-title-ul'>";
                    } ?>

                    <?php if ( $armaniimus_ii > 1 ) : while ( have_posts() ) : the_post(); ?>
                        <li class="post-title-li">
                            <a class="post-title-a" href="#<?php the_title() ?>"><?php the_title() ?></a>
                        </li>
                    <?php endwhile; endif; ?>

                    <?php if ( $armaniimus_ii > 1 ) {echo "</ul>";} ?>

                </div>
            </div> <!-- end of TitleHead-->

            <!-- Repeating posts -->
            <div class="row">
                <div class="float-l col-xs-12 col-xl-6 small-container">

                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                        <section class="post" id="<?php the_title(); ?>">
                            <h3 class="post_title"><?php the_title(); ?></h3>
                            <?php the_content(); ?>
                        </section>

                    <?php endwhile; else : ?>

                        <?php _e('Sorry, we hebben uw gevraagde content niet kunnen vinden.'); ?>

                    <?php endif; ?>

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
