<?php include('system/inc.php');
include('system/cx.php');
if (!file_exists('./install/install.lock')) {
    header('location:/install/');
}
$x = isset($_GET['page']) ? $_GET['page'] : '1';
$url = $cxurl . "?p=" . $x;
$data = json_decode(file_get_contents($url), true);
$recordcount = $data['page']['recordcount'];
$pagesize = $data['page']['pagesize'];
//360幻灯片规则
$seach = 'https://v.qq.com';
$rurl = file_get_contents($seach);
$szz = '#data-bgimage="(.*?)"[\s]+?data-navcolor="(.*?)"[\s]+? __wind[\s]+?_stat="(.*?)"[\s]+?><span class="text text2"  title="(.*?)" ><span class="title_text">(.*?)</span[\s]+?>(.*?)</span>#';
preg_match_all($szz, $rurl, $sarr);
$one = $sarr[5]; //链接 
$two = $sarr[1]; //图片
$three = $sarr[6]; //简介
include('template/' . $mkcms_template . '/index.php');
