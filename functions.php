<?php
		//Register the main menu
		if ( function_exists( 'register_nav_menu' ) ) {
			register_nav_menu( 'main-menu', __('Main menu','building-blocks') );
		}

		//Register the main sidebar
		$args = array(
			'name'          => 'Main sidebar',
			'description'   => 'The main sidebar used across most pages',
			'before_widget' => '<li class="sidebaritem">',
			'after_widget'  => '</li>',
			'before_title'  => '<span class="title">',
			'after_title'   => '</span>' );
		if ( function_exists('register_sidebar') ){
			register_sidebar($args);
		}

		//Remove inline CSS placed by WordPress
		function remove_recent_comments_style() {
			add_filter( 'show_recent_comments_widget_style', '__return_false' );
		}
		add_action( 'widgets_init', 'remove_recent_comments_style' );

		//Load the site's CSS in the editor
		add_editor_style('style.css');

		//URL validator
		function is_valid_url($URL) {
			$v = "/^(http|https|ftp):\/\/([A-Z0-9][A-Z0-9_-]*(?:\.[A-Z0-9][A-Z0-9_-]*)+):?(\d+)?\/?/i";
			return (bool)preg_match($v, $URL);
		}
?>