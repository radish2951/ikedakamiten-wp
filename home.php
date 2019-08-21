<?php get_header(); ?>
<main id="main-home">
    <section id="main-image">
        <img src="/wp-content/uploads/2019/08/IMG_20181207_103641-2-2.jpg" style="object-position:right">
        <img src="/wp-content/uploads/2019/08/IMGP1548__.jpg">
        <img src="/wp-content/uploads/2019/08/IMG_1958_.jpg">
        <div id="company-name">
            <h1><?php echo get_option( 'blogname' ); ?></h1>
            <p>Ikeda Kamiten Co.,Ltd.</p>
        </div>
    </section>
<script src="<?php echo get_template_directory_uri() . '/js/script.js?v=' . rand(); ?>"></script>

    <section id="message">
        <h2 class="float">和の<span>安らぎ</span>を、秋田から。</h2>
        <p class="float">
            和の風景。<br>
            秋田県秋田市に古くから伝わる伝統<br>
            「秋田竿燈まつり」。<br>
            私たちは提灯づくりを通じてその伝統を守り、受け継いでいます。
        </p>
    </section>

    <section id="chochin">
        <img src="http://ikedakamiten.0am.jp/wp-content/uploads/2019/07/chochin01-1.png">
        <img src="http://ikedakamiten.0am.jp/wp-content/uploads/2019/07/chochin02-1.png">
        <img src="http://ikedakamiten.0am.jp/wp-content/uploads/2019/07/chochin03-1.png">
        <img src="http://ikedakamiten.0am.jp/wp-content/uploads/2019/07/chochin04.png">
        <img src="http://ikedakamiten.0am.jp/wp-content/uploads/2019/07/chochin05.png">
        <img src="http://ikedakamiten.0am.jp/wp-content/uploads/2019/07/chochin06.png">
        <img src="http://ikedakamiten.0am.jp/wp-content/uploads/2019/07/chochin01-1.png">
        <img src="http://ikedakamiten.0am.jp/wp-content/uploads/2019/07/chochin02-1.png">
        <h2 class="float">世界に一つだけの提灯。</h2>
        <img src="http://ikedakamiten.0am.jp/wp-content/uploads/2019/07/chochin03-1.png">
        <img src="http://ikedakamiten.0am.jp/wp-content/uploads/2019/07/chochin04.png">
        <img src="http://ikedakamiten.0am.jp/wp-content/uploads/2019/07/chochin05.png">
        <img src="http://ikedakamiten.0am.jp/wp-content/uploads/2019/07/chochin06.png">
        <img src="http://ikedakamiten.0am.jp/wp-content/uploads/2019/07/chochin01-1.png">
        <img src="http://ikedakamiten.0am.jp/wp-content/uploads/2019/07/chochin02-1.png">
        <img src="http://ikedakamiten.0am.jp/wp-content/uploads/2019/07/chochin03-1.png">
        <img src="http://ikedakamiten.0am.jp/wp-content/uploads/2019/07/chochin04.png">
    </section>
    <section id="try-chochin">
        <p>日常を、灯そう。</p>
        <p class="button"><a href="">詳細</a></p>
        <img class="half" src="https://scontent-nrt1-1.cdninstagram.com/vp/a6e9d28104ab75c1ece1bdd7e0928aaf/5DD5FC59/t51.2885-15/e35/12519444_849342471854980_750284188_n.jpg?_nc_ht=scontent-nrt1-1.cdninstagram.com">
    </section>

    <section id="fusuma">
        <div id="fusuma-animation">
            <img src="http://ikedakamiten.0am.jp/wp-content/uploads/2019/08/fusuma_l.jpg">
            <img src="http://ikedakamiten.0am.jp/wp-content/uploads/2019/08/fusuma_r.jpg">
        </div>
        <div></div>
    </section>

    <section id="news">
<h2>ニュース</h2>
<?php
query_posts( 'cat=3' );
if ( have_posts()) {
    while ( have_posts() ) {
        the_post();
?>
<article class="float">
<?php the_title('<h2 class="title"><a href="' . get_permalink() . '">', '</a></h2>'); ?>
<?php the_date('', '<p class="date"><time>', '</time></p>'); ?>
<?php the_content(); ?>
</article>
<?php
    }
}
?>
    </section>
</main>

<script src="<?php echo get_template_directory_uri(); ?>/float.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/chochin.js"></script>
<!--script src="<?php echo get_template_directory_uri(); ?>/blur.js"></script-->
<script src="<?php echo get_template_directory_uri(); ?>/test.js<?php echo '?v=' . rand(); ?>"></script>
<?php get_footer(); ?>
