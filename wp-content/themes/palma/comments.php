<?php if ( !empty($post->post_password) && $_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) : ?>
           <p><?php _e('Enter your password to view comments.'); ?></p>
<?php return; endif; ?>

         <?php if ( comments_open() ) : ?>

           <div id="comment-wrapper">
             <h2 id="comments">
               <?php comments_number(__('No Comments'), __('1 Comment'), __('% Comments')); ?>
             </h2>

             <?php if ( $comments ) : ?>
               <ol id="commentlist">

               <?php foreach ($comments as $comment) : ?>
                 <li id="comment-<?php comment_ID() ?>">
                   <?php comment_text() ?>
                   <p>
                    <cite>
                     <?php comment_type(__('Comment'), __('Trackback'), __('Pingback')); ?> 
                     <?php _e('by'); ?> 
                     <?php comment_author_link() ?> &#8212; 
                     <?php comment_date() ?> @ 
                     <a href="#comment-<?php comment_ID() ?>">
                       <?php comment_time() ?>
                     </a>
                    </cite> 
                    <?php edit_comment_link(__("Edit"), ' |'); ?>
                  </p>
	       </li>
              <?php endforeach; ?>
              
             </ol>

           <?php else : // If there are no comments yet ?>
	    <p><?php _e('No comments yet.'); ?></p>
           <?php endif; ?>

<?php /* ?>
<p><?php post_comments_feed_link(__('<abbr title="Really Simple Syndication">RSS</abbr> feed for comments on this post.')); ?>
<?php if ( pings_open() ) : ?>
	<a href="<?php trackback_url() ?>" rel="trackback"><?php _e('TrackBack <abbr title="Universal Resource Locator">URL</abbr>'); ?></a>
<?php endif; ?>
</p>
<?php */ ?>



             <h2 id="postcomment"><?php _e('Leave a comment'); ?></h2>

             <?php if ( get_option('comment_registration') && !$user_ID ) : ?>

               <p><?php printf(__('You must be <a href="%s">logged in</a> to post a comment.'), get_option('siteurl')."/wp-login.php?redirect_to=".urlencode(get_permalink()));?></p>
             
             <?php else : ?>

               <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

               <?php if ( $user_ID ) : ?>

                 <p><?php printf(__('Logged in as %s.'), '<a href="'.get_option('siteurl').'/wp-admin/profile.php">'.$user_identity.'</a>'); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="<?php _e('Log out of this account') ?>"><?php _e('Log out &raquo;'); ?></a></p>

               <?php else : ?>
                 <p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
                 <label for="author"><small><?php _e('Name'); ?> <?php if ($req) _e('(required)'); ?></small></label></p>
                 <p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
                 <label for="email"><small><?php _e('Mail (will not be published)');?> <?php if ($req) _e('(required)'); ?></small></label></p>
                 <p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
                 <label for="url"><small><?php _e('Website'); ?></small></label></p>
               <?php endif; ?>

               <!--<p><small><strong>XHTML:</strong> <?php printf(__('You can use these tags: %s'), allowed_tags()); ?></small></p>-->

               <p><textarea name="comment" id="comment" style="width:100%;" rows="10" tabindex="4"></textarea></p>

               <p>
                 <input name="submit" type="submit" id="submit" tabindex="5" value="<?php echo attribute_escape(__('Submit Comment')); ?>" />
                 <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
               </p>
               <?php do_action('comment_form', $post->ID); ?>
             </form>

             <?php endif; // If registration required and not logged in ?>
   
      </div>
     <?php endif; ?>

