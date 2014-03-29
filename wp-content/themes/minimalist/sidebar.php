<div id="leftcol" data-0="opacity: 1;" data-300="opacity:0; ">
	<div id="menu">
		<div id="logo">
			<a href="<?php echo site_url(); ?>">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/images/wfd_logo.png" />
			</a>
		</div>
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ); ?>
		<div id="social">
			<ul>
				<li><img src="<?php bloginfo('stylesheet_directory'); ?>/images/facebook.png" /></li>
				<li><img src="<?php bloginfo('stylesheet_directory'); ?>/images/twitter.png" /></li>
			</ul>
		</div>
	</div>
</div>