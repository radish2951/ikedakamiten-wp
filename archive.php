<?php get_header(); ?>

<main id="main">
<?php the_archive_title('<h1>', '</h1>'); ?>

<?php
if ( have_posts() ) {
    while ( have_posts() ) {
?>
<article>
<?php
        the_post();
        the_title('<h2 class="title"><a href="' . get_permalink() . '">', '</a></h2>');
        the_date('', '<p class="date"><time>', '</time></p>');
        the_content();
?>
</article>
<?php
    }
}
?>

</main>

<?php get_footer(); ?>
