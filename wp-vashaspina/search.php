<?php get_header(); ?>
<div class="post">

	<h1 class="ctitle"><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>
	<?php get_template_part('loop'); ?>
	<?php get_template_part('pagination'); ?>

</div><!-- post -->
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>