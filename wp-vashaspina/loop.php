<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
	<!-- article -->
	<div id="post-<?php the_ID(); ?>" <?php post_class('post-item'); ?>>
		<span class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></span>
		<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
	</div><!-- post-item -->
	
<?php endwhile; ?><?php else: ?>

	<div class="post-item">
		<h2 class="title"><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</div>
	
<?php endif; ?>