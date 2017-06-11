
<!DOCTYPE html>
<html lang="ja" xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="小林研究室からのお知らせ">
    <meta name="keywords" content="小林研究室" />
    <title>小林研究室 | マッスルスーツ</title>
    <link rel="canonical" href="http://kobalab.com">
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
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/common/js/jquery.fadethis.js"></script>
    <!-- Open Graph Protocol -->
    <meta property="og:type" content="article">
    <meta property="og:locale" content="ja_JP">
    <meta property="og:title" content="お知らせ">
    <meta property="og:url" content="http://kobalab.com">
    <meta property="og:description" content="小林研究室からのお知らせ">
    <meta property="og:site_name" content="小林研究室">
    <meta property="og:image" content="http://kobalab.com/common/images/ogp_img.png">
    <!-- Microdata -->
    <meta itemprop="description" content="小林研究室からのお知らせ">
    <meta itemprop="name" content="お知らせ">
    <link itemprop="url" href="http://kobalab.com/news/">
    <link itemprop="image" href="http://kobalab.com/common/images/ogp_img.png">
  </head>
<body>
<div id="contents" class="clearfix">
<!-- loadingArea -->
<div id="loadingArea"><div id="loadingAreaInner">
	<p>Loading</p>
</div></div>
<!-- /loadingArea -->
<!-- rightArea -->
<div id="rightArea">
	<p id="pageLogo"><a href="<?php echo home_url() ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/logo.gif" width="100" height="106"  alt="小林研究室"></a></p>
  <nav id="menu">
            <ul class="listBlock">
              <li class="current"><a href="<?php echo get_permalink( get_page_by_path( 'news' )->ID ); ?>">
                <div class="sidemenuimg">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/newsicon.png" alt="">
                </div>
                <div class="sidemenutxt">
                  <p class="menujapan2">お知らせ</p>
              <p class="manueng2">news</p>
                </div>
              </a></li>
              <li><a href="<?php echo get_permalink( get_page_by_path( 'information' )->ID ); ?>">
                <div class="sidemenuimg">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/kenkyuicon.png" alt="">
                </div>
                <div class="sidemenutxt">
                  <p class="menujapan2">研究内容</p>
              <p class="manueng2">information</p>
                </div>
              </a></li>
              <li><a href="<?php echo get_permalink( get_page_by_path( 'facilities' )->ID ); ?>">
                <div class="sidemenuimg">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/infoicon.png" alt="">
                </div>
                <div class="sidemenutxt">
              <p class="menujapan2">研究情報</p>
              <p class="manueng2">facilities</p>
                </div>
              </a></li>
              <li><a href="<?php echo get_permalink( get_page_by_path( 'medical' )->ID ); ?>">
                <div class="sidemenuimg">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/jissekiicon.png" alt="">
                </div>
                <div class="sidemenutxt">
                  <p class="menujapan2">研究実績</p>
              <p class="manueng2">medical</p>
                </div>
              </a></li>
              <li><a href="<?php echo get_permalink( get_page_by_path( 'hospitalized' )->ID ); ?>">
                <div class="sidemenuimg">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/membericon.png" alt="">
                </div>
                <div class="sidemenutxt">
                  <p class="menujapan2">研究メンバー</p>
              <p class="manueng2">hospitalized</p>
                </div>
              </a></li>
            </ul>
          </nav>
	<footer id="pageFooter">
		<p id="footerAddress"><address><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/right_address.gif" width="134" height="24"  alt="adress"></address></p>
		<p id="footerPhone"><address><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/right_tel.gif" width="90" height="10"  alt="TEL : 096-381-8711"></address></p>
		<nav id="langMenu">
			<ul class="listBlock imgBlock">
				<li id="langJp"><span class="current">Japanese Website</span></li>
				<li id="langEng"><a href="http://eng.kobalab.com/" class="nonPjax"><span>English Website</span></a></li>
				</ul>
		</nav>
		<p id="footerCopyright"><address><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/right_copyright.gif" width="130" height="11"  alt="&copy;  Kobalab.com"></address></p>
	</footer>
</div>
<!-- /rightArea -->
<p id="mainIcon"><a href="/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/titile1_icon.png" width="49" height="41"  alt="icon"></a></p>
<!-- mainArea -->
<div id="mainArea"><div id="mainAreaInner">
  <!-- mainContentsArea -->
  <div id="mainContentsArea" class="printFacilities">
    <header class="title1Area" id="pageFacilities">
      <h1 id="title1"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/facilities_title1.gif" width="159" height="38"  alt="研究情報"></h1>
      <p id="title1Eng"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/facilities_title1_eng.gif" width="46" height="11"  alt="facilities"></p>
    </header>
    <section class="contentsMain">
      
      <ul class="facilitiesList listBlock clearfix">
        <li><figure>
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/facilities_pict2_11.png" data=""-original="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/facilities_pict2_11.png" width="220" height="162">
          <figcaption>マッスルスーツ</figcaption>
        </figure></li>
        <li><figure>
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/facilities_pict2_21.png" width="220" height="162">
          <figcaption>アクティブ歩行器</figcaption>
        </figure></li>
        <li><figure>
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/facilities_pict1_3.png" width="220" height="162">
          <figcaption>アンドロイドロボットSAYA</figcaption>
        </figure></li>
        <li><figure>
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/facilities_pict1_4.png" width="220" height="162">
          <figcaption>リハビリロボット</figcaption>
        </figure></li>
        <li><figure>
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/facilities_pict1_5.png" width="220" height="162">
          <figcaption>自立サポートシステム</figcaption>
        </figure></li>
        <li><figure>
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/awd_img_01.jpg" width="220" height="162">
          <figcaption>2WD自転車</figcaption>
        </figure></li>
        <li><figure>
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/facilities_pict1_7.png" width="220" height="162">
          <figcaption>嚥下ロボット</figcaption>
        </figure></li>
        <li><figure>
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/facilities_pict1_8.png" width="220" height="162">
          <figcaption>火花試験機</figcaption>
        </figure></li>
      </ul>
    </section>
    <section class="contentsMain cType2">
      <h2 class="title2_1 pb5"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/facilities_title2_2.gif" width="172" height="36"  alt="入院・リハビリフロア"></h2>
      <ul class="facilitiesList listBlock clearfix">
        <li><figure>
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/facilities_pict2_11.png" width="220" height="162">
          <figcaption>除草ロボット</figcaption>
        </figure></li>
        <li><figure>
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/facilities_pict2_21.png" width="220" height="162">
          <figcaption>お風呂掃除ロボット</figcaption>
        </figure></li>
        <li><figure>
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/facilities_pict2_31.png" width="220" height="162">
          <figcaption>新エネルギー</figcaption>
        </figure></li>
        <li><figure>
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/facilities_pict2_41.png" width="220" height="162">
          <figcaption>3Dアーカイビング</figcaption>
        </figure></li>
        <li><figure>
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/facilities_pict2_51.png" width="220" height="162">
          <figcaption>リハビリテーション室</figcaption>
        </figure></li>
        <li><figure>
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/facilities_pict2_61.png" width="220" height="162">
          <figcaption>ポータブルトイレ</figcaption>
        </figure></li>
        <li><figure>
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/facilities_pict2_71.png" width="220" height="162">
          <figcaption>腕回しリハビリロボット</figcaption>
        </figure></li>
        <li><figure>
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/facilities_pict2_81.png" width="220" height="162">
          <figcaption>もも上げロボット</figcaption>
        </figure></li>
      </ul>
    </section>
    <p class="contentsTop"><a href="#pageFacilities"><span>「研究情報」の最初へ戻る</span></a></p>
  </div>
  <!-- /mainContentsArea -->
</div></div>
<!-- /mainArea -->
<!-- visualArea -->
<div id="visualArea">
<div id="backimgfacilities" class="slide-left"></div>
</div>
<!-- /visualArea -->
    <script>
      $(document).ready(function() {
        $(window).fadeThis({
          speed: 2000,
        });
      });
    </script>
</div>
</body>
</html>