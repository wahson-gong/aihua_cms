<?php /* Smarty version Smarty-3.1.16, created on 2017-01-30 15:07:23
         compiled from "/Users/gonghuayao/Sites/ghyCMS/application/views/home/templates/m/contact.html" */ ?>
<?php /*%%SmartyHeaderCode:311620959588ee35f59f891-29342325%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2f4cea4623196c63a1a8bfe58b4089af3b573b8' => 
    array (
      0 => '/Users/gonghuayao/Sites/ghyCMS/application/views/home/templates/m/contact.html',
      1 => 1485760038,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '311620959588ee35f59f891-29342325',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_588ee35f6002d6_08060202',
  'variables' => 
  array (
    'WEB_INFO' => 0,
    'CUR_VIEW_PATH' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588ee35f6002d6_08060202')) {function content_588ee35f6002d6_08060202($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="zh-CN">

	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>联系我们|<?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['SEOTITLE'];?>
</title>
		<meta name="Keywords" content="<?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['SEOKEYWORDS'];?>
">
		<meta name="Description" content="<?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['SEODESCRIPTION'];?>
">
		<link href="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/css/basic.css" type="text/css" rel="stylesheet" />
		<script src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/js/jquery.min.js" type="text/javascript"></script>
		<script src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/js/basic.js" type="text/javascript"></script>
	</head>

	<body>
		<header class="width100 header2">
			<div class="fl back">
				<a href="javascript:window.history.back()"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/images/back.jpg" alt="返回" class="width100" /></a>
			</div>
			<div class="title f36 fl">联系我们</div>
			<div class="fr nav"><img onClick="show_top_nav()" alt="成都网站建设" src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/images/menu.jpg" class="width100" /></div>
			<div class="c"></div>
			<div style="width:0px;height:0px;overflow:hidden"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/images/fangwei4.jpg" /></div>
			<div class="top_nav">
				<ul>
					<!-- footer -->
			<?php echo $_smarty_tpl->getSubTemplate ('m/head_sub.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<!-- footer -->
				</ul>
			</div>
		</header>
		<section class="width100">
			<div class="contact_banner"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/images/contact_banner.jpg" alt="联系<?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['COMPANYNAME'];?>
" class="width100" /></div>
			<div class="page_t f36"><span class="f48">01</span>联系<?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['COMPANYNAME'];?>

			</div>
			<div class="contact_1">
				<dl><dt><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/images/contact_ico1.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['COMPANYNAME'];?>
地址" class="width100" /></dt>
					<dd class="t f28">公司地址</dd>
					<dd class="spec f20"><?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['COMPANYADDRESS'];?>
 </dd>
				</dl>
				<dl><dt><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/images/contact_ico2.jpg" class="width100" alt="<?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['COMPANYNAME'];?>
邮箱" /></dt>
					<dd class="t f28"><?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['COMPANYNAME'];?>
邮箱</dd>
					<dd class="spec f20"><?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['EMAIL'];?>
<br>&nbsp;</dd>
				</dl>
				<dl><dt><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/images/contact_ico3.jpg" class="width100" alt="<?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['COMPANYNAME'];?>
联系方式" /></dt>
					<dd class="t f28">联系方式</dd>
					<dd class="spec f20">电话：<?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['MOBILE'];?>
<br></dd>
				</dl>
				<dl><dt><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/images/contact_ico4.jpg" class="width100" alt="联系QQ" /></dt>
					<dd class="t f28">联系QQ</dd>
					<dd class="spec f20">客服：<?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['QQ2'];?>
 </dd>
				</dl>
				<div class="c"></div>
			</div>
			<div class="contact_border"></div>
			<div class="page_t f36"><span class="f48">02</span>如何到达
			</div>
			<div class="contact_2">
				<dl><dt class="f26"><div class="fl div1"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/images/contact_ico_bus.jpg" alt="公交车" class="width100" /></div><div class="fl div2">公交车</div><div class="c"></div></dt>
					<dd class="f24">
						<div class="fl div1">站台：</div>
						<div class="fl div2">川师大成龙校区、龙城大道金茶路口、车城大道路口、凯德卓锦万黛、回龙寺</div>
						<div class="c"></div>
					</dd>
					<dd class="f24">
						<div class="fl div1">线路：</div>
						<div class="fl div2">332a路、856a路、313路、332路、856路、899路、1014路、223路、1002路  等等</div>
						<div class="c"></div>
					</dd>
				</dl>
				<dl><dt class="f26"><div class="fl div1"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/images/contact_ico_car.jpg" class="width100" alt="出租车" /></div><div class="fl div2">出租车/自驾</div><div class="c"></div></dt>
					<dd class="f24">
						<div class="fl div1">地点：</div>
						<div class="fl div2">龙泉驿区成龙大道  </div>
						<div class="c"></div>
					</dd>
					<dd class="f24">
						<div class="fl div1">线路：</div>
						<div class="fl div2">成都市龙泉驿区成龙大道二段1819号</div>
						<div class="c"></div>
					</dd>
				</dl>
				<dl><dt class="f26"><div class="fl div1"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/images/contact_ico_metro.jpg" class="width100"  alt="地铁" /></div><div class="fl div2">地铁</div><div class="c"></div></dt>
					<dd class="f24">
						<div class="fl div1">站台：</div>
						<div class="fl div2">连山坡 </div>
						<div class="c"></div>
					</dd>
					<dd class="f24">
						<div class="fl div1">线路：</div>
						<div class="fl div2">2号线</div>
						<div class="c"></div>
					</dd>
				</dl>
			</div>
			<div class="contact_border"></div>
			<div class="page_t f36"><span class="f48">03</span>在线留言
			</div>
			<div class="contact_3">
				<form method="post" action="/index.php?c=contact&a=insertFeedback" onsubmit="return check_form()">
					<div><input type="text" id="name" name="name" class="input1 f24" placeholder="你的称呼（必填）" /></div>
					<div><input type="tel" id="tel" name="tel" class="input1 f24" placeholder="你的电话（必填）" /></div>
					<div><input type="email" id="email" name="email" class="input1 f24" placeholder="你的邮箱" /></div>
					<div><input type="text" id="company" name="company" class="input1 f24" placeholder="你的公司" /></div>
					<div><textarea id="content" name="content" class="text1 f24" placeholder="留言内容（必填）"></textarea></div>
					<div><input type="submit" value="提交信息" class="btn1 f30" /></div>
					<input type="hidden" name="__hash__" value="0d92c0213eef42edafdcd4d230ea5b4e_7fe11febe84aef77895b01798dcabfa3" /></form>
			</div>
		</section>
		  <!-- footer -->
			<?php echo $_smarty_tpl->getSubTemplate ('m/foot.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<!-- footer -->
		<script type="text/javascript">
			function check_form() {
				var name = $.trim($("#name").val());
				var tel = $.trim($("#tel").val());
				var content = $.trim($("#content").val());
				if(name == "" || name == "你的称呼（必填）") {
					alert("请输入你的称呼！");
					$("#name").focus();
					return false;
				}
				if(tel == "" || tel == "你的电话（必填）") {
					alert("请输入你的电话！");
					$("#tel").focus();
					return false;
				}
				if(content == "" || content == "请输入留言内容") {
					alert("请输入留言内容！");
					$("#content").focus();
					return false;
				}
			}
		</script>
	</body>

</html><?php }} ?>
