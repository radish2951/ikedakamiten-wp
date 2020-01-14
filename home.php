<?php get_header(); ?>
<!-- facebook -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v5.0"></script>
<!-- facebook -->
<main id="main-home">
    <section id="main-image">
        <img src="/wp-content/uploads/main01.jpg" style="object-position:right">
        <img src="/wp-content/uploads/main02.jpg">
        <img src="/wp-content/uploads/main03.jpg">
        <div id="company-name">
            <h1><?php echo get_option( 'company_name' ); ?></h1>
            <p><?php echo get_option('company_name_en'); ?></p>
        </div>
    </section>
<script src="<?php echo get_template_directory_uri() . '/js/script.js?v=' . rand(); ?>"></script>

    <section id="message">
        <h2 class="float"><?php echo get_option('main_slogan'); ?></h2>
        <p class="float"><?php echo get_option_with_newline('main_message'); ?></p>
    </section>

    <section id="chochin" class="product">
    <h2 class="float"><?php echo get_option('chochin_slogan'); ?></h2>
        <img class="float" src="/wp-content/uploads/chochin_main.jpg">
        <p class="float"><?php echo get_option_with_newline('chochin_message'); ?></p>
        <div class="img-box">
            <img class="float" src="/wp-content/uploads/chochin01.jpg">
            <img class="float" src="/wp-content/uploads/chochin02.jpg">
            <img class="float" src="/wp-content/uploads/chochin03.jpg">
        </div>
    </section>

    <section id="fusuma" class="product">
        <h2 class="float"><?php echo get_option('fusuma_slogan'); ?></h2>
        <img class="float" src="/wp-content/uploads/washi_main.jpg">
        <p class="float"><?php echo get_option_with_newline('fusuma_message'); ?></p>
        <div class="img-box">
            <img class="float" src="/wp-content/uploads/washi01.jpg">
            <img class="float" src="/wp-content/uploads/washi02.jpg">
            <img class="float" src="/wp-content/uploads/washi03.jpg">
        </div>
    </section>

<section id="news">
<h2 class="float title">お知らせ</h2>
<div>
<div>
<?php
query_posts( 'cat=3' );
if ( have_posts()) {
    while ( have_posts() ) {
        the_post();
?>
<article class="float">
<?php
        the_title('<h3><a href="' . get_permalink() . '">', '</a></h3>');
        the_date('', '<time>', '</time>');
?>
</article>
<?php
    }
}
?>
</div>
	<!-- facebook -->
	<div class="fb-page" data-href="https://www.facebook.com/%E6%9C%89%E9%99%90%E4%BC%9A%E7%A4%BE%E6%B1%A0%E7%94%B0%E7%B4%99%E5%BA%97-2169084943134297/" data-tabs="timeline" data-width="500" data-height="800" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/%E6%9C%89%E9%99%90%E4%BC%9A%E7%A4%BE%E6%B1%A0%E7%94%B0%E7%B4%99%E5%BA%97-2169084943134297/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/%E6%9C%89%E9%99%90%E4%BC%9A%E7%A4%BE%E6%B1%A0%E7%94%B0%E7%B4%99%E5%BA%97-2169084943134297/">有限会社池田紙店</a></blockquote></div>
	<!-- facebook -->
</div>
    </section>
</main>

<?php get_footer(); ?>
