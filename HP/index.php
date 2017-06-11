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
					<a href="<?php echo home_url() ?>"></a>
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/logo_mark1.png" width="101" height="101" alt="*" id="mark1">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/logo_mark2.png" width="63" height="55" alt="*" id="mark2">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/logo_mark3.png" width="95" height="95" alt="*" id="mark3">
					</p>
					<p id="logoTypo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/logo_typo.png" alt="小林研究室"></p>
				</h1>
				<nav id="homeMenu">
					<ul class="listBlock">
						<li id=""><a href="<?php echo get_permalink( get_page_by_path( 'news' )->ID ); ?>">
							<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/newsicon.png" alt="">
							<p class="menujapan">お知らせ</p>
						</a></li>
						<li id="menu2"><a href="<?php echo get_permalink( get_page_by_path( 'information' )->ID ); ?>">
							<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/kenkyuicon.png" alt="">
							<p class="menujapan">研究室案内</p>
						</a></li>
						<li id="menu3"><a href="<?php echo get_permalink( get_page_by_path( 'facilities' )->ID ); ?>">
							<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/infoicon.png" alt="">
							<p class="menujapan">研究情報</p>
						</a></li>
						<li id="menu4"><a href="<?php echo get_permalink( get_page_by_path( 'medical' )->ID ); ?>">
							<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/jissekiicon.png" alt="">
							<p class="menujapan">研究実績</p>
						</a></li>
						<li id="menu5"><a href="<?php echo get_permalink( get_page_by_path( 'hospitalized' )->ID ); ?>">
							<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/membericon.png" alt="">
							<p class="menujapan">研究メンバー</p>
						</a></li>
					</ul>
				</nav>
			</div>
			<div id="newsArea"><div id="newsAreaInner">
				<h2 id="newsTitle2"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/top_title2_news.png" width="36" height="8" alt="news:"></h2>
				<ul id="newsList">
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
					<li><a href="<?php echo get_permalink( get_page_by_path( 'news' )->ID ); ?>"><span class="date"><?php the_time('Y年m月d日'); ?></span><?php the_title(); ?></a></li><br>
					<?php endwhile; ?>
	                			<?php else : ?>
	                			<div class="post">
				                </div>
				                <?php endif; ?>
				</ul>
				<div id="homeProfile"><div id="homeProfileInner">
					<ul id="tabLangHome" class="listBlock clearfix">
						<li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/button_lang_jp_off.png" width="82" height="37" alt="Japanese"></li>
						<li><a href="" class="nonPjax"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/button_lang_eng.png" width="81" height="37" alt="English" class=""></a></li>
					</ul>
					<ul id="homeProfileList" class="listBlock">
						<li><span class="profileTitles">〒</span>125-0051 東京都葛飾区新宿6-3-1&nbsp;/&nbsp;</li>
						<li><span class="profileTitles">TEL : </span>03-5876-1718内線1555<br></li>
					</ul>
				</div></div>
			</div></div>
		</div>
		<p id="homeBg"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/top_bg.gif" width="58%" height="auto" alt="外観イメージ"></p>
		<footer id="homeFooter">
			<p id="homeCopyright"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/top_copyright.gif" width="12" height="147" alt="&copy; kobalab "></p>
		</footer>
	</div></div>
</div>
<?php get_footer(); ?>
