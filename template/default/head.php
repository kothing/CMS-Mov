<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="renderer" content="webkit|ie-comp|ie-stand">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" href="/template/default/css/stui_block.css" type="text/css">
  <link rel="stylesheet" href="/template/default/css/stui_default.css" type="text/css">
  <link rel="stylesheet" href="/template/default/css/iconfont.css" type="text/css">
  <link rel="stylesheet" href="/template/default/css/aui.css" type="text/css">
  <script type="text/javascript" src="/template/default/js/jquery.min.js"></script>
  <script type="text/javascript" src="/template/default/js/stui_default.js"></script>
  <script type="text/javascript" src="/template/default/js/stui_block.js"></script>
  <script type="text/javascript" src="/template/default/js/submit_res.js"></script>
  <script type="text/javascript" src="//at.alicdn.com/t/font_1486157_6uw53bh8p6l.js"></script>
  <!-- tan chuang guang gao -->
  <script type="text/javascript" src="/template/default/js/layui/layui.js"></script>
  <?php
  if (
    strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== false
    || strpos($_SERVER['HTTP_USER_AGENT'], 'Android') !== false
    || strpos($_SERVER['HTTP_USER_AGENT'], 'Silk/') !== false
    || strpos($_SERVER['HTTP_USER_AGENT'], 'Kindle') !== false
    || strpos($_SERVER['HTTP_USER_AGENT'], 'BlackBerry') !== false
    || strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mini') !== false
    || strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mobi') !== false
  ) {
    $meswidth = '345px;';
  } else {
    $meswidth = '765px;';
  }
  ?>
  <?php if (!empty($mkcms_tancgonggao)) { ?>
    <script type="text/javascript">
      window.onload = function() {
        var s = document.cookie;
        if (s.indexOf('myad=1') != -1) return; //存在cookie退出下面代码的执行  
        var d = new Date();
        d.setMinutes(d.getMinutes() + <?php echo $mkcms_tanchuangfenzhong; ?>); //有效期24小时  分钟：getMinutes 时：getHours
        document.cookie = 'myad=1;expires=' + d.toUTCString(); //设置cookie   toUTCString toGMTString
        //自己弹窗代码   
        layui.use('layer',
          function() { //独立版的layer无需执行这一句
            var $ = layui.jquery,
              layer = layui.layer; //独立版的layer无需执行这一句 
            //示范一个公告层
            layer.open({
              type: 1,
              title: false,
              //不显示标题栏
              closeBtn: true,
              area: '<?php echo $meswidth; ?>',
              shade: 0.8,
              id: 'LAY_layuipro',
              //设定一个id，防止重复弹出
              btn: ['确定', '取消'],
              btnAlign: 'c',
              moveType: 1,
              //拖拽模式，0或者1 
              content: '<div style="padding: 50px; line-height: 22px; background-color: #393D49; color: #fff; font-weight: 300;"><?php echo $mkcms_tancgonggao; ?></div>',
              success: function(layero) {
                var btn = layero.find('.layui-layer-btn');
                btn.find('.layui-layer-btn0').attr({
                  href: '<?php echo $mkcms_tancurl; ?>',
                  target: '_blank'
                });
              }
            });
          });

      }
    </script>
  <?php }; ?>
  <!--[if lt IE 9]>
<script src="/style/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="/style/respond/1.4.2/respond.min.js"></script>
<![endif]-->
  <style type="text/css">
    body {
      background-repeat: repeat;
      background-size: inherit;
      background-attachment: fixed;
      background-position: center center;
      background: url(<?php echo $mkcms_beijing; ?>);
    }

    .stui-header__logo .logo {
      display: flex;
  		align-items: center;
      max-width: 150px;
			width: auto;
      height: 55px;
    }

    @media (max-width:767px) {
      body:before {
        background: url() center 0 no-repeat;
        background-attachment: fixed;
        background-size: cover;
      }

      .stui-header__top {
        min-height: 50px;
      }

      .stui-header__logo {
        display: flex;
		    align-items: center;
        margin-top: 10px;
        margin-left: 10px;
      }

      .layui-layer {
        width: 90% !important;
        top: 40px !important;
        left: 5% !important;
      }
    }

    @media (max-width: 1023px) {
      .stui-header__logo .logo {
        display: flex;
  			align-items: center;
        max-width: 90px;
        width: auto;
        height: 30px;
      }
      .stui-header__logo .logo img {
        height: 100%;
      }
    }
  </style>