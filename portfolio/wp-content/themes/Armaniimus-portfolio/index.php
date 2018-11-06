<?php get_header(); ?>
    <main class="row">
        <div class="float-l col-xs-1"><br></div>
        <div class="float-l col-xs-10 container">

            <!-- TitleHead -->
            <div class="row title-wrap">
                <div class="title-head float-l col-xs-12 col-m-12">
                    <?php include "posts1.php"; ?>
                </div>
            </div> <!-- end of TitleHead-->

            <!-- Repeating posts -->
            <div class="row">
                <div class="float-l col-xs-12 col-xl-6 small-container">
                    <?php include "posts2.php"; ?>
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
