<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

<div id="posts">
      <h1>Archive</h1>

      <ul id="archive-list">

<?php 
$months = $wpdb->get_results("SELECT DISTINCT MONTH( post_date ) AS month , YEAR( post_date ) AS year, COUNT( id ) as post_count FROM $wpdb->posts WHERE post_status = 'publish' and post_date <= now( ) and post_type = 'post' GROUP BY month , year ORDER BY post_date DESC"); 
foreach($months as $month) : ?> 
		<li><h3><?php echo date("F", mktime(0, 0, 0, $month->month, 1, $month->year)) ?> <?php echo $month->year ?></h3> 
		   <ul>
                  <?php 
                        $query = "SELECT post_title, MONTH( post_date ) AS month ,  YEAR( post_date ) AS year, DAY( post_date ) AS day , id FROM $wpdb->posts WHERE post_status = 'publish' AND post_date <= now( ) and MONTH(post_date) = $month->month and YEAR(post_date) = $month->year and post_type = 'post' ORDER BY post_date DESC";
                        if ( $posts = $wpdb->get_results($query) ) {
                        foreach ($posts as $post) {
                                        
                        ?> 
                        <li><a href="<?php echo get_permalink($post->id)?>"><?php echo $post->post_title ?></a></li>
<?php } } ?>

                     </ul>
		</li>
<?php endforeach; ?> 
                   
      </ul> 

</div>

<ul id="sidebar">
  <li id="search">
    <?php include (TEMPLATEPATH . '/searchform.php'); ?>
  </li>
</ul>


<?php get_footer(); ?>
