<?php
/*
    Template Name: Sidebar Right
*/
?>
<?php get_header(); ?>
    <main class="row">
        <div class="float-l col-xs-0 col-s-1"><br></div>
        <div class="float-l col-s-10 col-xs-12 container">

            <!-- primairy -->
            <div class="float-l col-s-8 col-xs-12">
                <!-- Repeating posts -->
                <div class="row">
                    <div class="float-l col-xs-12 col-xl-6 small-container">
                        <div class="page-sidebar-primary">
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                                <section class="post" id="<?php the_title(); ?>">
                                    <h2 class="post_title"><?php the_title(); ?></h2>
                                    <?php the_content(); ?>
                                </section>

                            <?php endwhile; endif; ?>
                        </div>
                    </div>
                </div>

                <!-- back to top link -->
                <div class="row">
                    <br>
                    <a class="back-to-top-link" href="#top">Terug naar boven</a>
                </div>
            </div>

            <!-- sidebar -->
            <div class="float-l col-s-4 col-xs-6"><br>
                <div class="page-sidebar-secondary">
                    <h2 class="page-sidebar-secondary-h2">
                        sidebar
                    </h2>
                </div>
            </div>

        </div>
        <div class="float-l col-xs-0 col-s-1"><br></div>
    </main>
    <!-- <h1>index file </h1> -->
<?php get_footer(); ?>
