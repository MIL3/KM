
<!DOCTYPE html>
<html lang="ja" xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="小林研究室からのお知らせ">
    <meta name="keywords" content="小林研究室" />
    <title>お知らせ | 小林研究室</title>
    <link rel="canonical" href="http://www.hotakubo-seikei.com/news/">
    <meta name="viewport" content="width=1280" />
	<meta http-equiv="imagetoolbar" content="no" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/common/css/fonts.css" media="screen,tv,projection,print" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/common/css/common.css" media="screen,tv,projection,print" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen,tv,projection,print" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/common/css/print.css" media="print" />
	<link rel="index" href="/" />
	<link rel="shortcut icon" type="image/ico" href="<?php echo get_template_directory_uri(); ?>/common/images/favicon.ico" />
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<!--[if IE]>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/common/js/html5.js"></script>
	<![endif]-->
	<!--[if IE 6]>
	<script language="javascript" type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/common/js/DD_belatedPNG-min.js"></script>
	<script language="javascript" type="text/javascript">DD_belatedPNG.fix('img, .pngBg');</script>
	<![endif]-->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/common/js/analytics.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/common/js/preload.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/common/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/common/js/jquery.easing.js"></script>
    <link rel="start" href="http://www.hotakubo-seikei.com/news/">
    <!-- Open Graph Protocol -->
    <meta property="og:type" content="article">
    <meta property="og:locale" content="ja_JP">
    <meta property="og:title" content="お知らせ">
    <meta property="og:url" content="http://www.hotakubo-seikei.com/news/">
    <meta property="og:description" content="小林研究室からのお知らせ">
    <meta property="og:site_name" content="小林研究室">
    <meta property="og:image" content="http://www.hotakubo-seikei.com/common/images/ogp_img.png">
    <!-- Microdata -->
    <meta itemprop="description" content="小林研究室からのお知らせ">
    <meta itemprop="name" content="お知らせ">
    <link itemprop="url" href="http://www.hotakubo-seikei.com/news/">
    <link itemprop="image" href="http://www.hotakubo-seikei.com/common/images/ogp_img.png">
  </head>
<body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
$(function(){
    var setElm = $('.scrImg'),
    delayHeight = 0;
 
    setElm.css({display:'block',opacity:'0'});
    $('html,body').animate({scrollTop:0},1);
 
    $(window).on('load scroll resize',function(){
        setElm.each(function(){
            var setThis = $(this),
            elmTop = setThis.offset().top,
            elmHeight = setThis.height(),
            scrTop = $(window).scrollTop(),
            winHeight = $(window).height();
            if (scrTop > elmTop - winHeight + delayHeight && scrTop < elmTop + elmHeight){
                setThis.stop().animate({left:'0',opacity:'1'},500);
            } else if (scrTop < elmTop - winHeight + delayHeight && scrTop < elmTop + delayHeight){
                setThis.stop().animate({left:'-100px',opacity:'0'},500);
            }
        });
    });
});
</script>
<div id="field1"><img  src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/information_visual.jpg" class="scrImg"></div><!--/#field1-->
<div id="field2"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/news_visual.jpg" class="scrImg"></div><!--/#field2-->
<div id="field3"><img src=src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/facilities_visual.jpg" class="scrImg"></div><!--/#field3-->
<div id="field4"><img src=src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/information_visual.jpg" class="scrImg"></div><!--/#field4-->
<div id="field5"><img src=src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/information_visual.jpg" class="scrImg"></div><!--/#field5-->
<div id="field6"><img src=src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/information_visual.jpg" class="scrImg"></div><!--/#field6-->
</body>
</html>