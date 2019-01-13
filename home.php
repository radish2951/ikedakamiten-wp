<?php get_header(); ?>
<style>
#main-image img {
width: 100%;
height: 100%;
object-fit: cover;
position: absolute;
top: 0;
left: 0;
}

</style>
<main id="main-home">
    <section id="main-image">
        <img src="https://upload.wikimedia.org/wikipedia/commons/c/c4/Akita_Kanto_Festival_2015_at_night.JPG">
        <img src="https://upload.wikimedia.org/wikipedia/ja/d/d5/Hiru_kanto_1.jpg">
        <img src="https://keroblog.net/wp-content/uploads/2018/12/diag01-1.jpg">
        <div id="company-name">
            <h1>有限会社 池田紙店</h1>
            <p>Ikeda Kamiten Co.,Ltd.</p>
        </div>
    </section>
<script src="<?php echo get_template_directory_uri() . '/js/script.js'?>"></script>

    <section id="message">
        <h2>秋田の心を、未来へ。</h2>
        <p>秋田県秋田市に古くから伝わる伝統「秋田竿燈まつり」。私たちはその担い手として、提灯づくりを通じ、伝統を守り、受け継いでいます。</p>
        <p>襖紙・障子紙など各種表装材料も豊富に取り扱っております。伝統と現代の美が調和したインテリアを、お客様のニーズに合わせてご提案いたします。</p>
    </section>

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

    <section id="news">
<?php
if ( have_posts()) {
    while ( have_posts() ) {
        the_post();
        if ( in_category( 'news' ) ) {
?>
<article>
<?php the_title('<h2 class="title"><a href="' . get_permalink() . '">', '</a></h2>'); ?>
<?php the_date('', '<p class="date"><time>', '</time></p>'); ?>
<?php // the_content(); ?>
</article>
<?php
        }
    }
}
?>
    </section>
</main>
<?php get_footer(); ?>
