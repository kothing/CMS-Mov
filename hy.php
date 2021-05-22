<?php include('system/inc.php');
error_reporting(0);
header('Content-Type:text/html;charset=UTF-8');
if (empty($_GET['page'])) {
	$_GET['page'] = '1';
}
$cid = $_GET['cid'];
if (empty($_GET['cid'])) {
	$url = "https://www.huya.com/cache.php?m=LiveList&do=getLiveListByPage&tagAll=0&page=" . $_GET['page'];
} else {
	$url = "https://www.huya.com/cache.php?m=LiveList&do=getLiveListByPage&gameId=" . $cid . "&tagAll=0&page=" . $_GET['page'];
}
$data = json_decode(file_get_contents($url), true);
$num = $data['data']['totalCount'];
$totalPage = $data['data']['totalPage'];
if ($num > 120) {
	$num = 120;
}
include('template/' . $mkcms_template . '/hy.php');
