<?php
include('system/inc.php');
$cid = $_GET['cid'];
$surl = 'https://' . $cid . '.youku.com';
if ($cid == '') {
    $surl = 'https://youku.com/';
}
$fcon = fileget2($surl, 5);
$text = '#<div class="swiper-container"><div class="swiper-wrapper">[\s\S]*?<div class="common_container ">#';
preg_match_all($text, $fcon, $arr);
$html = $arr[0][0];
$szz1 = '#<span class="focusswiper_common_title focusswiper_focus_title">(.*?)</span>#';
$szz2 = '#style="position:relative;background-image:url\((.*?)\);#';
$szz3 = '#<span class="focusswiper_common_title focusswiper_focus_subtitle">(.*?)</span>#';
preg_match_all($szz1, $html, $sarr1);
preg_match_all($szz2, $html, $sarr2);
preg_match_all($szz3, $html, $sarr3);
$one = $sarr1[1]; //链接
$two = $sarr2[1]; //图片
$three = $sarr3[1]; //简介
$array = array();
$i = 1;
foreach ($one as $k => $name) {
    $array[$k]['num'] = $i;
    $array[$k]['link'] = $one[$k];
    $array[$k]['cover'] = $two[$k];
    $array[$k]['desc'] = $three[$k];
    $i++;
}
echo "{\"data\":" . json_encode($array, true) . "}";
