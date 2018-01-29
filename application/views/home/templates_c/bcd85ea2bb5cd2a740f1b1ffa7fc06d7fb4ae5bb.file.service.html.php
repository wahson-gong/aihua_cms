<?php /* Smarty version Smarty-3.1.16, created on 2017-01-30 14:29:47
         compiled from "/Users/gonghuayao/Sites/ghyCMS/application/views/home/templates/m/service.html" */ ?>
<?php /*%%SmartyHeaderCode:1615419012588edc92ef6960-51021481%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bcd85ea2bb5cd2a740f1b1ffa7fc06d7fb4ae5bb' => 
    array (
      0 => '/Users/gonghuayao/Sites/ghyCMS/application/views/home/templates/m/service.html',
      1 => 1485757783,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1615419012588edc92ef6960-51021481',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_588edc92f37f52_71914634',
  'variables' => 
  array (
    'WEB_INFO' => 0,
    'CUR_VIEW_PATH' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588edc92f37f52_71914634')) {function content_588edc92f37f52_71914634($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="zh-CN">

	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <title><?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['SEOTITLE'];?>
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
			<div class="title f36 fl">服务范围</div>
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
			<div class="sub_menu">
				<ul class="fix">
					<li class="sel">
						<a href="/index.php?c=single&m=service" class="f24">服务项目</a>
					</li>
					<li>
						<a href="/index.php?c=single&m=service_fanwei" class="f24">服务范围</a>
					</li>
					<li class="last">
						<a href="/index.php?c=single&m=service_liucheng" class="f24">合作流程 </a>
					</li>
				</ul>
			</div>
			<div class="about_banner"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/images/service_banner.jpg" alt="成都网站定制" class="width100" /></div>
			<div class="page_t f36"><span class="f48">01</span>服务项目
			</div>
			<div class="service_dl_con">
				<dl class="first"><dt><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/images/service_pic12.jpg" alt="原型图策划" class="width100" /></dt>
					<dd class="t1 f28">原型图策划</dd>
					<dd class="t2 f24">无原型、不设计</dd>
					<dd class="t3 f22">大大减少制作误差，为客户提供全方位策划服务</dd>
				</dl>
				<dl><dt><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/images/service_pic22.jpg" alt="网站设计" class="width100" /></dt>
					<dd class="t1 f28">创意设计</dd>
					<dd class="t2 f24">设计无价、创意无价</dd>
					<dd class="t3 f22">独具慧眼的设计风格，提升企业形象</dd>
				</dl>
				<dl><dt><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/images/service_pic32.jpg" alt="前端制作" class="width100" /></dt>
					<dd class="t1 f28">前端制作</dd>
					<dd class="t2 f24">用网页展示设计图</dd>
					<dd class="t3 f22">绝对的逼真，良好的兼容，全平台展示</dd>
				</dl>
				<dl><dt><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/images/service_pic42.jpg" alt="程序开发" class="width100" /></dt>
					<dd class="t1 f28">程序开发</dd>
					<dd class="t2 f24">让代码帮你做事</dd>
					<dd class="t3 f22">便捷的管理高效的执行，稳定的网站</dd>
				</dl>
			</div>
		</section>
		  <!-- footer -->
			<?php echo $_smarty_tpl->getSubTemplate ('m/foot.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<!-- footer -->
	</body>

</html><?php }} ?>
