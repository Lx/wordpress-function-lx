<?php
/**
 * @package WordPress
 * @subpackage Function
 */
?>

</div><!-- /wrapper -->


<div id="footerwrapper">
<div id="footer">
<div id="bottom">
<div class="botmenu">
  <ul>
  <?php wp_register(); ?>
  <li><?php wp_loginout(); ?></li>
  <li><a class="rss" href="<?php bloginfo('rss2_url'); ?>">Entries RSS</a></li>
  <li><a class="rss" href="<?php bloginfo('comments_rss2_url'); ?>">Comments RSS</a></li>
  <?php wp_meta(); ?>
  </ul>
</div><!-- /botmenu -->
        
<div class="search">
<form method="get" class="searchform" action="<?php bloginfo('url'); ?>/">
<p style="font-size:1em;">
<input type="text" value="Search this site..." onfocus="if (this.value == 'Search this site...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search this site...';}" name="s" class="searchbox" />
<input type="submit" value="Find It!" class="submitbutton" />
</p>
</form>
</div><!-- /search -->
<div class="cleared"></div>
</div><!-- /bottom -->

<div id="footerwidgets">
<div class="foot1">
<ul>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer_1') ) : ?>   
<li>
<h3>Latest Entries</h3>
<ul>
<?php wp_get_archives('type=postbypost&limit=8'); ?>
</ul>
</li>
<?php endif; ?>
</ul>
</div><!-- /foot1 -->

<div class="foot2">
<ul>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer_2') ) : ?> 
<li>
<h3>Blogroll</h3>
<ul>
<?php wp_list_bookmarks('title_li=&categorize=0&limit=8'); ?>
</ul>
</li>
<?php endif; ?>
</ul>
</div><!-- /foot2 -->

<div class="foot3">
<ul>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer_3') ) : ?> 
<li>
<h3>Archives</h3>
<ul>
<?php wp_get_archives('type=monthly&limit=8'); ?>
</ul>
</li>
<?php endif; ?>
</ul>
</div><!-- /foot3 -->   

<div class="foot4">
<ul>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer_4') ) : ?> 
<li>
<h3>Tags</h3>
<?php wp_tag_cloud('smallest=9&largest=15&number=40'); ?>
</li>
<?php endif; ?>
</ul>
</div><!-- /foot4 -->    
<div class="cleared"></div>
</div><!-- /footerwidgets -->  

<div id="credits">
<div id="creditsleft">
<p>
    Content &copy; <?php bloginfo('name'); ?>
    |
    Powered by
    <a rel="generator" title="Semantic Personal Publishing Platform" href="http://wordpress.org/">WordPress</a>
    using
    <a href="https://github.com/lx/wordpress-function-lx">a theme</a>
    based on
    <a href="http://stocktradingonline.net/wordpress-theme-function/">&#8220;Function&#8221;</a>
</p>

</div><!-- /creditsleft -->
        
<div id="creditsright">
<p><a href="#content">Back to top &uarr;</a></p>
</div><!-- /creditsright -->
<div class="cleared"></div>
</div><!-- /credits -->

<?php wp_footer(); ?>

</div><!-- /footer -->
</div><!-- /footerwrapper -->

</div><!-- /page -->
</body>
</html>
