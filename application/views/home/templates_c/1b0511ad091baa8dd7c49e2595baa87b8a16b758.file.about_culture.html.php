<?php /* Smarty version Smarty-3.1.16, created on 2017-01-30 14:12:06
         compiled from "/Users/gonghuayao/Sites/ghyCMS/application/views/home/templates/m/about_culture.html" */ ?>
<?php /*%%SmartyHeaderCode:1518972093588ed64188ad51-83380643%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b0511ad091baa8dd7c49e2595baa87b8a16b758' => 
    array (
      0 => '/Users/gonghuayao/Sites/ghyCMS/application/views/home/templates/m/about_culture.html',
      1 => 1485756724,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1518972093588ed64188ad51-83380643',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_588ed6418d37d0_83016491',
  'variables' => 
  array (
    'WEB_INFO' => 0,
    'CUR_VIEW_PATH' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588ed6418d37d0_83016491')) {function content_588ed6418d37d0_83016491($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="zh-CN">

	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>关于我们_<?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['SEOTITLE'];?>
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
			<div class="title f36 fl">关于我们</div>
			<div class="fr nav"><img onClick="show_top_nav()" alt="成都网站建设" src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/images/menu.jpg" class="width100" /></div>
			<div class="c"></div>
			<div style="width:0px;height:0px;overflow:hidden"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/images/fangwei4.jpg" /></div>
			<div class="top_nav">
				<ul>
					 <!-- header -->
			              <?php echo $_smarty_tpl->getSubTemplate ('m/head_sub.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			          <!-- header --> 
				</ul>
			</div>
		</header>
		<section class="width100">
			<div class="sub_menu">
				<ul class="fix">
					<li >
						<a href="/index.php?c=about" class="f24"><?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['COMPANYNAME'];?>
概况</a>
					</li>
					<li class="sel">
						<a href="/index.php?c=single&m=about_culture" class="f24"><?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['COMPANYNAME'];?>
文化</a>
					</li>
					 
					<li class="last">
						<a href="/index.php?c=single&m=about_job" class="f24">加入我们</a>
					</li>
				</ul>
			</div>
			<div class="about_t2"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/images/about_cul_2.jpg" alt="成都网站设计" class="width100" /></div>
			 <div class="about_con f22"><p><b><?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['COMPANYNAME'];?>
</b>拥有一支朝气蓬勃的团队，我们执着、敏锐、追求更好；通过自己的专业眼光，为客户提供各类解决方案，始终为客户思考如何占领互联网。 一个人能走多远，取决于与谁同行，<?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['COMPANYNAME'];?>
团队是一个富有理想和激情的团队，也是一个技术专业化、管理人性化、创新性和学习型的优秀团队。
多年来，<?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['COMPANYNAME'];?>
以建立行业服务品质标杆为目标，不断提升服务质量，愿携手广大客户继续领先构建中国企业信息化运营领域的新标杆。</p></div>
			<div class="about_cul_t3"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/images/about_cul_3.jpg" alt="成都网站制作" class="width100" /></div>
		</section>
		<!-- footer -->
			<?php echo $_smarty_tpl->getSubTemplate ('m/foot.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<!-- footer -->
	</body>

</html><?php }} ?>
