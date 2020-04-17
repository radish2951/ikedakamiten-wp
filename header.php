<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-163870854-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-163870854-1');
</script>

    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php wp_title('|', true, 'right'); ?><?php echo get_option('blogname'); ?></title>
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri() . "?v=" . rand(); ?>">
    <?php wp_head(); ?>
</head>
<body>
    <header id="header">
    <?php wp_nav_menu(array(
        'container'  => false,
        'items_wrap' => '<nav><ul>%3$s</ul></nav>',
    )); ?>
    </header>
<script>
const header = document.getElementById('header')
header.addEventListener('click', e => {
    header.classList.toggle('full')
})
</script>
