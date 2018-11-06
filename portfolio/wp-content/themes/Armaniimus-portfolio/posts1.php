<!-- post start -->

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
