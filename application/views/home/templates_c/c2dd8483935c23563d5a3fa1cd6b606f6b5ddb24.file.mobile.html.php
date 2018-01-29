<?php /* Smarty version Smarty-3.1.16, created on 2017-01-30 14:34:46
         compiled from "/Users/gonghuayao/Sites/ghyCMS/application/views/home/templates/m/mobile.html" */ ?>
<?php /*%%SmartyHeaderCode:1944479808588ec9670f1472-62198900%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2dd8483935c23563d5a3fa1cd6b606f6b5ddb24' => 
    array (
      0 => '/Users/gonghuayao/Sites/ghyCMS/application/views/home/templates/m/mobile.html',
      1 => 1485758083,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1944479808588ec9670f1472-62198900',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_588ec96715edf1_65414876',
  'variables' => 
  array (
    'WEB_INFO' => 0,
    'CUR_VIEW_PATH' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588ec96715edf1_65414876')) {function content_588ec96715edf1_65414876($_smarty_tpl) {?><!DOCTYPE HTML>
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
			<div class="title f36 fl">移动终端</div>
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
			<div class="about_banner"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/images/mobile_banner.jpg" alt="手机网站建设" class="width100" /></div>
			<div class="page_t f36"><span class="f48">01</span>手机网站
			</div>
			<div><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/images/mobile_pic1.jpg" class="width100" alt="手机网站建设" /></div>
			<div class="mobile_1">
				<dl><dt class="f28">定制设计版面</dt>
					<dd class="t2 f26">让你手机网站与众不同</dd>
					<dd class="spec f24">资深设计师与你一对一沟通，根据你企业文化与行业特点，创意设计出风格独一无二的手机网站</dd>
				</dl>
			</div>
			<div class="mobile_2">
				<div class="page_t f36"><span class="f48">02</span>微信网站
				</div>
				<div class="mobile_2_text f24">通过微信公众号或服务号与手机网站进行对接轻松打造和手机网站一样的微信网站，轻松实现微信营销</div>
				<div><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/images/mobile_pic2.jpg" class="width100" alt="微信网站建设" /></div>
			</div>
			<div class="page_t f36"><span class="f48">03</span>APP定制
			</div>
			<div class="mobile_3">
				<dl><dt class="f28">IOS、Android移动终端定制</dt>
					<dd class="spec f24">适合商城、运营平台等，运用APP独有的功能，最大化移动终端的作用， 全方位覆盖PC端和移动端，数据和PC端同步。</dd>
				</dl>
			</div>
			<div><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/images/mobile_pic3.jpg" class="width100" alt="APP定制" /></div>
		</section>
		 <!-- footer -->
			<?php echo $_smarty_tpl->getSubTemplate ('m/foot.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<!-- footer -->
	</body>

</html><?php }} ?>
