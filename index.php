<?php get_header(); ?>

<main id="main">

<?php
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();
        the_title('<h2><a href="' . get_permalink() . '">', '</a></h2>');
        the_date();
        the_content();
    }
}
?>

</main>

<?php get_footer(); ?>
