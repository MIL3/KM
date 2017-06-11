
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
				<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/common/js/jquery.fadethis.js"></script>
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
	var setWrap = $('#container'),
	setBase = $('.stageBase'),
	scrollSpeed = 1000,
	scrollEasing = 'swing',
	slideSpeed = 500,
	slideEasing = 'linear',
	downBtn = 'show', // 'show' or 'hide'
	urlHash = 'on', // 'on' or 'off'
	setHash = '!page';

	var url = document.URL,
	stageSlide = $('.stageSlide');

	setWrap.append('<nav id="pageNav"><ul></ul></nav>');
	setBase.each(function(i){
		$('#pageNav ul').append('<li class="pagePn'+(i+1)+'"><a href="javascript:void(0);"></a></li>');
	});

	if(downBtn == 'show'){
		setWrap.append('<div id="pageDown"><a href="javascript:void(0);"></a></div>');
	}

	var coreNav = $('#pageNav'),
	setNav = coreNav.find('ul'),
	navList = setNav.find('li'),
	navLength = navList.length;
	setNav.find('li:first').addClass('activeStage');
	$('body').attr('data-page','1');

	$(window).load(function(){
		// StageHeight
		$(window).resize(function(){
			var wdHeight = $(window).height();
			setBase.css({height:wdHeight});

			var resizeContTop = parseInt(setWrap.css('top'));

			if(resizeContTop === 0){
				setWrap.css({top:'0'});
			} else {
				var activeStagePos = setNav.find('li.activeStage');
				activeStagePos.each(function(){
					var posIndex = navList.index(this);
					setWrap.css({top:-(wdHeight*posIndex)});
				});
			}

			coreNav.each(function(){
				var navHeight = $(this).height();
				$(this).css({top:((wdHeight)-(navHeight))/2});
			});
		}).resize();

		// StageSlide
		stageSlide.each(function(){
			var thisSlide = $(this),
			chdPanel = thisSlide.find('.slidePanel'),
			chdPanelLength = chdPanel.length;

			chdPanel.eq('0').addClass('activePanel').end().wrapAll('<div class="slideWrap"></div>');
			thisSlide.append('<a href="javascript:void(0);" class="sdPrev"></a><a href="javascript:void(0);" class="sdNext"></a><div class="slideNav"></div>');

			var thisWrap = thisSlide.find('.slideWrap'),
			thisPrev = thisSlide.find('.sdPrev'),
			thisNext = thisSlide.find('.sdNext'),
			thisPn = thisSlide.find('.slideNav');

			chdPanel.each(function(i){
				thisPn.append('<a href="javascript:void(0);" class="slidePn'+(i+1)+'"></a>');
			});

			var pnPoint = thisPn.find('a'),
			pnFirst = thisPn.find('a:first'),
			pnLast = thisPn.find('a:last'),
			pnCount = thisPn.find('a').length;

			pnFirst.addClass('pnActive');

			pnPoint.click(function(){
				var pnNum = pnPoint.index(this),
				mvWidth = chdPanel.width(),
				wpWidth = thisWrap.width(),
				moveLeft = mvWidth*pnNum;
				thisWrap.stop().animate({left: -(moveLeft)},slideSpeed,slideEasing);
				pnPoint.removeClass('pnActive');
				$(this).addClass('pnActive');
				pnAcvCheck();
			});

			thisPrev.click(function(){
				thisWrap.not(':animated').each(function(){
					thisPn.find('.pnActive').prev().click();
					pnAcvCheck();
				});
			});

			thisNext.click(function(){
				thisWrap.not(':animated').each(function(){
					thisPn.find('.pnActive').next().click();
					pnAcvCheck();
				});
			});

			function pnAcvCheck(){
				var pnAcvNum = thisPn.find('.pnActive');
				pnAcvNum.each(function(){
					var acvIndex = pnPoint.index(this);
					acvCount = acvIndex+1;
					if(1 == acvCount){
						thisPrev.css({display:'none'});
						thisNext.css({display:'block'});
					} else if(pnCount == acvCount){
						thisPrev.css({display:'block'});
						thisNext.css({display:'none'});
					} else {
						thisPrev.css({display:'block'});
						thisNext.css({display:'block'});
					}
					chdPanel.removeClass('activePanel').eq(acvIndex).addClass('activePanel');
				});
			}
			pnAcvCheck();

			$(window).resize(function(){
				var setWrapLeft = parseInt(thisWrap.css('left')),
				setPanelWidth = chdPanel.width(),
				setLeft = setWrapLeft / setPanelWidth;

				var sdWidth = $(window).width(),
				sdHeight = $(window).height();
				thisSlide.css({width:sdWidth,height:sdHeight});
				thisWrap.css({width:(sdWidth*chdPanelLength),height:sdHeight});
				chdPanel.css({width:sdWidth,height:sdHeight});

				var setWidth = chdPanel.width(),
				adjLeft = setWidth * setLeft;
				thisWrap.css({left:(adjLeft)});
			}).resize();

			var thisInt = thisWrap.find('.slideInitial');
			thisInt.each(function(){
				var pnlInt = thisWrap.find('.slideInitial');
				pnlInt.each(function(){
					var intIndex = chdPanel.index(this);
					pnPoint.eq(intIndex).click();
				});
			});
			setTimeout(function(){
				thisSlide.css({visibility:'visible',opacity:'0'}).animate({opacity:'1'},slideSpeed);
			},slideSpeed);
		});

		// MouseWheelEvent
		var mousewheelevent = 'onwheel' in document ? 'wheel' : 'onmousewheel' in document ? 'mousewheel' : 'DOMMouseScroll';
		$(document).on(mousewheelevent,function(e){
			if(!(setWrap.is(':animated'))){
				e.preventDefault();
				var delta = e.originalEvent.deltaY ? -(e.originalEvent.deltaY) : e.originalEvent.wheelDelta ? e.originalEvent.wheelDelta : -(e.originalEvent.detail);
				if (delta < 0){
					motionDown();
				} else {
					motionUp();
				}
			}
		});

		// KeyEvent
		$('html').keydown(function(e){
			if(setWrap.is(':animated') || setWrap.find('*').is(':animated')){
				e.preventDefault();
			} else {
				var acvStgSwP = parseInt($('body').attr('data-page'));
				switch(e.which){
					case 33: // Key[PgUp]
					e.preventDefault();
					motionUp();
					break;

					case 34: // Key[PgDn]
					e.preventDefault();
					motionDown();
					break;

					case 38: // Key[↑]
					e.preventDefault();
					motionUp();
					break;

					case 40: // Key[↓]
					e.preventDefault();
					motionDown();
					break;

					case 37: // Key[←]
					e.preventDefault();
					var dsChkP = $('#stage' + acvStgSwP + ' .sdPrev').css('display');
					if (!(dsChkP == 'none')){
						$('#stage' + acvStgSwP + ' .sdPrev').click();
					}
					break;

					case 39: // Key[→]
					e.preventDefault();
					var dsChkN = $('#stage' + acvStgSwP + ' .sdNext').css('display');
					if (!(dsChkN == 'none')){
						$('#stage' + acvStgSwP + ' .sdNext').click();
					}
					break;
				}
			}
		});

		// FlickEvent
		var isTouch = ('ontouchstart' in window);
		setWrap.on(
			{'touchstart': function(e){
				if(setWrap.is(':animated')){
					e.preventDefault();
				} else {
					this.pageY = (isTouch ? event.changedTouches[0].pageY : e.pageY);
					this.topBegin = parseInt($(this).css('top'));
					this.top = parseInt($(this).css('top'));
					this.touched = true;
				}
			},'touchmove': function(e){
				if(!this.touched){return;}
				e.preventDefault();
				this.top = this.top - (this.pageY - (isTouch ? event.changedTouches[0].pageY : e.pageY));
				this.pageY = (isTouch ? event.changedTouches[0].pageY : e.pageY);
			},'touchend': function(e){
				if (!this.touched) {return;}
				this.touched = false;

				if(((this.topBegin)-30) > this.top){
					motionDown();
				} else if(((this.topBegin)+30) < this.top){
					motionUp();
				}
			}
		});

		// ScrollUpEvent
		function motionUp(){
			var stageHeightU = setBase.height(),
			contTopUp = parseInt(setWrap.css('top')),
			moveTopUp = contTopUp + stageHeightU;
			$('input,textarea').blur();
			if(!(contTopUp === 0)){
				setWrap.stop().animate({top:moveTopUp},scrollSpeed,scrollEasing);
				setNav.find('li.activeStage').removeClass('activeStage').prev().addClass('activeStage');

				var acvStageP = parseInt($('body').attr('data-page')),
				setPrev = acvStageP-1;
				$('body').attr('data-page',setPrev);
				if(downBtn == 'show'){
					pagePos();
				}
			}
			if(urlHash == 'on'){
				replaceHash();
			}
		}

		// ScrollDownEvent
		function motionDown(){
			var stageHeightD = setBase.height(),
			contTopDown = parseInt(setWrap.css('top')),
			moveTopDown = contTopDown - stageHeightD;
			$('input,textarea').blur();

			var contHeight = setWrap.height(),
			maxHeightAdj = -(contHeight - stageHeightD);

			if(!(contTopDown == maxHeightAdj)){
				setWrap.stop().animate({top:moveTopDown},scrollSpeed,scrollEasing);
				setNav.find('li.activeStage').removeClass('activeStage').next().addClass('activeStage');

				var acvStageN = parseInt($('body').attr('data-page')),
				setNext = acvStageN+1;
				$('body').attr('data-page',setNext);
				if(downBtn == 'show'){
					pagePos();
				}
			}
			if(urlHash == 'on'){
				replaceHash();
			}
		}

		// SideNaviClick
		navList.click(function(){
			if(!(setWrap.is(':animated'))){
				var crtIndex = navList.index(this),
				crtHeight = $(window).height();
				setWrap.stop().animate({top:-(crtHeight*crtIndex)},scrollSpeed,scrollEasing);
				setNav.find('li.activeStage').removeClass('activeStage');
				$(this).addClass('activeStage');

				$('body').attr('data-page',crtIndex+1);

				if(downBtn == 'show'){
					pagePos();
				}
				if(urlHash == 'on'){
					replaceHash();
				}
			}
		});

		// PageDownBtnClick
		$('#pageDown a').click(function(){
			if(!(setWrap.is(':animated'))){
				var navActive = setNav.find('li.activeStage');
				navActive.each(function(){
					var navIndex = navList.index(this),
					setNav = navIndex+1;
					if(!(setNav == navLength)){
						$(this).next().click();
					}
				});
				if(urlHash == 'on'){
					replaceHash();
				}
			}
		});
		function pagePos(){
			var pnAcv = coreNav.find('li.activeStage');
			pnAcv.each(function(){
				var pnIndexN = navList.index(this),
				pnCountN = pnIndexN+1;
				if(pnCountN == navLength){
					$('#pageDown').css({display:'none'});
				} else {
					$('#pageDown').css({display:'block'});
				}
			});
		}

		// HashReplace
		function replaceHash(){
			var pnAcv = coreNav.find('li.activeStage');
			pnAcv.each(function(){
				var pnIndexN = navList.index(this),
				pnCountN = pnIndexN+1;
				location.hash = setHash + pnCountN;
			});
		}
		if(urlHash == 'on'){
			replaceHash();
		}

		// OpeningFade
		$('body').css({visibility:'visible',opacity:'0'}).animate({opacity:'1'},1000);

		// LoadPageMove
		if(url.indexOf(setHash) !== -1){
			var numSplit = ((url.split(setHash)[1])-1);
			navList.eq(numSplit).click();
		}
	});

	// HashChangeEvent
	if(urlHash == 'on'){
		$(window).on('hashchange',function(){
			var stateUrl = document.URL,
			hashSplit = ((stateUrl.split(setHash)[1])-1);
			navList.eq(hashSplit).click();
		});
	}
});
</script>
<script>
<script>
$(function(){
    var setElm = $('.scrImg'),
    delayHeight = 10;

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
<div id="container" class="clearfix">
<!-- loadingArea -->
<div id="loadingArea"><div id="loadingAreaInner">
	<p>Loading</p>
</div></div>
<!-- /loadingArea -->
<!-- rightArea -->
<div id="rightArea">
	<p id="pageLogo"><a href="<?php echo home_url() ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/logo.gif" width="100" height="106"  alt="医療法人 保田窪会 小林研究室"></a></p>
  <nav id="menu">
    <ul class="listBlock">
      <li class="current"><a href="<?php echo get_permalink( get_page_by_path( 'news' )->ID ); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/menu1.png" width="89" height="29"  alt="お知らせ"></a></li>
      <li><a href="<?php echo get_permalink( get_page_by_path( 'information' )->ID ); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/menu2.png" width="114" height="29"  alt="研究内容"></a></li>
      <li><a href="<?php echo get_permalink( get_page_by_path( 'facilities' )->ID ); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/menu3.png" width="90" height="29"  alt="研究情報"></a></li>
      <li><a href="<?php echo get_permalink( get_page_by_path( 'medical' )->ID ); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/menu4.png" width="112" height="29"  alt="研究実績"></a></li>
      <li><a href="<?php echo get_permalink( get_page_by_path( 'hospitalized' )->ID ); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/menu5.png" width="145" height="29"  alt="研究メンバー"></a></li>
    </ul>
  </nav>
	<footer id="pageFooter">
		<p id="footerAddress"><address><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/right_address.gif" width="134" height="24"  alt="adress"></address></p>
		<p id="footerPhone"><address><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/right_tel.gif" width="90" height="10"  alt="TEL : 096-381-8711"></address></p>
		<nav id="langMenu">
			<ul class="listBlock imgBlock">
				<li id="langJp"><span class="current">Japanese Website</span></li>
				<li id="langEng"><a href="http://eng.hotakubo-seikei.com/" class="nonPjax"><span>English Website</span></a></li>
				<li id="langDe"><a href="http://deu.hotakubo-seikei.com/" class="nonPjax"><span>Germany Website</span></a></li>
			</ul>
		</nav>
		<p id="footerCopyright"><address><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/right_copyright.gif" width="130" height="11"  alt="&copy;  Hotakubo Seikei  Hospital"></address></p>
	</footer>
</div>
<!-- /rightArea -->
<p id="mainIcon"><a href="/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/titile1_icon.png" width="49" height="41"  alt="icon"></a></p>
<section id="stage1" class="stageBase">
	<div class="fieldWrap">
		<!-- mainArea -->
		<div id="mainArea"><div id="mainAreaInner">
			<!-- mainContentsArea -->
			<div id="mainContentsArea" class="printNews">
				<header class="title1Area" id="pageNews">
					<h1 id="title1"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/news_title1.gif" width="127" height="32"  alt="お知らせ"></h1>
					<p id="title1Eng"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/news_title1_eng.png" width="29" height="8"  alt="news"></p>
				</header>
				<section class="contentsMain cType1 newsArea">
										<?php
										$paged = (int) get_query_var('paged');
										$args = array(
										 'posts_per_page' => 10,
										 'paged' => $paged,
										 'orderby' => 'post_date',
										 'order' => 'DESC',
										 'post_type' => 'post',
										 'post_status' => 'publish'
										);
										$the_query = new WP_Query($args);
										if ( $the_query->have_posts() ) :
										 while ( $the_query->have_posts() ) : $the_query->the_post();
										?>
		              <article class="newsArticle clearfix" id="entry-26">
							<div class="newsArticleLeft">
						    <time datetime="" itemprop="datePublished"><span><?php the_time('Y年　m月d日'); ?></span></time>
							</div>
							<div class="newsArticleRight">
								<h2><?php the_title(); ?></h2>
								<div class="newsBox">
						    		<p><?php echo the_content('続きを読む>>'); ?></p>
								</div>
							</div>
						</article>
							<?php endwhile; ?>
										<div id="pager">
											<p><?php previous_posts_link('<< 前のページへ'); ?></p>
											<p><?php next_posts_link('次のページへ >>'); ?></p>
							             </div>
			                			<?php else : ?>
			                			<div class="post">
						                </div>
						                <?php endif; ?>
				</section>
				<p class="contentsTop"><a href="#pageNews"><span>「お知らせ」の最初へ戻る</span></a></p>

			</div>
			<!-- /mainContentsArea -->
		</div></div>
		<!-- /mainArea -->
		<!-- visualArea -->
		<div id="visualArea">
			<div id="backimgnews" class="slide-left"></div>
				<script>
					$(document).ready(function() {
						$(window).fadeThis({
							speed: 2000,
						});
					});
				</script>
		</div>
		<!-- /visualArea -->
	</div><!--/.fieldWrap -->
</section>

<section id="stage2" class="stageBase">
	<div class="fieldWrap">
					<!-- mainArea -->
			<div id="mainArea"><div id="mainAreaInner">
				<!-- mainContentsArea -->
				<div id="mainContentsArea" class="printInformation">
					<header class="title1Area" id="pageInformation">
						<h1 id="title1"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/information_title1.gif" width="196" height="33" alt="当院のご案内"></h1>
						<p id="title1Eng"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/information_title1_eng.gif" width="66" height="11" alt="information"></p>
					</header>
					<section class="contentsMain cType1">
						<h2 class="title2_1 pb5"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/wait.gif" data-original="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/information_title2_1.gif" width="137" height="37" alt="院長よりご挨拶"></h2>
						<div class="informationArea1">
							<p class="informationTxt1 infoTxt1Pict">
					人間が装着して使うロボットは、通常の機械類と異なり、仕様書通り作ることが完成ではありません。マッスルスーツは、現場の意見を取り入れて柔軟にトライ＆エラーを繰り返し続けてきた結果であり、仕組みも形状もすべてがノウハウの賜物。真似できない技術が詰まった製品です。
					現在までに製品化したものは「腰補助」に特化したものですが、「生きている限り自立した生活を実現する」ための体の動きを補助する装置を、順次、スピーディーに製品化していきます。</p>
							<p id="informationPict1"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/information_pict1.png" data-original="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/information_pict1.png" width="250" height="350" alt="院長イメージ" style="display: block;"></p>
						</div>
						<p class="pt40"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/information_name.gif" data-original="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/information_name.gif" width="118" height="18" alt="院長イメージ" style="display: inline;"></p>
					</section>
					<section class="contentsMain cType1">
						<h2 class="title2_1 pb5"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/information_title2_2.gif" data-original="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/information_title2_2.gif" width="258" height="33" alt="小林研究室の概要" style="display: inline;"></h2>
						<p class="imgBlock pt40"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/information_pict2.jpg" data-original="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/information_pict2.jpg" width="440" height="265" alt="小林研究室イメージ" style="display: block;"></p>
						<div class="tableType1Box">
							<table class="tableType1 mt25" cellspacing="0">
								<tbody><tr>
									<th>名称</th>
									<td>東京理科大学　小林研究室　および　株式会社イノフィス</td>
								</tr>
								<tr>
									<th>所在地</th>
									<td>〒125-0051　葛飾区新宿6-3-1</td>
								</tr>
								<tr>
									<th>電話番号</th>
									<td>03-5876-1718</td>
								</tr>
								<tr>
									<th>FAX番号</th>
									<td>03-5876-1717</td>
								</tr>


							</tbody></table>
						</div>
					</section>
					<p class="contentsTop"><a href="#pageInformation"><span>「ご案内」の最初へ戻る</span></a></p>
				</div>
				<!-- /mainContentsArea -->
			</div></div>
			<!-- /mainArea -->
			<!-- visualArea -->
			<div id="visualArea">
			<div id="backimginformation" class="slide-left"></div>
				<script>
					$(document).ready(function() {
						$(window).fadeThis({
							speed: 2000,
						});
					});
				</script>
			</div>
			<!-- /visualArea -->
	</div><!--/.fieldWrap -->
</section>

<section id="stage3" class="stageBase">
	<div class="fieldWrap">
<!-- mainArea -->
<div id="mainArea"><div id="mainAreaInner">
  <!-- mainContentsArea -->
  <div id="mainContentsArea" class="printFacilities">
    <header class="title1Area" id="pageFacilities">
      <h1 id="title1"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/facilities_title1.gif" width="139" height="33"  alt="研究情報"></h1>
      <p id="title1Eng"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/facilities_title1_eng.gif" width="46" height="11"  alt="facilities"></p>
    </header>
    <section class="contentsMain cType2">
      <h2 class="title2_1 pb5"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/facilities_title2_1.gif" width="147" height="35"  alt="外観・外来フロア"></h2>
      <ul class="facilitiesList listBlock clearfix">
        <li><figure>
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/facilities_pict1_1.png" data=""-original="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/facilities_pict1_1.png" width="220" height="162">
          <figcaption>マッスルスーツ</figcaption>
        </figure></li>
        <li><figure>
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/facilities_pict1_2.png" width="220" height="162">
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
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/facilities_pict1_6.png" width="220" height="162">
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
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/facilities_pict2_1.png" width="220" height="162">
          <figcaption>除草ロボット</figcaption>
        </figure></li>
        <li><figure>
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/facilities_pict2_2.png" width="220" height="162">
          <figcaption>お風呂掃除ロボット</figcaption>
        </figure></li>
        <li><figure>
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/facilities_pict2_3.png" width="220" height="162">
          <figcaption>新エネルギー</figcaption>
        </figure></li>
        <li><figure>
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/facilities_pict2_4.png" width="220" height="162">
          <figcaption>3Dアーカイビング</figcaption>
        </figure></li>
        <li><figure>
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/facilities_pict2_5.png" width="220" height="162">
          <figcaption>リハビリテーション室</figcaption>
        </figure></li>
        <li><figure>
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/facilities_pict2_6.png" width="220" height="162">
          <figcaption>ポータブルトイレ</figcaption>
        </figure></li>
        <li><figure>
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/facilities_pict2_7.png" width="220" height="162">
          <figcaption>腕回しリハビリロボット</figcaption>
        </figure></li>
        <li><figure>
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/facilities_pict2_8.png" width="220" height="162">
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
	</div><!--/.fieldWrap -->
</section>

<section id="stage4" class="stageBase">
	<div class="fieldWrap">
<!-- mainArea -->
<div id="mainArea"><div id="mainAreaInner">
  <!-- mainContentsArea -->
  <div id="mainContentsArea" class="printFacilities">
    <header class="title1Area" id="pageFacilities">
      <h1 id="title1"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/hospitalized_title1.gif" width="139" height="33"  alt="研究情報"></h1>
      <p id="title1Eng"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/facilities_title1_eng.gif" width="46" height="11"  alt="facilities"></p>
    </header>
    <section class="contentsMain cType2">
      <h2 class="title2_1 pb5"></h2>
      <ul class="facilitiesList listBlock clearfix">
        <li><figure>
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/facilities_pict1_1.png" width="220" height="162">
          <figcaption>市川貴大</figcaption>

        </figure></li>
        <li><figure>
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/facilities_pict1_2.png" width="220" height="162">
          <figcaption>小沢　怜</figcaption>
        </figure></li>
        <li><figure>
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/facilities_pict1_3.png" width="220" height="162">
          <figcaption>佐藤　慧一</figcaption>
        </figure></li>
        <li><figure>
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/facilities_pict1_4.png" width="220" height="162">
          <figcaption>鈴木　健市</figcaption>
        </figure></li>
        <li><figure>
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/facilities_pict1_5.png" width="220" height="162">
          <figcaption>竹下　和宏</figcaption>
        </figure></li>
        <li><figure>
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/facilities_pict1_6.png" width="220" height="162">
          <figcaption>塚本　渉</figcaption>
        </figure></li>
        <li><figure>
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/facilities_pict1_7.png" width="220" height="162">
          <figcaption>寺井　彩花</figcaption>
        </figure></li>
        <li><figure>
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/facilities_pict1_8.png" width="220" height="162">
          <figcaption>中村　栄太</figcaption>
        </figure></li>
      </ul>
    </section>
    <section class="contentsMain cType2">
      <h2 class="title2_1 pb5"></h2>
      <ul class="facilitiesList listBlock clearfix">
        <li><figure>
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/facilities_pict2_1.png" width="220" height="162">
          <figcaption>一瀬　浩輝</figcaption>
        </figure></li>
        <li><figure>
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/facilities_pict2_2.png" width="220" height="162">
          <figcaption>井手　美優</figcaption>
        </figure></li>
        <li><figure>
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/facilities_pict2_3.png" width="220" height="162">
          <figcaption>鈴木　悠太</figcaption>
        </figure></li>
        <li><figure>
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/facilities_pict2_4.png" width="220" height="162">
          <figcaption>増渕　勝也</figcaption>
        </figure></li>
        <li><figure>
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/facilities_pict2_5.png" width="220" height="162">
          <figcaption>森 真沙人</figcaption>
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
	</div><!--/.fieldWrap -->
</section>

<section id="stage5" class="stageBase">
	<div class="fieldWrap">
<!-- mainArea -->
<div id="mainArea"><div id="mainAreaInner">
  <!-- mainContentsArea -->
  <div id="mainContentsArea" class="printMedical">
    <header class="title1Area" id="pageMedical">
      <h1 id="title1"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/medical_title1.gif" width="197" height="33"  alt="研究のご案内"></h1>
      <p id="title1Eng"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/medical_title1_eng.gif" width="44" height="11"  alt="medical"></p>
    </header>
    <p id="medicalMainPict" class="imgBlock"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/medical_pict1.jpg" width="560" height="189"  alt="イメージ"></p>
    <section class="contentsMain cType1">



            <div class="hospitalizedListBox mt35">
        <dl>

                <dt>Award：受賞・受給</dt>
          <dd>日本ロボット学会　フェロー</dd>
                    <dd><a href="http://www.rsj.or.jp/about/fellow/" target="_blank"><span>詳しくはこちらをご覧ください</span></a></dd>

        </dl>
        <dl class="type2">
          <dt>Journal & Book</dt>
          <dd>Yutaka Murakami, Yuko Ohno, Kosei Adachi, Nobuhiro Ogasawara, Hiroshi Kobayashi，“Evaluating the clinical applicability of a wearable lift assist device from a nursing perspective”，Journal of Nursing Science and Engineering，Vol.3，No.2, pp.101-108, 2016．</dd>
          <dd>小林宏，“小児リハビリテーションへのロボット技術の応用”，リハビリテーション医学（The Japanese Journal of Rehabilitation Medicine），Vol.53，No.5, pp.385-391, 2016．</dd>
        </dl>
                <dl class="type2">
          <dt>Oral Presentation in Japanese：口頭発表</dt>
          <dd>小林宏，佐藤慧一，“装着型腕保持装置の開発と評価”，ロボティクス・メカトロニクス講演会2016 講演概要集，2A1-13b2，2016.6.8-11 (横浜)．</dd>
          <dd>髙橋夏樹，小林宏，森下光，“外部からの空気供給を必要としない腰補助用マッスルスーツの開発”，ロボティクス・メカトロニクス講演会2016 講演概要集，1P1-14a5，2016.6.8-11 (横浜)．</dd>
                    <dd>小林宏，菅田昌宏，小川貴文，吉田哲，“ウェアラブルパワーアシスト装置の建設作業への適用”，第16回建設ロボットシンポジウム，O2-5，2016.9.1-2 (中央大学)．</dd>
        </dl>
                  <dl class="type2">
          <dt>Magazine：雑誌・解説</dt>
          <dd>小林宏，“着用型筋力補助装置「マッスルスーツ(R)」”，エレクトロニクス実装学会誌，Vol.19，No.6, pp.384-388, 2016．</dd>
          <dd>小林宏，“「マッスルスーツ(R)」の開発経緯と技術概要”，製材機械技術学会誌，Vol.25，No.3, pp.31-36, 2016．</dd>
                    <dd>小林宏，“空気圧ゴムアクチュエータを用いたマッスルスーツ(R)”，ソフトアクチュエータの材料・構成・応用技術（Ｓ＆Ｔ出版），pp.260-266, 2016．</dd>
        </dl>



      </div>

    </section>

    <p class="contentsTop"><a href="#pageMedical"><span>「ご案内」の最初へ戻る</span></a></p>
  </div>
  <!-- /mainContentsArea -->
</div></div>
<!-- /mainArea -->
<!-- visualArea -->
<div id="visualArea">
<div id="backimgmedical" class="slide-left"></div>
</div>
<!-- /visualArea -->
    <script>
      $(document).ready(function() {
        $(window).fadeThis({
          speed: 2000,
        });
      });
    </script>
	</div><!--/.fieldWrap -->
</section>


</div><!--/#container-->
</body>
</html>