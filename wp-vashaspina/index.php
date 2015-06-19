<?php get_header(); ?>
<div class="post">

		<h1 class="ctitle"><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>
		<?php get_template_part('loop'); ?>
		<?php wp_pagenavi(); ?>

</div><!-- post -->
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>