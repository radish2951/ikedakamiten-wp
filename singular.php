<?php get_header(); ?>
<main id="singular-content">

<?php
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();
        the_title('<h1>', '</h1>');
        the_content();
    }
}
?>

</main>
<?php get_footer(); ?>
