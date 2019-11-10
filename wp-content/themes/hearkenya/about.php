<?php
/*
Template Name: About
*/
?>

<?php
get_header();
?>

<div id="posts">

   		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
		<h1><?php the_title(); ?><?php edit_post_link(' Edit', ' - ', ''); ?></h1>
			<?php the_content(); ?>
		</div>
		<?php endwhile; endif; ?>

</div>

<ul id="sidebar">
  <li>
     <h3>Contact Me</h3>
        <ul>
  <li>Matt Palma <br />
     NJIA Special School  <br />
     P.O. Box 436 – 60600 <br />
     Maua, KENYA
  </li><li><a href="mailto:palma.matt@gmail.com">palma.matt@gmail.com</a></li>
  </ul>
</li>
  <li>
     <h3>Things to Send</h3>
     <ul>
  <li>SCHOOL SUPPLIES (anything!)</li>
  <li>Construction Paper </li>
  <li>Children's Books </li>
  <li>Magazines 
    <ul><li>News magazines</li>
        <li>Runner's World</li>
        <li>Outdoor Magazine</li>
        <li>Sports Illustrated)</li></ul>
  </li>
  <li>Candy</li>
  <li>Books for me </li>
  <li>DVDS</li>
  <li>Gatorade packets</li>
</ul>
  </li>
</ul>
	



<?php get_footer(); ?>
