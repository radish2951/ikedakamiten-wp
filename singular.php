<?php get_header(); ?>

<main id="main-singular">

<?php
if ( have_posts() ) {
    while ( have_posts() ) {
?>
<article>
<?php
        the_post();
        the_title('<h1>', '</h1>');
        if ( is_single() ) {
            the_date('', '<time>', '</time>');
        }
        the_content();
?>
</article>
<?php
    }
}
?>

</main>

<?php get_footer(); ?>
