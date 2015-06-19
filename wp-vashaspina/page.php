<?php get_header(); ?>
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	<div class="post">
		<noindex><?php echo do_shortcode('[simple_crumbs root="Главная" /]') ?></noindex>
		<h1 class="post-title"><?php the_title(); ?></h1>
		<?php the_content(); ?>
		   
		<div class="doc-holder left">
			<div class="doc-related">
			<div class="wp_rp_wrap  wp_rp_plain" id="wp_rp_first">
				<div class="wp_rp_content">
				<h3 class="related_post_title">Советуем прочитать также</h3>
					<ul class="related_post wp_rp" style="visibility: visible">
						<?php query_posts("showposts=5&cat=3"); ?>
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<li><a class="ptitle" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
						<?php endwhile; endif; ?>
						<?php wp_reset_query(); ?>
					</ul>
				</div><!-- wp_rp_content -->
			</div><!-- #wp_rp_first -->
			</div>
		</div>
	</div><!-- post -->
	<?php endwhile; ?><?php else: ?>
	<div class="post">
		<h1 class="title"><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
	</div><!-- post -->
	<?php endif; ?>

	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>