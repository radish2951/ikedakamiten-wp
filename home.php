<?php get_header(); ?>
<main id="main-home">
    <section id="main-image">
        <img src="http://ikedakamiten.0am.jp/wp-content/uploads/2019/05/LRM_EXPORT_105128492062987_20190510_155703855.jpeg">
        <img src="http://ikedakamiten.0am.jp/wp-content/uploads/2019/05/LRM_EXPORT_105162266385201_20190510_155737630.jpeg">
        <img src="http://ikedakamiten.0am.jp/wp-content/uploads/2019/05/LRM_EXPORT_6707611077322_20190530_145225260.jpeg">
        <img src="http://ikedakamiten.0am.jp/wp-content/uploads/2019/05/LRM_EXPORT_6913715378181_20190530_145551364.jpeg">
        <div id="company-name">
            <h1><?php echo get_option( 'blogname' ); ?></h1>
            <p>Ikeda Kamiten Co.,Ltd.</p>
        </div>
    </section>
<script src="<?php echo get_template_directory_uri() . '/js/script.js?v=' . rand(); ?>"></script>

    <section id="message">
        <h2 class="float">和の安らぎを、秋田から。</h2>
        <p class="float">秋田県秋田市に古くから伝わる伝統「秋田竿燈まつり」。私たちはその担い手として、提灯づくりを通じ、伝統を守り、受け継いでいます。</p>
        <p class="float">襖紙・障子紙など各種表装材料も豊富に取り扱っております。伝統と現代の美が調和したインテリアを、お客様のニーズに合わせてご提案いたします。</p>
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

<!--
    <section id="products">
        <section id="chochin">
            <div class="product-images">
                <img src="http://blog-imgs-70.fc2.com/k/f/1/kf1955story/2005_ph21.jpg">
            </div>
            <div class="product-detail">
                <h2>世界に一つの提灯。</h2>
                <p>秋田竿燈まつりで使用される提灯です。オーダーメイドにも対応いたします。世界に1つしかない提灯を作ってみませんか？</p>
                <a href="">もっと詳しく</a>
            </div>
        </section>
        <section id="fusuma">
            <div class="product-images">
                <img src="https://ssl.runon.co.jp/disney/fusumakami/images/ph752l.jpg">
            </div>
            <div class="product-detail">
                <h2>いつも隣に襖を。</h2>
                <p>和室の内装には欠かせない襖。約700種類の襖の中からお気に入りのデザインを見つけてみてください。</p>
                <a href="">もっと詳しく</a>
            </div>
        </section>
        <section id="shoji">
            <div class="product-images">
                <img src="https://images-na.ssl-images-amazon.com/images/I/71WIjiuBxaL._SL1500_.jpg">
            </div>
            <div class="product-detail">
                <h2>障子はもう破れません。</h2>
                <p>破れにくい障子紙など機能性に優れたもののほか、各種表装材料も取り扱っております。</p>
                <a href="">もっと詳しく</a>
            </div>
        </section>

    </section>
-->

    <section id="news">
<?php
query_posts( 'cat=3' );
if ( have_posts()) {
    while ( have_posts() ) {
        the_post();
?>
<article class="float">
<?php the_title('<h2 class="title"><a href="' . get_permalink() . '">', '</a></h2>'); ?>
<?php the_date('', '<p class="date"><time>', '</time></p>'); ?>
</article>
<?php
    }
}
?>
    </section>
</main>

<script src="<?php echo get_template_directory_uri(); ?>/float.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/chochin.js"></script>

<?php get_footer(); ?>
