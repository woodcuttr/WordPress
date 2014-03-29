<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>

<meta http-equiv="content-type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
<meta name="description" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>" />
<meta name="keywords" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>" />
<?php wp_head(); ?>


<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/styles/white.css" title="white" />
<link rel="alternate stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/styles/black.css" title="black" />
<link rel="alternate stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/styles/blue.css" title="blue" />
<link rel="alternate stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/styles/green.css" title="green" />
<link rel="alternate stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/styles/grey.css" title="grey" />

<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/scripts/mootools.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/scripts/script.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/scripts/styleswitcher.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/scripts/skrollr.min.js"></script>

</head>

<body>
<div id="page" >
<div id="header" >
<h1><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h1>
<h2><?php bloginfo('description'); ?></h2>
</div>