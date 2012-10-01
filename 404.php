<?php get_header()?>
	<div id="content">
		<div class="post">
			<h1 class="title"><?php echo('Page not found')?></h1>
			<div class="post-content">
				<p><?php echo('The page you are looking for does not exist.')?></p>
				<p><a href="<?php echo site_url()?>">« <?php echo('Return to the home page')?></a></p>
			</div>
		</div>
	</div>
	<?php get_sidebar()?>
<?php get_footer()?>