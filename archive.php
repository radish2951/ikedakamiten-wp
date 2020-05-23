<?php get_header(); ?>

<main id="main-archive">
<?php the_archive_description('<h1 class="title">', '</h1>'); ?>

<ul class="monthly-list">
<?php wp_get_archives( 'show_post_count=1' ); ?>
</ul>

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
