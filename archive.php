<?php get_header(); ?>

<main id="main-archive">
<?php //the_archive_title('<h1>', '</h1>'); ?>

<?php
if ( have_posts() ) {
    while ( have_posts() ) {
?>
<article>
<?php
        the_post();
        the_title('<h2><a href="' . get_permalink() . '">', '</a></h2>');
        the_date('', '<time>', '</time>');
        the_content();
?>
</article>
<?php
    }
}
?>

</main>

<?php get_footer(); ?>
