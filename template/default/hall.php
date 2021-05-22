<?php $dt = 'active'; ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width,initial-scale=1.0" />
	<meta name="format-detection" content="telephone=no,email=no,date=no,address=no">
	<title>大厅</title>
	<link rel="stylesheet" type="text/css" href="/template/default/css/aui.css" />
	<link rel="stylesheet" type="text/css" href="/template/default/css/aui-hall.css" />
	<link rel="stylesheet" type="text/css" href="/template/default/css/phone_style.css" />
	<style>
		body {
			background-repeat: repeat;
			background-size: inherit;
			background-attachment: fixed;
			background-position: center center;
			background: url(/style/bg.jpg);
		}

		.aui-slide-wrap {
			overflow: hidden;
		}
	</style>
</head>

<body class="index">
	<div id="wrap" class="flex-wrap flex-vertical">
		<div id="main" class="flex-con">
			<div class="br"></div>
			<div id="aui-slide" class="fx-box">
				<div id="slidebox" class="aui-slide-wrap" style="margin: 10px;border-radius:0.5rem;box-shadow:0.1rem 0.1rem 0.4rem rgba(99, 99, 99, 0.3);">
					<img id="bpic" src="/template/default/img/default_banner.png">
				</div>
			</div>
			<div class="list-title">
				<div class="list-title-l">
					<span style="color:#444;font-size: 0.6rem"><i class="iconfont icon-zuirehotchunse" style="color:#ff7600;font-size: 0.8rem"></i>VIP大厅</span>
				</div>
				<div class="list-title-r" id="wzbox_top"></div>
			</div>
			<section class="aui-grid aui-margin-b-15">
				<div class="aui-row" id="div_list_f">
					<?php echo $mkcms_hallcode; ?>
				</div>
			</section>
		</div>
		<div id="footer" class="border-t hidden-lg hidden-md">
			<div id="footer" class="border-t hidden-lg hidden-md">
				<ul class="flex-wrap" style="font-weight:bold">
					<a class="flex-con paiban <?php echo $index; ?>" href="/index.html">
						<li onclick="randomSwitchBtn(this);">首页</li>
					</a>
					<a class="flex-con paiban <?php echo $cx; ?>" href="/cx.html">
						<li onclick="randomSwitchBtn(this);">抢先</li>
					</a>
					<a class="flex-con paiban <?php echo $dt; ?>" href="/hall.html">
						<li onclick="randomSwitchBtn(this);">大厅</li>
					</a>
					<a class="flex-con paiban <?php echo $fl; ?>" href="/fuli.html">
						<li onclick="randomSwitchBtn(this);">福利</li>
					</a>
					<a class="flex-con paiban <?php echo $hy; ?>" href="/ucenter">
						<li onclick="randomSwitchBtn(this);">我的</li>
					</a>
				</ul>
			</div>
		</div>
	</div>
</body>

</html>