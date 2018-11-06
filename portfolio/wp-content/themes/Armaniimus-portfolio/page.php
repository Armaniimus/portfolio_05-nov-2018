<?php get_header(); ?>
    <main class="row">
        <div class="float-l col-xs-1"><br></div>
        <div class="float-l col-xs-10 container">

            <!-- Repeating posts -->
            <div class="row">
                <div class="float-l col-xs-12 col-xl-6 small-container">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                        <section class="post" id="<?php the_title(); ?>">
                            <h2 class="post_title"><?php the_title(); ?></h2>
                            <?php the_content(); ?>
                        </section>

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
