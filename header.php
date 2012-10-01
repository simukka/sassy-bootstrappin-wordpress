<!DOCTYPE html>
<html>
<head>
		<meta http-equiv="content-type" content="<?php bloginfo('html_type')?>;charset=<?php bloginfo('charset'); ?>"/>
		<title><?php wp_title()?></title>
		<meta name="description" content=""/>
		<meta name="keywords" content="<?php if (is_single() && get_tags()) { foreach(get_tags() as $tag){ echo $tag->name . ', '; }}?>"/>
		<meta name="language" content="<?php bloginfo('language')?>"/>
		<meta name="robots" content="<?php if(!is_404()){echo "index,follow";}else{echo "noindex,follow";}?>"/>
		<link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>" type="text/css" media="screen"/>
		<link rel="icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri() ?>/images/favicon.ico"/>
		<meta name="viewport" content="width=device-width">
		<?php wp_head()?>
</head>
<body <?php body_class()?>>
	<div id="wrapper">
		<div id="header">
			<div id="banner"></div>
			<?php $args = array(
				'theme_location'  => 'main-menu',
				'container'       => 'ul',
				'menu_class'      => 'menu',
				'echo'            => true,
				'fallback_cb'     => 'wp_page_menu',
				'show_home'		=> true,
				'depth'           => 0 );
				wp_nav_menu( $args );
			?>
		</div>
		<div id="main">