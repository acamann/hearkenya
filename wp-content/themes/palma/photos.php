<?php
/*
Template Name: Photos
*/
?>

<?php
get_header();
?>

<div id="content">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
               
    <div class="post" id="post-<?php the_ID(); ?>">
       <h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?>
           </a><?php edit_post_link(__('(Edit)')); ?></h2>
       <div class="post-content">
           <?php the_content(__('(more...)')); ?>
       </div>
     </div>

  <?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
  <?php endif; ?>
  
</div>
<?php get_footer(); ?>
