<?php include 'head.php';
$top = 'active'; ?>
<title>影视排行榜-百度风云榜-搜狗影视榜-<?php echo $mkcms_seoname; ?></title>
<meta name="keywords" content="影视排行榜,<?php echo $mkcms_keywords; ?>">
<meta name="description" content="影视排行榜,<?php echo $mkcms_description; ?>">
<meta name="referrer" content="same-origin">
<style type="text/css">
	.stui-vodlist__thumb {
		padding-top: 60%
	}

	.stui-vodlist__text li a {
		padding: 5px 0 5px
	}
</style>

<body>
	<?php include 'header.php'; ?>
	<div class="container">
		<div class="row">
			<div class="stui-pannel stui-pannel-bg clearfix">
				<div class="stui-pannel-box">
					<div class="stui-pannel_hd">
						<div class="stui-pannel__head active bottom-line clearfix">
							<h3 class="title"><svg class="iconm" aria-hidden="true">
									<use xlink:href="#icon-remen"></use>
								</svg>影视风云榜</h3>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-3 col-sm-2 col-xs-2">
					<div class="stui-pannel__head active bottom-line clearfix">
						<a class="more text-muted pull-right" href="movie.html">更多 <i class="icon iconfont icon-more"></i></a>
						<h3 class="title">电影</h3>
					</div>
					<div class="stui-pannel_bd clearfix">
						<ul class="stui-vodlist__text active col-pd clearfix" style="box-shadow: 0 2px 10px rgba(0,0,0,.05);">
							<?php
							include './data/top.php';
							$i = 0;
							foreach ($bdArr1['dy']['title'] as $k => $title) {
								if ($i < 16) {
									$bdurl = $bdArr1['dy']['url'][$k];
									$bdurl = str_replace("http://www.360kan.com", "", $bdurl);
									$bdurl = str_replace("https://www.360kan.com", "", $bdurl);
									$bdnum = $i;
									$topimg = $bdArr1['dy']['img'][0];
									$topnum = $bdArr1['dy']['top'][$k];
									$chuandi = '/vod' . $bdurl;
									if ($i < 1) {
										echo '<li class="padding-0">
												<div class="stui-vodlist__box">
													<a class="stui-vodlist__thumb lazyload img-shadow" href="' . $chuandi . '" title="' . $title . '" alt="' . $title . '" data-original="' . $topimg . '" style="padding-top:60%;">
														<span class="play hidden-xs"></span>
														<span class="pic-text text-center">' . $title . '</span>
														<span class="pic-tag pic-tag-h">Top</span>
														<span class="pic-tag pic-tag-k">' . $topnum . '℃</span>
													</a>
												</div>
											</li>';
									} else {
							?>
										<li class="col-xs-1 padding-0">
											<a class="text-overflow" href="<?php echo $chuandi; ?>" title="<?php echo $title; ?>">
												<span class='am-badge am-round pull-left'><?php echo $bdnum; ?></span>
												<span class="text-muted pull-right"><?php echo $topnum; ?> ℃</span>
												<em class='text-red'></em>&nbsp;<?php echo $title; ?>
											</a>
										</li>
							<?php }
									$i++;
								}
							} ?>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 col-md-3 col-sm-2 col-xs-2">
					<div class="stui-pannel__head active bottom-line clearfix">
						<a class="more text-muted pull-right" href="tv.html">更多 <i class="icon iconfont icon-more"></i></a>
						<h3 class="title">电视</h3>
					</div>
					<div class="stui-pannel_bd clearfix">
						<ul class="stui-vodlist__text active col-pd clearfix" style="box-shadow: 0 2px 10px rgba(0,0,0,.05);">
							<?php
							include './data/top.php';
							$i = 0;
							foreach ($bdArr2['tv']['title'] as $k => $title) {
								if ($i < 16) {
									$bdurl = $bdArr2['tv']['url'][$k];
									$bdurl = str_replace("http://www.360kan.com", "", $bdurl);
									$bdurl = str_replace("https://www.360kan.com", "", $bdurl);
									$bdnum = $i;
									$topimg = $bdArr2['tv']['img'][0];
									$topnum = $bdArr2['tv']['top'][$k];
									$chuandi = '/vod' . $bdurl;
									if ($i < 1) {
										echo '<li class="padding-0">
												<div class="stui-vodlist__box">
													<a class="stui-vodlist__thumb lazyload img-shadow" href="' . $chuandi . '" title="' . $title . '" alt="' . $title . '" data-original="' . $topimg . '" style="padding-top:60%;">
														<span class="play hidden-xs"></span>
														<span class="pic-text text-center">' . $title . '</span>
														<span class="pic-tag pic-tag-h">Top</span>
														<span class="pic-tag pic-tag-k">' . $topnum . '℃</span>
													</a>
												</div>
											</li>';
									} else {
							?>
										<li class="col-xs-1 padding-0">
											<a class="text-overflow" href="<?php echo $chuandi; ?>" title="<?php echo $title; ?>">
												<span class='am-badge am-round pull-left'><?php echo $bdnum; ?></span>
												<span class="text-muted pull-right"><?php echo $topnum; ?> ℃</span>
												<em class='text-red'></em>&nbsp;<?php echo $title; ?>
											</a>
										</li>
							<?php }
									$i++;
								}
							} ?>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 col-md-3 col-sm-2 col-xs-2">
					<div class="stui-pannel__head active bottom-line clearfix">
						<a class="more text-muted pull-right" href="zongyi.html">更多 <i class="icon iconfont icon-more"></i></a>
						<h3 class="title">综艺</h3>
					</div>
					<div class="stui-pannel_bd clearfix">
						<ul class="stui-vodlist__text active col-pd clearfix" style="box-shadow: 0 2px 10px rgba(0,0,0,.05);">
							<?php
							include './data/top.php';
							$i = 0;
							foreach ($bdArr3['zy']['title'] as $k => $title) {
								if ($i < 16) {
									$bdurl = $bdArr3['zy']['url'][$k];
									$bdurl = str_replace("http://www.360kan.com", "", $bdurl);
									$bdurl = str_replace("https://www.360kan.com", "", $bdurl);
									$bdnum = $i;
									$topimg = $bdArr3['zy']['img'][0];
									$topnum = $bdArr3['zy']['top'][$k];
									$chuandi = '/vod' . $bdurl;
									if ($i < 1) {
										echo '<li class="padding-0">
												<div class="stui-vodlist__box">
													<a class="stui-vodlist__thumb lazyload img-shadow" href="' . $chuandi . '" title="' . $title . '" alt="' . $title . '" data-original="' . $topimg . '" style="padding-top:60%;">
														<span class="play hidden-xs"></span>
														<span class="pic-text text-center">' . $title . '</span>
														<span class="pic-tag pic-tag-h">Top</span>
														<span class="pic-tag pic-tag-k">' . $topnum . '℃</span>
													</a>
												</div>
											</li>';
									} else {
							?>
										<li class="col-xs-1 padding-0">
											<a class="text-overflow" href="<?php echo $chuandi; ?>" title="<?php echo $title; ?>">
												<span class='am-badge am-round pull-left'><?php echo $bdnum; ?></span>
												<span class="text-muted pull-right"><?php echo $topnum; ?> ℃</span>
												<em class='text-red'></em>&nbsp;<?php echo $title; ?>
											</a>
										</li>
							<?php }
									$i++;
								}
							} ?>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 col-md-3 col-sm-2 col-xs-2">
					<div class="stui-pannel__head active bottom-line clearfix">
						<a class="more text-muted pull-right" href="dongman.html">更多 <i class="icon iconfont icon-more"></i></a>
						<h3 class="title">动漫</h3>
					</div>
					<div class="stui-pannel_bd clearfix">
						<ul class="stui-vodlist__text active col-pd clearfix" style="box-shadow: 0 2px 10px rgba(0,0,0,.05);">
							<?php
							$i = 0;
							include './data/top.php';
							foreach ($bdArr4['dm']['title'] as $k => $title) {
								if ($i < 16) {
									$bdurl = $bdArr4['dm']['url'][$k];
									$bdurl = str_replace("http://www.360kan.com", "", $bdurl);
									$bdurl = str_replace("https://www.360kan.com", "", $bdurl);
									$bdnum = $i;
									$topimg = $bdArr4['dm']['img'][0];
									$topnum = $bdArr4['dm']['top'][$k];
									$chuandi = '/vod' . $bdurl;
									if ($i < 1) {
										echo '<li class="padding-0">
												<div class="stui-vodlist__box">
													<a class="stui-vodlist__thumb lazyload img-shadow" href="' . $chuandi . '" title="' . $title . '" alt="' . $title . '" data-original="' . $topimg . '" style="padding-top:60%;">
														<span class="play hidden-xs"></span>
														<span class="pic-text text-center">' . $title . '</span>
														<span class="pic-tag pic-tag-h">Top</span>
														<span class="pic-tag pic-tag-k">' . $topnum . '℃</span>
													</a>
												</div>
											</li>';
									} else {
							?>
										<li class="col-xs-1 padding-0">
											<a class="text-overflow" href="<?php echo $chuandi; ?>" title="<?php echo $title; ?>">
												<span class='am-badge am-round pull-left'><?php echo $bdnum; ?></span>
												<span class="text-muted pull-right"><?php echo $topnum; ?> ℃</span>
												<em class='text-red'></em>&nbsp;<?php echo $title; ?>
											</a>
										</li>
							<?php }
									$i++;
								}
							} ?>
						</ul>
					</div>
				</div>
			</div>
			<div class="stui-pannel stui-pannel-bg clearfix">
				<div class="stui-pannel-box">
					<div class="stui-pannel_hd">
						<div class="stui-pannel__head active bottom-line clearfix">
							<h3 class="title">今日电影热搜排行榜</h3>
						</div>
					</div>
				</div>
				<ul class="wprm">
					<b><?php
						$queryURL = "http://top.baidu.com/buzz?b=26&c=1&fr=topcategory_c1";
						$useragent = "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)";
						$header = array("Accept-Language: zh-cn", "Connection: Keep-Alive", "Cache-Control: no-cache");
						$ch = curl_init();
						curl_setopt($ch, CURLOPT_REFERER, $queryURL);
						curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
						curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
						curl_setopt($ch, CURLOPT_URL, $queryURL);
						curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
						curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 6);
						$result = curl_exec($ch);
						$result = mb_convert_encoding($result, "utf-8", "gb2312");
						$result = str_replace("/ct/", "/play?make=dongman&id=", $result);
						$pattern = "#<a class=\"list-title\" target=\"_blank\" href=\"(.*?)\" href_top=\"(.*?)\">(.*?)</a>#";
						preg_match_all($pattern, $result, $matches);
						$xh = 0;
						while ($xh < 49) { ?>
							<li><a href="/seacher-<?php echo $matches[3][$xh]; ?>.html" onclick="document.getElementById('searchs').value='<?php echo $matches[3][$xh]; ?>'" title="<?php echo $matches[3][$xh]; ?>"><?php echo $matches[3][$xh]; ?></a></li>
						<?php $xh = $xh + 1;
						} ?>
					</b>
				</ul>
			</div>
			<div class="stui-pannel stui-pannel-bg clearfix">
				<div class="stui-pannel-box">
					<div class="stui-pannel_hd">
						<div class="stui-pannel__head active bottom-line clearfix">
							<h3 class="title">今日电视剧热搜排行榜</h3>
						</div>
					</div>
				</div>
				<ul class="wprm">
					<b><?php
						$queryURL = "http://top.baidu.com/buzz?b=4&c=2&fr=topcategory_c2";
						$useragent = "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)";
						$header = array("Accept-Language: zh-cn", "Connection: Keep-Alive", "Cache-Control: no-cache");
						$ch = curl_init();
						curl_setopt($ch, CURLOPT_REFERER, $queryURL);
						curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
						curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
						curl_setopt($ch, CURLOPT_URL, $queryURL);
						curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
						curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 6);
						$result = curl_exec($ch);
						$result = mb_convert_encoding($result, "utf-8", "gb2312");
						$result = str_replace("/ct/", "/play?make=dongman&id=", $result);
						$pattern = "#<a class=\"list-title\" target=\"_blank\" href=\"(.*?)\" href_top=\"(.*?)\">(.*?)</a>#";
						preg_match_all($pattern, $result, $matches);
						$xh = 0;
						while ($xh < 49) { ?>
							<li><a href="/seacher-<?php echo $matches[3][$xh]; ?>.html" onclick="document.getElementById('searchs').value='<?php echo $matches[3][$xh]; ?>'" title="<?php echo $matches[3][$xh]; ?>"><?php echo $matches[3][$xh]; ?></a></li>
						<?php $xh = $xh + 1;
						} ?>
					</b>
				</ul>
			</div>
			<div class="stui-pannel stui-pannel-bg clearfix">
				<div class="stui-pannel-box">
					<div class="stui-pannel_hd">
						<div class="stui-pannel__head active bottom-line clearfix">
							<h3 class="title">今日综艺热搜排行榜</h3>
						</div>
					</div>
				</div>
				<ul class="wprm">
					<b><?php
						$queryURL = "http://top.baidu.com/buzz?b=19&c=3&fr=topcategory_c3";
						$useragent = "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)";
						$header = array("Accept-Language: zh-cn", "Connection: Keep-Alive", "Cache-Control: no-cache");
						$ch = curl_init();
						curl_setopt($ch, CURLOPT_REFERER, $queryURL);
						curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
						curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
						curl_setopt($ch, CURLOPT_URL, $queryURL);
						curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
						curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 6);
						$result = curl_exec($ch);
						$result = mb_convert_encoding($result, "utf-8", "gb2312");
						$result = str_replace("/ct/", "/play?make=dongman&id=", $result);
						$pattern = "#<a class=\"list-title\" target=\"_blank\" href=\"(.*?)\" href_top=\"(.*?)\">(.*?)</a>#";
						preg_match_all($pattern, $result, $matches);
						$xh = 0;
						while ($xh < 49) { ?>
							<li><a href="/seacher-<?php echo $matches[3][$xh]; ?>.html" onclick="document.getElementById('searchs').value='<?php echo $matches[3][$xh]; ?>'" title="<?php echo $matches[3][$xh]; ?>"><?php echo $matches[3][$xh]; ?></a></li>
						<?php $xh = $xh + 1;
						} ?>
					</b>
				</ul>
			</div>
			<div class="stui-pannel stui-pannel-bg clearfix">
				<div class="stui-pannel-box">
					<div class="stui-pannel_hd">
						<div class="stui-pannel__head active bottom-line clearfix">
							<h3 class="title">今日动漫热搜排行榜</h3>
						</div>
					</div>
				</div>
				<ul class="wprm">
					<b><?php
						$queryURL = "http://top.baidu.com/buzz?b=23&c=5&fr=topcategory_c5";
						$useragent = "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)";
						$header = array("Accept-Language: zh-cn", "Connection: Keep-Alive", "Cache-Control: no-cache");
						$ch = curl_init();
						curl_setopt($ch, CURLOPT_REFERER, $queryURL);
						curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
						curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
						curl_setopt($ch, CURLOPT_URL, $queryURL);
						curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
						curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 6);
						$result = curl_exec($ch);
						$result = mb_convert_encoding($result, "utf-8", "gb2312");
						$result = str_replace("/ct/", "/play?make=dongman&id=", $result);
						$pattern = "#<a class=\"list-title\" target=\"_blank\" href=\"(.*?)\" href_top=\"(.*?)\">(.*?)</a>#";
						preg_match_all($pattern, $result, $matches);
						$xh = 0;
						while ($xh < 49) { ?>
							<li><a href="/seacher-<?php echo $matches[3][$xh]; ?>.html" onclick="document.getElementById('searchs').value='<?php echo $matches[3][$xh]; ?>'" title="<?php echo $matches[3][$xh]; ?>"><?php echo $matches[3][$xh]; ?></a></li>
						<?php $xh = $xh + 1;
						} ?>
					</b>
				</ul>
			</div>
		</div>
	</div>
	</div>
	<?php include 'footer.php'; ?>