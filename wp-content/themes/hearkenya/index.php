<?php get_header(); ?>

	<div id="posts">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

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

				<div class="comment-link">
					<?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?> |
					Posted by <?php the_author(); ?> on <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>
					
				</div>

			</div>

		<?php endwhile; ?>

		<div class="post-navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>

	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
