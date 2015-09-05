<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理中心</title>
<link rel='stylesheet' type="text/css" href="/xyh/App/Manage/View/Public/css/style.css" />
<script type="text/javascript" src="/xyh/App/Manage/View/Public/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/xyh/App/Manage/View/Public/js/common.js"></script>
 <script language="JavaScript">
    <!--
    var URL = '/xyh/xyhai.php?s=/Public';
    var APP	 = '/xyh/xyhai.php?s=';
    var SELF='/xyh/xyhai.php?s=/Public/main';
    var PUBLIC='/xyh/App/Manage/View/Public';
    //-->
</script>
</head>
<body>
<style type="text/css">
	html{_overflow-y:scroll}
</style>
<div style="min-width:780px">

<div class="column">
	<dl class="dbox winbg1" id="item3">
	    <dt class="lside">
	        <div class="l">我的个人信息</div>
	    </dt>
	    <dd>
			<div class="content">
				您好，<?php echo (session('yang_adm_username')); ?><br/>
				<div class="clear"></div>
				上次登录时间：<?php echo (session('yang_adm_logintime')); ?><br/>
				上次登录IP：<?php echo (session('yang_adm_loginip')); ?> <br/>
			</div>
	    </dd>
	</dl>

	<dl class="dbox winbg1" id="item5">
	    <dt class="lside"><span class="l">授权信息</span></dt>
	    <dd>
			<div class="content">
			如果您已购买XYHCMS产品商业使用授权，您可以在我们的授权中心查询到相关商业授权信息，如果授权类型同查询不符，则说明您可能购买了非法商业授权，请及时同我们取得联系。
我们的联系方式: QQ:307299635<br/>
			<a href="<?php echo go_link('http://www.0871k.com/index.php?m=Authorization&a=cms&lang='.C('DEFAULT_LANG').'');?>" target="_blank" style="padding:5px; background:#fff; color:green">商业授权查询</a>
			</div>
	    </dd>
	</dl>

	<dl class="dbox winbg2" id="item1">
	    <dt class="lside"><span class="l">系统信息</span></dt>
	    <dd>
	        <div class="content">
	               XYHCMS程序版本：XYHCMS V<?php echo ($cms_info["XYHCMS_VER"]); ?> [<?php echo ($cms_info["XYHCMS_TIME"]); ?>] [<a href="<?php echo go_link();?>" target="_blank">查看最新版本</a>]<br />
	操作系统：<?php echo ($os); ?> <br />
	服务器软件：<?php echo ($software); ?><br />
	MySQL 版本：<?php echo ($mysql_ver); ?><br />
	上传文件：<?php echo ($environment_upload); ?><br />	
	         </div>
	    </dd>
	</dl>



	<dl class="dbox winbg2" id="item3">
	    <dt class="lside"><span class="l">XYHCMS系统开发团队</span></dt>
	    <dd>
	        <div class="content">
			版权所有：<a href="<?php echo go_link('http://www.0871k.com/');?>" target="_blank">行云海软件</a><br />
			官方网站：<a href="http://www.xyhcms.com" target="_blank">http://www.xyhcms.com</a><br />
			官方论坛：<a href="http://f.xyhcms.com/" target="_blank">http://f.xyhcms.com/</a> <br />
			</div>
	    </dd>
	</dl>

</div>

<div class="column">

	<dl class="dbox winbg5" id="item1">
    <dt class="lside"><span class="l">XYHCMS安全提示</span></dt>
    <dd>
      <div id="safelist" class="content">
		1.取消uploads目录的执行权限！<br/>
		2.更改后台入口文件 xyhai.php文件名；<br/>
      </div>
    </dd>
  </dl>


 <dl class="dbox winbg5" id="item2">
	    <dt class="lside"><span class="l">XYHCMS更新消息</span></dt>
	    <dd>
	        <div id="updatetest" class="content">
					<strong>当前版本：</strong>V<?php echo ($cms_info["XYHCMS_VER"]); ?> [<?php echo ($cms_info["XYHCMS_TIME"]); ?>]<br/>
					<strong>最新版本：</strong><span id="XYHCMS_LastInfo"></span>
	         </div>
	    </dd>
	</dl>

	<dl class="dbox winbg7" id="item2">
		<dt class="lside"><span class="l">行云海赞助商</span></dt>
		<dd>
			<div id="XYHCMS_News" class="content">
				
		  </div>
		</dd>
	</dl>

</div>

</div>
</body>
</html>
<script type="text/javascript" src="http://www.xyhcms.com/api.php?c=Cms&a=updatecheck&version=<?php echo ($cms_info["XYHCMS_VER"]); ?>&release=<?php echo ($cms_info["XYHCMS_TIME"]); ?>&os=<?php echo ($os); ?>&php=<?php echo ($phpversion); ?>&mysql=<?php echo ($mysql_ver); ?>&software=<?php echo ($software); ?>&lang=<?php echo C('DEFAULT_LANG');?>&sae=<?php echo ($saeflag); ?>"></script>