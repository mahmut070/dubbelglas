<?php
/*
Template Name: Content
*/
?>

<?php get_header(); ?>

	<div class="u-gridContainer content-home">
		<?php get_sidebar(); ?>
		<div>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article class="Content Content--content" id="post-<?php the_ID(); ?>">
				<h2 class="page-title"><?php the_title(); ?></h2>
				<div>
					<?php the_content(); ?>
					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
				</div>
			</article>
		<?php endwhile; endif; ?>
		</div>
	</div>

<?php get_footer(); ?>
