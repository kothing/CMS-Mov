<?php
error_reporting(0);
header('Content-Type:text/html;charset=UTF-8');
$url = "https://liveapi.huya.com/cache/livelist/getUserLikeList?callback=getUserLikeList";
$data = file_get_contents($url);
$lname = '#"roomName":"(.*?)"#';
$bid = '#"profileRoom":(.*?),"#';
$aimg = '#"screenshot":"(.*?)"#';
preg_match_all($lname, $data, $xarr1);
preg_match_all($bid, $data, $xarr2);
preg_match_all($aimg, $data, $xarr3);
$name = $xarr1[1];
$id = $xarr2[1];
$ximg = $xarr3[1];
$i = 0;
foreach ($name as $ks => $vs) {
    if ($i < 12) {
        $ccb = "hyplay_" . $id[$ks] . ".html";
        echo "<li class='col-md-6 col-sm-4 col-xs-3'>
                <div class='stui-vodlist__box stui-vodlist__bg'>
                    <a title='$vs' class='stui-vodlist__thumb1 lazyload' href='$ccb' data-original='$ximg[$ks]'>
                        <span class='play hidden-xs'></span>
                        <span class='pic-text text-right'></span>
                    </a>
                    <div class='stui-vodlist__detail active'>
                        <h4 class='title text-overflow'>
                            <a title='$vs' href='$ccb'>$vs</a>
                        </h4>
                    </div>
                </div>
            </li>";
        $i++;
    }
}
?>
