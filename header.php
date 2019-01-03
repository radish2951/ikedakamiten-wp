<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="noindex">
	<link rel="profile" href="https://gmpg.org/xfn/11" />
    <link href="https://fonts.googleapis.com/css?family=Sawarabi+Mincho" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
	<?php wp_head(); ?>
</head>
<body>
    <header id="header">
        <?php wp_nav_menu(array(
            'container'       => false,
            'items_wrap'      => '<nav><ul>%3$s</ul></nav>',
        )); ?>
    </header>
