<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_head(); ?>
</head>
<body>
<div id="wrapper">

<ul id="navigation">
	<li <?php if (is_home() || is_front_page() ){ echo("id='active'"); } ?> ><a href="<?php bloginfo('url'); ?>">blog</a></li>
      <li <?php if (is_page_template('about.php')){ echo("id='active'"); } ?> ><a href="<?php bloginfo('url'); ?>/about">about</a></li>
      <li <?php if (is_page_template('photos.php')){ echo("id='active'"); } ?> ><a href="<?php bloginfo('url'); ?>/photos">photos</a></li>
      <li <?php if (is_page_template('archives.php')){ echo("id='active'"); } ?> ><a href="<?php bloginfo('url'); ?>/archive">archive</a></li>
</ul>
        
<h1 id="head"><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a><a href="http://www.hearkenya.com/harambeeproject" id="harambeebadge"></a></h1>
        
        <div id="main">
