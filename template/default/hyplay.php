<?php
include 'head.php';
$hy = 'active';
ini_set('user_agent', 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.2; SV1; .NET CLR 1.1.4322)');
$id = $_GET['id'];
if (!$id) {
	exit();
}
$yurl = 'https://www.huya.com/' . $id;
$uri = fileget2($yurl, 5);
$lname = '#<h1 id="J_roomTitle" title="(.*?)">(.*?)</h1>#';
$aname = '#<img id="avatar-img" src="(.*?)" alt="(.*?)">#';
$cname = '#<em id="live-count" title="人气值">(.*?)</em>#';
preg_match_all($lname, $uri, $xarr);
preg_match_all($aname, $uri, $xarr1);
preg_match_all($cname, $uri, $xarr2);
$xname = $xarr[2];
$bname = $xarr1[2];
$rname = $xarr2[1];
$dd = $xname[0];
$ee = $bname[0];
$hh = $rname[0];
?>
<?php
ini_set('user_agent', 'Mozilla/5.0 (Linux; U; Android 2.3.7; en-us; Nexus One Build/FRF91) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1');
$id = $_GET['id'];
if (!$id) {
	exit();
}
$murl = 'https://www.huya.com/' . $id;
$play = 'http://liveshare.huya.com/iframe/' . $id;
$muri = file_get_contents($murl);
$murlreg = '#var liveLineUrl = "(.*?)"#';
preg_match_all($murlreg, $muri, $murlcon);
$m3u8 = $murlcon[1][0];
$m3u8 = str_replace('tx.hls.huya.com/src', 'bd.flv.huya.com/src', $m3u8);
$m3u8 = str_replace('al.hls.huya.com/src', 'bd.flv.huya.com/src', $m3u8);
$m3u8 = str_replace('hw.hls.huya.com/src', 'bd.flv.huya.com/src', $m3u8);
$m3u8 = str_replace('bd.hls.huya.com/src', 'bd.flv.huya.com/src', $m3u8);
$m3u8 = str_replace('js.hls.huya.com/src', 'bd.flv.huya.com/src', $m3u8);
$m3u8 = str_replace('txdirect.hls.huya.com/src', 'bd.flv.huya.com/src', $m3u8);
$m3u8 = str_replace('aldirect.hls.huya.com/src', 'bd.flv.huya.com/src', $m3u8);
$m3u8 = str_replace('tx.hls.huya.com/huyalive', 'bd.flv.huya.com/src', $m3u8);
$m3u8 = str_replace('al.hls.huya.com/huyalive', 'bd.flv.huya.com/src', $m3u8);
$m3u8 = str_replace('hw.hls.huya.com/huyalive', 'bd.flv.huya.com/src', $m3u8);
$m3u8 = str_replace('bd.hls.huya.com/huyalive', 'bd.flv.huya.com/src', $m3u8);
$m3u8 = str_replace('txdirect.hls.huya.com/huyalive', 'bd.flv.huya.com/src', $m3u8);
$m3u8 = str_replace('aldirect.hls.huya.com/huyalive', 'bd.flv.huya.com/src', $m3u8);
$m3u8 = str_replace('js.hls.huya.com/huyalive', 'bd.flv.huya.com/src', $m3u8);
?>
<title><?php echo $dd; ?>-<?php echo $ee; ?>-美女跳舞视频-虎牙直播-<?php echo $mkcms_seoname; ?></title>
<meta name="keywords" content="<?php echo $dd; ?>,<?php echo $ee; ?>,<?php echo $mkcms_keywords; ?>">
<meta name="description" content="<?php echo $dd; ?>-<?php echo $ee; ?>,<?php echo $mkcms_description; ?>">
<style type="text/css">
	#timer {
		background: rgba(0, 0, 0, 0.59);
		padding: 5px;
		text-align: center;
		width: 30px;
		position: absolute;
		top: 5%;
		right: 2%;
		color: #fff;
		font-size: 16px;
		border-radius: 50%;
		height: 30px;
		line-height: 20px
	}

	#xiang {
		background: rgba(177, 13, 13, 0.87);
		padding: 5px;
		text-align: center;
		width: auto;
		position: absolute;
		bottom: 2%;
		right: 1%;
		color: #fff;
		font-size: 16px;
		border-radius: 10px;
		height: 20px;
		line-height: 9px
	}

	#ys,
	.jkbtn {
		border: 1px solid #FF9900;
		background-color: #FF9900;
		color: #FFFFFF;
	}

	.stui-player__video {
		margin-bottom: 10px;
	}
</style>
</head>

<body class="video-play-page">
	<?php include 'header.php'; ?>
	<div class="container">
		<div class="row">
			<div class="col-lg-wide-75 col-xs-1">
				<div class="stui-player__item clearfix">
					<div class="stui-player__video embed-responsive embed-responsive-16by9 clearfix">
						<div id="shiping_box"></div>
						<script type="text/javascript">
							function run() {
								var s = document.getElementById("timer");
								if (!s) {
									return false;
								} else {
									s.innerHTML = s.innerHTML * 1 - 1;
								}
							}
							window.setInterval("run();", 1000);
							$('#shiping_box').html('<div style="text-align:center;width:100%;"><?php echo $mkcms_ad1; ?></div><div id="timer"><?php echo $mkcms_miaoshu; ?></div>');
							//设置延时函数
							function adsUp() {
								$("#shiping_box").html('<iframe id="video" src="<?php echo $play; ?>"  allowfullscreen="true" allowtransparency="true" style="width:100%;border:none"></iframe>');
							}
							//五秒钟后自动收起
							var t = setTimeout(adsUp, <?php echo $mkcms_miaoshu * 1000; ?>);
						</script>
					</div>
					<div class="stui-player__detail detail" id="dianshijuid">
						<ul class="more-btn">
							<li><a href="javascript:void(0)" onclick="location.reload()" class="btn btn-sm btn-default">刷新</a></li>
						</ul>
						<h1 class="title" id="xuji"><a title="<?php echo $dd; ?><?php echo $ee; ?>"><?php echo $dd; ?>-<?php echo $ee; ?></a><span class="js"></span></h1>
						<span class="text-muted">主播：</span><?php echo $ee; ?><span class="split-line"></span>
						<span class="text-muted">人气指数：</span><?php echo $hh; ?>
					</div>
				</div><!-- 播放器-->
				<div class="stui-pannel stui-pannel-bg clearfix">
					<div class="stui-pannel-box">
						<div class="stui-pannel_hd">
							<div class="stui-pannel__head bottom-line active clearfix">
								<h3 class="title">
									<svg class="iconm" aria-hidden="true">
										<use xlink:href="#icon-like"></use>
									</svg>
									猜你喜欢
								</h3>
							</div>
						</div>
						<div class="stui-pannel_bd">
							<ul class="stui-vodlist__bd clearfix">
								<?php include 'data/gxlike.php'; ?>
							</ul>
						</div>
					</div>
				</div><!-- 猜你喜欢-->
			</div>
			<div class="col-lg-wide-25 col-xs-1 stui-pannel-side hidden-sm hidden-xs">
				<div class="stui-pannel stui-pannel-bg clearfix">
					<div class="stui-pannel-box">
						<div class="stui-pannel_hd">
							<div class="stui-pannel__head active bottom-line clearfix">
								<h3 class="title"><svg class="iconm" aria-hidden="true">
										<use xlink:href="#icon-bang"></use>
									</svg>高清美女排行榜</h3>
							</div>
						</div>
						<div class="stui-pannel_bd clearfix">
							<ul class="stui-vodlist__text active col-pd clearfix">
								<?php
								$url0 = 'https://www.huya.com/cache.php?m=LiveList&do=getTmpLiveByPage&gameId=2168&tmpId=2609&page=1';
								$data = json_decode(file_get_contents($url0), true);
								for ($i = 0; $i < 25; $i++) {
									$num = $i + 1;
									$number = $data['data']['datas'][$i]['totalCount'];
									$length = strlen($number);
									if ($length > 4) {
										$str = substr_replace(strstr($number, substr($number, -3), ' '), '.', -1, 0) . "万";
									} else {
										$str = $number;
									}
									$xvau = $data['data']['datas'][$i]['nick'];
									$do = "hyplay_" . $data['data']['datas'][$i]['profileRoom'] . ".html";
									echo "<li class='col-xs-1 padding-0'><a class='text-overflow' href='$do' title='$xvau'><span class='am-badge am-round pull-left'>$num</span><span class='text-muted pull-right'>$str</span><em class='text-red'></em>&nbsp;$xvau</a></li>";
								} ?>
							</ul>
						</div>
					</div>
				</div>
				<div class="stui-pannel stui-pannel-bg clearfix">
					<div class="stui-pannel-box clearfix">
						<div class="col-pd text-center">
							<?php echo $mkcms_ad22; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="template/default/js/history.js"></script>
	<script type="text/javascript">
		var vod_name = '<?php echo $dd; ?>-<?php echo $ee; ?>',
			vod_url = window.location.href,
			vod_part = '1';
	</script>
	<?php include 'footer.php'; ?>