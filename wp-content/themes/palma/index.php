<?php
get_header();
?>

<div id="content">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
               
    <div class="post" id="post-<?php the_ID(); ?>">
       <h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?>
           </a><?php edit_post_link(__('(Edit)')); ?></h2>
       <div class="post-date"><?php the_date(); ?> at <?php the_time() ?></div>
       <div class="post-content">
           <?php the_content(__('(more...)')); ?>
       </div>
       <div class="post-more-link">
         <?php comments_popup_link(__('Comments (0)'), __('Comments (1)'), __('Comments (%)')); ?>
       </div>
     </div>

  <?php comments_template(); // Get wp-comments.php template ?>

  <?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
  <?php endif; ?>

  <?php posts_nav_link(' &#8212; ', __('&laquo; Older Posts'), __('Newer Posts &raquo;')); ?>

</div>
<?php get_footer(); ?>
