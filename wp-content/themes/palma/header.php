<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<?php /*
    <script type="text/javascript">
      var imgid = 'image'; // id of image div //
      var thumbid = 'thumbs';
      var auto = true; // automatic rotation toggle //
      var autodelay = 5; // seconds before the image rotates //
    </script>
    <script type="text/javascript" src="<?php bloginfo('url'); ?>/wp-content/themes/palma/slideshow/slide.js"></script>

*/ ?>

    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <style type="text/css" media="screen">
	@import url( <?php bloginfo('stylesheet_url'); ?> );
    </style>

    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
    <link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="<?php bloginfo('atom_url'); ?>" />

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_get_archives('type=monthly&format=link'); ?>
    <?php //comments_popup_script(); // off by default ?>
    <?php wp_head(); ?>

</head>
<body>

    <div id="wrapper">

        <div id="header">
            <h1><a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a></h1>
            <?php /* <h3>Life is either one daring adventure... or <em>nothing</em>.</h3> */?>
        </div>
            

        <div id="nav-wrapper">
            <?php /*<ul id="nav">
                <li><a href="<?php bloginfo('url'); ?>/">Home</a></li>
                <li><a href="<?php bloginfo('url'); ?>/photos/">Photos</a></li>
                <li><a href="<?php bloginfo('url'); ?>/about/">About</a></li>
            </ul>*/ ?>
        </div>        


        <div id="content-wrapper">
               <?php /* 
            <div id="search">
               <form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
                 <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
                 <input id="searchsubmit" type="image" src="<?php bloginfo('url'); ?>/wp-content/themes/palma/images/search.gif" />
               </form>
               <a href="<?php bloginfo('rss2_url'); ?>">
                 <img src="<?php bloginfo('url'); ?>/wp-content/themes/palma/images/rss.png" style="margin-top:10px;border:none;" />
               </a>
            </div> */?>

            <?php get_sidebar(); ?>

<!-- end header -->
