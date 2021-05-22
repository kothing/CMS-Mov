<?php
$seach1 = 'http://www.360kan.com/rank/dianying';
$seach2 = 'http://www.360kan.com/rank/dianshi';
$seach3 = 'http://www.360kan.com/rank/zongyi';
$seach4 = 'http://www.360kan.com/rank/dongman';
$bangdan1 = fileget($seach1, 5);
$bangdan2 = fileget($seach2, 5);
$bangdan3 = fileget($seach3, 5);
$bangdan4 = fileget($seach4, 5);
$bangdan1 = str_replace("m-inc", "m-dec", $bangdan1);
$bangdan2 = str_replace("m-inc", "m-dec", $bangdan2);
$bangdan3 = str_replace("m-inc", "m-dec", $bangdan3);
$bangdan4 = str_replace("m-inc", "m-dec", $bangdan4);
$bd = '#<div class="m-contentwrap">[\s\S]*?</div>#';
preg_match_all($bd, $bangdan1, $bdarr1);
preg_match_all($bd, $bangdan2, $bdarr2);
preg_match_all($bd, $bangdan3, $bdarr3);
preg_match_all($bd, $bangdan4, $bdarr4);
$dbdss1 = $bdarr1[0][0];
$dbdss2 = $bdarr2[0][0];
$dbdss3 = $bdarr3[0][0];
$dbdss4 = $bdarr4[0][0];
$dblink = '#<a href="(.*?)" title="(.*?)">(.*?)</a>#';
$dbimg = '#data-src="(.*?)" alt="" />#';
$dbtop = '#<span class="m-pv m-dec">(.*?)</span>#';
preg_match_all($dblink, $dbdss1, $bdRlink1);
preg_match_all($dblink, $dbdss1, $bdRtitle1);
preg_match_all($dbtop, $dbdss1, $bdRtop1);
preg_match_all($dbimg, $dbdss1, $bdRimg1);
preg_match_all($dblink, $dbdss2, $bdRlink2);
preg_match_all($dblink, $dbdss2, $bdRtitle2);
preg_match_all($dbtop, $dbdss2, $bdRtop2);
preg_match_all($dbimg, $dbdss2, $bdRimg2);
preg_match_all($dblink, $dbdss3, $bdRlink3);
preg_match_all($dblink, $dbdss3, $bdRtitle3);
preg_match_all($dbtop, $dbdss3, $bdRtop3);
preg_match_all($dbimg, $dbdss3, $bdRimg3);
preg_match_all($dblink, $dbdss4, $bdRlink4);
preg_match_all($dblink, $dbdss4, $bdRtitle4);
preg_match_all($dbtop, $dbdss4, $bdRtop4);
preg_match_all($dbimg, $dbdss4, $bdRimg4);
//电影榜单
$bdArr1['dy']['top'] = $bdRtop1[1];
$bdArr1['dy']['title'] = $bdRlink1[2];
$bdArr1['dy']['url'] = $bdRlink1[1];
$bdArr1['dy']['img'] = $bdRimg1[1];
//剧集榜单
$bdArr2['tv']['top'] = $bdRtop2[1];
$bdArr2['tv']['title'] = $bdRlink2[2];
$bdArr2['tv']['url'] = $bdRlink2[1];
$bdArr2['tv']['img'] = $bdRimg2[1];
//综艺榜单
$bdArr3['zy']['top'] = $bdRtop3[1];
$bdArr3['zy']['title'] = $bdRlink3[2];
$bdArr3['zy']['url'] = $bdRlink3[1];
$bdArr3['zy']['img'] = $bdRimg3[1];
//动漫榜单
$bdArr4['dm']['top'] = $bdRtop4[1];
$bdArr4['dm']['title'] = $bdRlink4[2];
$bdArr4['dm']['url'] = $bdRlink4[1];
$bdArr4['dm']['img'] = $bdRimg4[1];
?>