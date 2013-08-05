<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="__PUBLIC__/css/admin.css" rel="stylesheet" />
<script src="__PUBLIC__/jquery.js" type="text/javascript"></script>
<script src="__PUBLIC__/admin.js" type="text/javascript"></script>
<title>QuoraCms后台管理面板登录-Powered by QuoraCms!</title>
</head>

<body>
<div class="title">站点信息：</div>
<div class="h"></div>
<div class="tip">
服务器操作系统：<?php $os = explode(" ", php_uname()); echo $os[0];?>&nbsp;/内核版本：<?php if('/'==DIRECTORY_SEPARATOR){echo $os[2];}else{echo $os[1];}?>
</div>
<div class="tip">
服务器解译引擎：<?php echo $_SERVER['SERVER_SOFTWARE'];?>
</div>
<div class="tip">
服务器主机名：<?php if('/'==DIRECTORY_SEPARATOR ){echo $os[1];}else{echo $os[2];} ?>
</div>
<div class="tip">
服务器端口：<?php echo $_SERVER['SERVER_PORT'];?>
</div>
<div class="tip">
PHP版本：<?php echo PHP_VERSION;?>
</div>
<div class="tip">
GD库支持：
<?php

        if(function_exists(gd_info)) {

            $gd_info = @gd_info();

	        echo $gd_info["GD Version"];

	    }else{echo '<font color="red">×</font>';}

	?>
</div>
<div class="tip">
QuoraCms版本：QuoraCms v1.0 beta 2
</div>
<div class="tip">
QuoraCms授权状态：未授权
</div>
<div class="tip">
当前站点名称：<?php echo $setting['site_name']; ?>
</div>
<div class="tip">
当前站点会员总数：<?php echo ($usercount); ?>
</div>
<div class="tip">
当前站点问题总数：<?php echo ($questioncount); ?>
</div>
<div class="tip">
当前站点已解决问题总数：<?php echo ($solvecount); ?>
</div>
<div class="tip">
当前站点话题总数：<?php echo ($topiccount); ?>
</div>
<div class="tip">
当前站点未编辑话题总数：<?php echo ($unedittopiccount); ?>
</div>
<div class="tip">
当前站点分类总数：<?php echo ($c_num); ?>
</div>
<iframe width="500" height="550" class="share_self" id="weibo"  frameborder="0" scrolling="no" src="http://widget.weibo.com/weiboshow/index.php?language=&width=0&height=550&fansRow=2&ptype=1&speed=0&skin=1&isTitle=1&noborder=1&isWeibo=1&isFans=1&uid=1715071432&verifier=528cfba6&dpc=1"></iframe>
</body>
</html>