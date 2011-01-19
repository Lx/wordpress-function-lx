<?php
/**
 * @package WordPress
 * @subpackage Function
 */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="robots" content="follow, all" />

<title><?php if (is_home () ) { bloginfo('name'); echo " - "; bloginfo('description'); 
} elseif (is_category() ) {single_cat_title(); echo " - "; bloginfo('name');
} elseif (is_single() || is_page() ) {single_post_title(); echo " - "; bloginfo('name');
} elseif (is_search() ) {bloginfo('name'); echo " search results: "; echo wp_specialchars($s);
} else { wp_title('',true); }?></title>

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/superfish.css" media="screen" />

<!--[if lt IE 7]>
<link href="<?php bloginfo('template_url'); ?>/ie6.css" rel="stylesheet" type="text/css" media="screen" />
<![endif]--> 

<!--[if IE 7]>
<link href="<?php bloginfo('template_url'); ?>/ie7.css" rel="stylesheet" type="text/css" media="screen" />
<![endif]--> 

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/hoverIntent.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/superfish.js"></script>
<script type="text/javascript">
    $(document).ready(function() { 
        $('ul.sf-menu').superfish({ 
            speed:'fast',
            delay:50
        }); 
    }); 
</script>


<?php wp_head(); ?>
</head>

<body>
<div id="page">

<div id="wrapper">

<div id="header">
<div id="top">
<div class="topmenu">
        <ul>
		<li><a href="<?php echo get_option('home'); ?>">home</a></li>
        <li><a class="rss" href="<?php bloginfo('rss2_url'); ?>">rss</a></li>
        </ul>
</div><!-- /topmenu -->

<div class="search">
<form method="get" class="searchform" action="<?php bloginfo('url'); ?>/">
<p>
<input type="text" value="Search this site..." onfocus="if (this.value == 'Search this site...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search this site...';}" name="s" class="searchbox" />
<input type="submit" value="Find It!" class="submitbutton" />
</p>
</form>
</div><!-- /search -->
<div class="cleared"></div>
</div><!-- /top -->

<div id="logo">
<h1><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></h1>
<div id="desc"><?php bloginfo('description'); ?></div>
</div><!-- /logo -->

<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('header') ) : ?>
<div id="headerbanner">
<p>Hey there! Thanks for dropping by <?php bloginfo('name'); ?>! Take a look around and grab the <a href="<?php bloginfo('rss2_url'); ?>">RSS feed</a> to stay updated. See you around!</p>
</div><!-- /headerbanner -->
<?php endif; ?>

<div class="cleared"></div>
</div><!-- /header -->


<div id="catnav">
    <?php
        wp_nav_menu(array(
            'theme_location'    => 'bottom_header',
            'container'         => 'none',
            'menu_class'        => 'sf-menu',
        ));
    ?>
 <div class="cleared"></div>
</div>
<!-- /catnav -->

