<?php
/*
Template Name: Links
*/
?>

<?php get_header(); ?>

<div id="posts">

   		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
		<h1><?php the_title(); ?><?php edit_post_link(' Edit', ' - ', ''); ?></h1>
			<?php the_content(); ?>
		</div>
		<?php endwhile; endif; ?>

</div>

<ul id="sidebar">
  <li>Click the link below to read more about The Harambee Project and Books for Africa</li>
  <li style="text-align:center;"><a href="https://www.booksforafrica.org/donate/to-project.html?projectId=32" target="_blank">
     <img src="http://www.ieftz.org/image/IEFT%20Photos/Books%20for%20Africa.jpg" style="width:175px;" />
  </a>
  </li>
  <li>Click the link below to make a donation</li>
  <li style="text-align:center;"><a href="https://www.booksforafrica.org/donate/donate.html?amt=50.00&name=The%20Harambee%20Project%E2%80%94Kenya&selectedProjectId=32"><img src="https://www.unityshoppe.org/images/Donate2.gif" alt="Donate to The Harambee Project" style="width:200px;" /></a></li>
  </ul>

<?php get_footer(); ?>
