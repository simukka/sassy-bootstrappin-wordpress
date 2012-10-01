<?php get_header()?>
	<div id="content">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
		<div <?php post_class()?>>
			<h1 class="title"><?php do_action('before_title'); the_title(); do_action('after_title');?></h1>
			<p><?php the_date()?></p>
			<div class="post-content"><?php the_content()?></div>
			<?php if(has_tag()){the_tags( echo('Keywords') . ': ', ', ');}?>
			<?php wp_link_pages() ?>
		</div>
		<?php endwhile;endif;?>
	</div>
	<?php get_sidebar()?>
<?php get_footer()?>