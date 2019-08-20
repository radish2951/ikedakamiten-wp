<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php // wp_title(); ?>池田紙店オフィシャルウェブサイト</title>
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri() . "?v=" . rand(); ?>">
    <!--link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/float.css?v=' . rand(); ?>"-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/chochin.css?v=' . rand(); ?>">
    <!--link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/blur.css?v=' . rand(); ?>"-->
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
const header = document.getElementById('header');
header.addEventListener('click', e => {
    header.classList.toggle('full');
});
</script>
