<?php include('system/inc.php');
include 'system/list.php';
$page = $_GET['page'];
$seach = 'https://v.qq.com/channel/cartoon';
$rurl = file_get_contents($seach);
$szz = '#data-bgimage="(.*?)"[\s]+?data-navcolor="(.*?)"[\s]+?__wind[\s]+?_stat="(.*?)"[\s]+?><span class="text text2"  title="(.*?)" ><span class="title_text">(.*?)</span[\s]+?>(.*?)</span>#';
preg_match_all($szz, $rurl, $sarr);
$one = $sarr[5]; //链接
$two = $sarr[1]; //图片
$three = $sarr[6]; //简介
//优酷幻灯片规则
//$page=$_GET['page'];
//$seach='https://comic.youku.com/';
//$rurl = fileget($seach,5);
//$szz1='#<div class="swiper-slide"><a data-scm="(.*?)" data-spm="(.*?)" data-name="a_pos" href="(.*?)" target="_blank" title="(.*?)">#';
//$szz2='#class="focusswiper_focus_item" style="position:relative;background-image:url\((.*?)\);background-color:(.*?)">#';
//$szz3='#<div class="sub_title focusswiper_sub_title">(.*?)</div>#';
//preg_match_all($szz1,$rurl,$sarr1);
//preg_match_all($szz2,$rurl,$sarr2);
//preg_match_all($szz3,$rurl,$sarr3);
//$one=$sarr1[4];//链接
//$two=$sarr2[1];//图片
//$three=$sarr3[1];//简介
include('template/' . $mkcms_template . '/dongman.php');
