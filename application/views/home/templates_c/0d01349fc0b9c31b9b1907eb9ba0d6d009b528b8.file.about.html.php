<?php /* Smarty version Smarty-3.1.16, created on 2017-01-30 14:06:25
         compiled from "/Users/gonghuayao/Sites/ghyCMS/application/views/home/templates/m/about.html" */ ?>
<?php /*%%SmartyHeaderCode:1148311114588ed3528b1632-21167283%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d01349fc0b9c31b9b1907eb9ba0d6d009b528b8' => 
    array (
      0 => '/Users/gonghuayao/Sites/ghyCMS/application/views/home/templates/m/about.html',
      1 => 1485756383,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1148311114588ed3528b1632-21167283',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_588ed3528f7035_76193675',
  'variables' => 
  array (
    'WEB_INFO' => 0,
    'CUR_VIEW_PATH' => 0,
    'aboutusDetail' => 0,
    'tableList' => 0,
    'v' => 0,
    'k' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588ed3528f7035_76193675')) {function content_588ed3528f7035_76193675($_smarty_tpl) {?><!DOCTYPE HTML>
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
					<li class="sel">
						<a href="/index.php?c=about" class="f24"><?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['COMPANYNAME'];?>
概况</a>
					</li>
					<li>
						<a href="/index.php?c=single&m=about_culture" class="f24"><?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['COMPANYNAME'];?>
文化</a>
					</li>
					 
					<li class="last">
						<a href="/index.php?c=single&m=about_job" class="f24">加入我们</a>
					</li>
				</ul>
			</div>
			<div class="about_banner"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/images/about_banner.jpg" class="width100" alt="维尼网络" /></div>
			<div class="about_con f22">
				<?php echo $_smarty_tpl->tpl_vars['aboutusDetail']->value['content'];?>

           </div>
			<div class="about_t3"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/images/about_t3.jpg" class="width100" /></div>
			<div class="about_sou">
				<ul>
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tableList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
					<li>
						<a href="/index.php?c=solutions&a=detail&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="f24"><span><?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
</span><?php echo $_smarty_tpl->tpl_vars['v']->value['biaoti'];?>
</a>
					</li>
				<?php } ?>
					 
					 
				</ul>
			</div>
		</section>
		
		<!-- footer -->
			<?php echo $_smarty_tpl->getSubTemplate ('m/foot.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<!-- footer -->
	</body>

</html><?php }} ?>
