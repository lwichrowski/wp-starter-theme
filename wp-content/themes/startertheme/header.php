<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php if(is_front_page() ) { ?> Site Title<?php } ?> <?php wp_title(''); ?> | <?php bloginfo('name'); ?></title>

	<?php if (is_front_page()): ?>
		<meta property="og:title" content="<?php echo get_bloginfo('description'); ?>">
		<meta name="twitter:title" content="<?php echo get_bloginfo('description'); ?>">
	<?php else: ?>
		<meta property="og:title" content="<?php the_title(); ?>">
		<meta name="twitter:title" content="<?php the_title(); ?>">
	<?php endif; ?>

	<meta property="og:type" content="article">
	<meta property="og:url" content="<?php echo "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ?>">
	<meta property="og:site_name" content="<?php wp_title(''); ?>">
	<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/og.png">
	<meta property="og:description" content="<?php echo get_bloginfo('description'); ?>">

	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@your_handle">
	<meta name="twitter:description" content="<?php echo get_bloginfo('description'); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
