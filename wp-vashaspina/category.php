<?php get_header(); ?>
<div class="post">

	<h1 class="ctitle"><?php the_category(' '); ?></h1>
	<?php echo category_description(); ?>
	<?php get_template_part('loop'); ?>
    <?php wp_pagenavi(); ?>

</div><!-- post -->
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>