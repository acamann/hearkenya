<?php get_header(); ?>

<div id="posts">
  <h1>Search Results</h1>

    <?php if (have_posts()) : ?>

    <ul id="search-results">

      <?php while (have_posts()) : the_post(); ?>
      
      <li>
        <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
        <?php the_excerpt(); ?> 
      </li>

      <?php endwhile; ?>



   <?php /*
		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

   */ ?>


    <?php else : ?>

    <p>No posts found. Please try a different search.</p>
      
    <?php endif; ?>

</div>

<ul id="sidebar">
  <li>
    <?php include (TEMPLATEPATH . '/searchform.php'); ?>
  </li>
</ul>

<?php get_footer(); ?>