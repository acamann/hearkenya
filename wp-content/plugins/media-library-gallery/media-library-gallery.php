<?php
/*
Plugin Name: Media Library Gallery
Plugin URI: http://www.ixme.net/products/media-library-gallery/
Description: Automatically creates a gallery with every images posts have in attachment. Support thickbox. To include the gallery in a page, simply write in the post: [media-library-gallery nb=XX] where XX is the number of pictures for a page.
Version: 0.0.1
Author: Raphael Verchere
Author URI: http://www.ixme.net
*/

/*  Copyright 2008  Raphael Verchere  (email : r dot verchere [ at ] ixme dot net)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

class media_library_gallery
{
	const TAG = "/\[media\-library-gallery(.*?)\]/six";
	
	public static $BASEPATH;


	public static function initialize()
	{
		self::$BASEPATH = get_option('siteurl') . "/wp-content/plugins/" . dirname(plugin_basename(__FILE__));
	
		add_thickbox();
	
		add_action("wp_head", array("media_library_gallery", "head"));
		add_filter('the_content', array( 'media_library_gallery', 'parse' ), -10 );
	}
	
	public static function head()
	{
		print '<link rel="stylesheet" href="' . self::$BASEPATH . '/media-library-gallery.css" type="text/css" media="screen" />';
	}
	
	public static function library($args = array())
	{
		global $wpdb;
		static $id = 1;
		
		$html = "";

		$posts = get_posts(array(
			"showposts"=>-1,
			"what_to_show"=>"posts",
			"post_status"=>"inherit",
			"post_type"=>"attachment",
			"orderby"=>"menu_order ASC, ID ASC",
			"post_mime_type"=>"image/jpeg,image/gif,image/jpg,image/png"));


		if($nb_items = count($posts))
		{
			$items_by_page = (int)$args["nb"];
			
			if($items_by_page < 1)
			{
				$items_by_page = 20;
			}
		
			$max_page = ceil($nb_items / $items_by_page);
			
			$page = (int)get_query_var("page");
			
			if($page < 1 || $page > $max_page)
			{
				$page = 1;
			}
		
			$begin = ($page - 1) * $items_by_page;
			$end = $begin + $items_by_page;
			
			
			
			$html_nav_bar = "<div class='mlg-navbar'>" . __("Page") . ": ";
			
			if($page > 1)
			{
				$html_nav_bar .= " <a href='" . get_permalink() . ($page - 1) . "/'>&laquo;</a> ";
			}
			
			for($i = 1; $i <= $max_page; $i++)
			{
				if($i == $page)
				{
					$html_nav_bar .= " $i ";
				}
				else
				{
					$html_nav_bar .= " <a href='" . get_permalink() . "$i/'>$i</a> ";
				}
			}
			
			if($page < $max_page)
			{
				$html_nav_bar .= " <a href='" . get_permalink() . ($page + 1) . "/'>&raquo;</a> ";
			}
			
			$html_nav_bar .= "</div>";
			
			
			
			
			$html .= "<div class='media-library-gallery'>";
			$html .= $html_nav_bar;
                        $html .= "<ul id='gallery'>";
						
			for($i = $begin; $i < $end; $i++)
			{
			           $post = $posts[$i];
			                 	
				if($src = wp_get_attachment_thumb_url($post->ID))
				{
                                        if(!strstr(wp_get_attachment_url($post->ID), 'thumb')) {
                                        $title = get_the_title($post->ID);
					  $html .= "<li>";
					  $html .= "<a class='thickbox' rel='media_library_gallery_$id' href='" . wp_get_attachment_url($post->ID) . "' title='" . $title . "'><img src='$src' alt='" . $title . "' /></a>";
					  $html .= "</li>";
                                        }
				}
			}
			$html .= "</ul>";
			$html .= $html_nav_bar;
			$html .= "</div>";
		}
		
		$id++;
	
		return $html;
	}
	
	public static function parse($content)
	{
		if(preg_match(self::TAG, $content, $matches))
		{
			$args = array();
		
			if(!empty($matches[1]))
			{
				parse_str(trim($matches[1]), $args);
			}
		
			$content = preg_replace(self::TAG, self::library($args), $content);
		}
		
		return $content;
	}
}

add_action("init", array("media_library_gallery", "initialize"));

?>