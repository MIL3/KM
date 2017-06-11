<?php get_header(); ?>
<body>
<div id="contents" class="clearfix">
	<!-- loadingArea -->
	<div id="loadingArea"><div id="loadingAreaInner">
		<p>Loading</p>
	</div></div>
	<!-- /loadingArea -->

	<div id="homeArea"><div id="homeAreaInner">
		<div id="homeAreaBox">
			<div id="homeLinks">
				<h1 id="homeTitle1">
					<p id="logoMark">
					<a href="http://sohmatestsite.ciao.jp/test2/news/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/top_menu1.png" width="48" height="75" alt="お知らせ" class=""></a>
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/logo_mark1.png" width="101" height="101" alt="*" id="mark1">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/logo_mark2.png" width="63" height="55" alt="*" id="mark2">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/logo_mark3.png" width="95" height="95" alt="*" id="mark3">
					</p>
					<p id="logoTypo"><a href="/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/logo_typo.png" width="509" height="110" alt="小林研究室 | 熊本市の整形外科・リハビリテーション科・リウマチ科・形成外科"></a></p>
				</h1>
				<nav id="homeMenu">
					<ul class="listBlock">
						<li id=""><a href="<?php echo get_permalink( get_page_by_path( 'news' )->ID ); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/top_menu1.png" width="48" height="75" alt="お知らせ" class=""></a></li>
						<li id="menu2"><a href="<?php echo get_permalink( get_page_by_path( 'information' )->ID ); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/top_menu2.png" width="72" height="76" alt="ご案内" class=""></a></li>
						<li id="menu3"><a href="<?php echo get_permalink( get_page_by_path( 'facility' )->ID ); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/top_menu3.png" width="51" height="76" alt="施設情報" class=""></a></li>
						<li id="menu4"><a href="<?php echo get_permalink( get_page_by_path( 'medical' )->ID ); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/top_menu4.png" width="74" height="76" alt="診療のご案内" class=""></a></li>
						<li id="menu5"><a href="<?php echo get_permalink( get_page_by_path( 'hospitalized' )->ID ); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/top_menu5.png" width="106" height="80" alt="入院・面会について" class=""></a></li>

						<li id="menu6"><a href="/access/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/top_menu7.png" width="69" height="77" alt="交通アクセス" class=""></a></li>
					</ul>
				</nav>
			</div>
			<div id="newsArea"><div id="newsAreaInner">
				<h2 id="newsTitle2"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/top_title2_news.png" width="36" height="8" alt="news:"></h2>
				<ul id="newsList">
					<li><a href="/news/"><span class="date">2016年10月01日</span>  インフルエンザ予防接種のお知らせ</a></li>
				</ul>
			</div></div>
		</div>
		<div id="homeProfile"><div id="homeProfileInner">
			<ul id="tabLangHome" class="listBlock clearfix">
				<li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/button_lang_jp_off.png" width="82" height="37" alt="Japanese"></li>
				<li><a href="" class="nonPjax"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/button_lang_eng.png" width="81" height="37" alt="English" class=""></a></li>
				<li><a href="" class="nonPjax"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/button_lang_deu.png" width="80" height="37" alt="German" class=""></a></li>
			</ul>
			<ul id="homeProfileList" class="listBlock">
				<li><span class="profileTitles">〒</span>125-0051 東京都葛飾区新宿6-3-1&nbsp;/&nbsp;</li>
				<li><span class="profileTitles">TEL : </span>03-5876-1718<br></li>
							</ul>
		</div></div>
		<p id="homeHighlight"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/top_highlight.png" width="947" height="116" alt="*"></p>
		<p id="homeBg"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/top_bg.gif" width="58%" height="auto" alt="外観イメージ"></p>
		<footer id="homeFooter">
			<p id="homeCopyright"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/top_copyright.gif" width="12" height="147" alt="&copy; kobalab "></p>
		</footer>
	</div></div>
</div>
<?php get_footer(); ?>
