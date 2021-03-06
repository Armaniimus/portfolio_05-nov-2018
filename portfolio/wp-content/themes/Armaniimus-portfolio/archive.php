<?php get_header(); ?>
    <main class="row">
        <!-- <div class="col-xs-0 col-m-1" ><br></div> -->
        <div class="col-xs-12 col-m-12 container">

            <!-- Repeating posts -->
            <div class="row">
                <h2 class="archive-page-title"><?php single_term_title()?></h2>
                <div class="float-l col-xs-12 col-xl-12 archive">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                        <article class="archive-post-wrap col-xs-12 col-m-6 col-l-4" id="<?php the_title(); ?>">
                            <div class="archive-post">
                                <h3 class="post-title"><?php the_title(); ?></h3>
                                <!-- start content -->
                                <?php the_content(); ?>
                                <!-- end content -->
                            </div>
                        </article>

                    <?php endwhile; endif; ?>
                </div>
            </div>

            <!-- back to top link -->
            <div class="row">
                <br>
                <br>
                <a class="back-to-top-link" href="#top">Terug naar boven</a>
            </div>

        </div>
        <!-- <div class="col-xs-0 col-m-1" ><br></div> -->
    </main>
    <script>
        window.onload = function() {
            heightController = new grid_height_controller('archive-post', [1,1,2,3,3]);
        }
    </script>
    <!-- <h1>index file </h1> -->
<?php get_footer(); ?>
