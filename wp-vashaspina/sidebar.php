<div class="sidebar">
	<h3 class="sidebar-title">Заболевания</h3>
	<?php html5sidebar_nav(); ?>
	
	<h3 class="sidebar-title">Свежие статьи</h3>
	<ul class="recent-posts">
		<?php query_posts("showposts=4&cat=3"); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<li><!-- post thumbnail -->
				<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
					<?php the_post_thumbnail(array(250,250)); // Declare pixel size you need inside the array ?>
				<?php else: ?>
					<img src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>" />
				<?php endif; ?>
				<!-- /post thumbnail --><a class="ptitle" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				<div class="clear"></div>
			</li>
		<?php endwhile; endif; ?>
		<?php wp_reset_query(); ?>
	</ul>
	
	<script>
		jQuery(document).ready(function($){
			$('.current-cat a').replaceWith(function() {
				var span = $.trim($(this).text());
				return '<span>' + span + '</span>';
			});
		});
	</script>

	<div class="subscribe-holder">
		<noindex><script type="text/javascript" src="openapi.js-96" tppabs="http://vk.com/js/api/openapi.js?96"></script>
		<!-- VK Widget -->
		<div id="vk_groups"></div>
		<script type="text/javascript">
			VK.Widgets.Group("vk_groups", {mode: 1, width: "225", height: "400", color1: 'FFFFFF', color2: '333333', color3: '4f7230'}, 48636701);
		</script>
		</noindex>
	</div><!-- subscribe-holder -->

</div><!-- sidebar -->