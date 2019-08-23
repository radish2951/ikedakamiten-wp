<?php get_header(); ?>
<main id="main-home">
    <section id="main-image">
        <img src="/wp-content/uploads/2019/08/IMG_20181207_103641-2-2.jpg" style="object-position:right">
        <!--img src="/wp-content/uploads/2019/08/IMGP1548__.jpg"-->
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

    <!--section id="chochin">
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
    </section-->
    <section id="try-chochin" class="product">
        <h2 class="float">世界に一つだけの提灯。</h2>
        <!--p class="button"><a href="">詳細</a></p-->
        <img class="float" src="/wp-content/uploads/2019/08/20150720_104052-Edit.jpg">
        <!--
        <img class="half float" src="/wp-content/uploads/2019/08/20141130_152833.jpg">
        <img class="half float" src="/wp-content/uploads/2019/08/52475650_2228233893886068_3473433270245392384_n_.jpg">
        <img class="half float" src="/wp-content/uploads/2019/08/50624138_2183548441687947_6510217595126284288_n_.jpg">
        -->
        <p class="float">提灯ってすごいですよね。これを一から手作りしちゃうんですよ？すごくないですか？
        提灯ってすごいですよね。これを一から手作りしちゃうんですよ？すごくないですか？
        提灯ってすごいですよね。これを一から手作りしちゃうんですよ？すごくないですか？</p>
        <div class="img-box">
            <img class="float" src="/wp-content/uploads/2019/08/20150627_164200-Edit.jpg">
            <img class="float" src="/wp-content/uploads/2019/08/20141130_152833.jpg">
            <img class="float" src="/wp-content/uploads/2019/08/52475650_2228233893886068_3473433270245392384_n_.jpg">
        </div>
    </section>

    <section id="fusuma" class="product">
        <!--
        <div id="fusuma-animation">
            <img src="http://ikedakamiten.0am.jp/wp-content/uploads/2019/08/fusuma_l.jpg">
            <img src="http://ikedakamiten.0am.jp/wp-content/uploads/2019/08/fusuma_r.jpg">
        </div>
        -->
        <h2 class="float">和紙の温もりにつつまれて。</h2>
        <img class="float" src="/wp-content/uploads/2019/08/IMG_1962.jpg">
        <p class="float">
和紙ってすごい！障子ってすごい！ふすまってすごい！みんなすごい！
和紙ってすごい！障子ってすごい！ふすまってすごい！みんなすごい！
和紙ってすごい！障子ってすごい！ふすまってすごい！みんなすごい！
和紙ってすごい！障子ってすごい！ふすまってすごい！みんなすごい！
</p>
        <div class="img-box">
            <img class="float" src="/wp-content/uploads/2019/08/DSC_0335__.jpg">
            <img class="float" src="/wp-content/uploads/2019/08/IMG_1969_.jpg">
            <img class="float" src="/wp-content/uploads/2019/08/52475650_2228233893886068_3473433270245392384_n_.jpg">
        </div>
    </section>

    <section id="news">
<h2 class="float">お知らせ</h2>
<?php
query_posts( 'cat=3' );
if ( have_posts()) {
    while ( have_posts() ) {
        the_post();
?>
<article class="float">
<?php
        the_title('<h3>', '</h3>');
        the_date('', '<time>', '</time>');
        the_content();
?>
</article>
<?php
    }
}
?>
    </section>
</main>

<script src="<?php echo get_template_directory_uri(); ?>/float.js"></script>
<?php get_footer(); ?>
