<?php get_header(); ?>

	<div id="posts">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
		<h1><?php the_title(); ?><?php edit_post_link(' Edit', ' - ', ''); ?></h1>
			<?php the_content(); ?>
		</div>
		<?php endwhile; endif; ?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>