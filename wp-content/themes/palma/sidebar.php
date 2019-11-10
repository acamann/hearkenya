<!-- begin sidebar -->
<div id="sidebar">
            <?php /*
                <h2>Photos</h2>
                <p>
*/?>
<?php /*                <div id="image">
                  <a href="javascript:slideShow.nav(-1)" id="previmg"></a>
                  <a href="javascript:slideShow.nav(1)" id="nextimg"></a>
                </div>

                <div id="thumbwrapper">
                  <div id="thumbarea">
                    <ul id="thumbs">
                       <?php get_flickrRSS(); ?>
                       <li value="1"><img src="thumbs/1.jpg" alt="" /></li>
                       <li value="2"><img src="thumbs/2.jpg" alt="" /></li>
                       <li value="3"><img src="thumbs/3.jpg" alt="" /></li>
                       <li value="4"><img src="thumbs/4.jpg" alt="" /></li>
                       <li value="5"><img src="thumbs/5.jpg" alt="" /></li>
                    </ul>
                  </div>
                </div>


 <object width="225px" height="170"><param name="movie" value="http://www.slideoo.com/slider.swf"></param><param name="wmode" value="transparent"></param><param name="flashvars" value="setId=&size=_m&max=25&userid=26228344@N05&setname=acamann%27s%20photostream&randomize=1"></param><embed src="http://www.slideoo.com/slider.swf" type="application/x-shockwave-flash" wmode="transparent" flashvars="setId=&size=_m&max=25&userid=26228344@N05&setname=&randomize=1" width="225px" height="170"></embed></object><img style="visibility:hidden;width:0px;height:0px;" border=0 width=0 height=0 src="http://counters.gigya.com/wildfire/CIMP/bT*xJmx*PTEyMDk4NzA2NDA*MDYmcHQ9MTIwOTg3MDY*NzQ1MyZwPTU*NDMxJmQ9Jm49Jmc9MQ==.jpg" /> */ ?>

<?php /*
                <a href="<?php bloginfo('url'); ?>/photos/">more photos...</a>
                </p>
            
                <h2>About</h2>
                <p>
                    I joined the peace corps in the summer of 2008 and will be in Cambodia for two years.
                    <a href="<?php bloginfo('url'); ?>/about/">more about me...</a>
                </p>
            
                <h2>Recent Posts</h2>
                <ul> */?>
                  <?php /* 
                   global $post;
                   $myposts = get_posts('numberposts=5');
                   foreach($myposts as $post) : */
                  ?>
<?php /*
                    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                  <?php endforeach; ?>
                </ul>
            
                <h2>Archives</h2>
                <ul>
                    */?> <?php /* wp_get_archives('type=monthly'); */ ?>
<?php /*                </ul>
*/ ?>
		    <div id="disclaimer">
                    This blog reflects my thoughts and opinions.  It does not reflect the position of the United States Government or the Peace Corps.
                </div>
            
            </div>

<!-- end sidebar -->
