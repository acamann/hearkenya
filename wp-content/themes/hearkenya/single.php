<?php get_header(); ?>

	<div id="posts">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="post-navigation">
			<div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
			<div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
		</div>

		<div class="post" id="post-<?php the_ID(); ?>">
			<div class="calendar">
                      	<div class="calendar-month"><?php the_time('M') ?></div>
	                  <div class="calendar-day"><?php the_time('j') ?></div>
      	      </div>
				
            	<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
 				
                  <div class="comment-link">				
                       	<a href="<?php comments_link(); ?>">Jump to Comments</a>
                        <?php edit_post_link('Edit Post', ' | ', ''); ?> 
                  </div>

			<?php the_content('(more &raquo;)'); ?>

		</div>

		<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
