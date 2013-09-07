<?php 
/* Short and sweet */
define('WP_USE_THEMES', false);
require('./wp-blog-header.php');
?>


<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
  <title>John Meisburg - blog</title>
  <meta charset="utf-8" />
  <meta name="description" content="Portfolio of John Meisburg - Front End Developer">
  <meta name="keywords" content="web designer, web design, web developer, web development, front end developer, front end development, html, css, jquery">
  <meta name="author" content="John Meisburg">
  <meta property="og:title" content="John Meisburg's Facebook Page">
  <meta property="og:type" content="Website">
  <meta property="og:url" content="http://www.johnmeisburg.com">  
  <meta name="viewport" content="width=device-width" />
  <meta property="og:image" content="http://www.johnmeisburg.com/img/john.jpg">
  <meta property="og:image:width" content="590"> 
  <meta property="og:image:height" content="481">
  <meta property="fb:app_id" content="462812130493211"> 
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" href="img/favicon.ico">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300, 700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />

  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/app.css" type="text/css" media="screen" />

  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/general.css" type="text/css" media="screen" />

  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/blog.css" type="text/css" media="screen" />

  <script src="javascripts/vendor/custom.modernizr.js"></script>
</head>

<body>

  <header> 
    <div class="row">
      <div class="small-12 large-12 columns">

        <a href="http://johnmeisburg.com"><img class="logo p_left" src="http://johnmeisburg.com/img/logo.svg" alt=""></a>

        <div class="icon p_right" id="mobile_icon" aria-hidden="true" data-icon="&#xe000;"></div>

        <ul class="social">
          <li class="facebook"><a href="https://www.facebook.com/pages/John-Meisburg/162796213906332" <span aria-hidden="true" data-icon="&#xe006;" title="Like me on Facebook" target="_blank"></a></li>
          <li class="twitter"><a href="http://www.twitter.com/johnmeisburg" aria-hidden="true" data-icon="&#xe005;" title="Follow me on Twitter" target="_blank"></a></li>
          <li class="linkedin"><a href="http://www.linkedin.com/in/johnmeisburg/" aria-hidden="true" data-icon="&#xe007;" title="Connect with me on Linkedin" target="_blank"></a></li>
        </ul>

        <nav class="nav">
          <ul>
            <li><a href="../about.html">about</a></li>
            <li><a href="../portfolio.html">portfolio</a></li>
            <li><a class="selected" href="/blog">blog</a></li>
            <li><a href="../contact.html">contact</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>

<section class="page">
<div class="row container">
  <div class="small-12 medium-12 large-12 columns"> 

    <div id="primary" class="content-area">
      <div id="content" class="site-content" role="main">
      <?php if ( have_posts() ) : ?>

        <?php /* The loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'content', get_post_format() ); ?>
        <?php endwhile; ?>

        <?php twentythirteen_paging_nav(); ?>

      <?php else : ?>
        <?php get_template_part( 'content', 'none' ); ?>
      <?php endif; ?>

      </div><!-- #content -->
    </div><!-- #primary -->
  </div>
</div>
</section>

  <footer class="footer"> 
    <div class="row">
      <div class="footer small-12 large-12 columns">
        <div class="arrowcontainer">
          <a href="#top" class="top"></a>
        </div>  
        <div class="left">
          <p>© 2013 John Meisburg</p>
        </div>

        <div class="right">         
          <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FJohn-Meisburg%2F162796213906332&amp;width=100&amp;height=21&amp;colorscheme=light&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;send=false&amp;appId=462812130493211" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:21px;" allowTransparency="true"></iframe>  
          
          <a href="https://twitter.com/johnmeisburg" class="twitter-follow-button" data-show-count="false">Follow @johnmeisburg</a>
        </div>
    </div>
  </div>
</footer>

<script src="javascripts/vendor/jquery-1.10.2.min.js"></script>

<script src="javascripts/vendor/script.js"></script>

<script>
document.write('<script src=' +
('__proto__' in {} ? 'javascripts/vendor/zepto' : 'javascripts/vendor/jquery') +
'.js><\/script>')
</script>

<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

<script src="javascripts/foundation/foundation.min.js"></script>

<script>
$(document).foundation();
</script>

<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-43421528-1', 'johnmeisburg.com');
ga('send', 'pageview');
</script>

</body>
</html>
