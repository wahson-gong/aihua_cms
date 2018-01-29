<?php /* Smarty version Smarty-3.1.16, created on 2017-01-30 14:22:59
         compiled from "/Users/gonghuayao/Sites/ghyCMS/application/views/home/templates/m/cases.html" */ ?>
<?php /*%%SmartyHeaderCode:1947630668588ed9ba118120-06545435%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fda34af44509a984e2bf65b15fb9a79d5552bd5d' => 
    array (
      0 => '/Users/gonghuayao/Sites/ghyCMS/application/views/home/templates/m/cases.html',
      1 => 1485757377,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1947630668588ed9ba118120-06545435',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_588ed9ba162f09_26796124',
  'variables' => 
  array (
    'WEB_INFO' => 0,
    'CUR_VIEW_PATH' => 0,
    'tableModel' => 0,
    'c' => 0,
    'pageinfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588ed9ba162f09_26796124')) {function content_588ed9ba162f09_26796124($_smarty_tpl) {?><!DOCTYPE HTML>
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

	<body class="cases">
		<header class="width100 header2">
			<div class="fl back">
				<a href="javascript:window.history.back()"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/images/back.jpg" alt="返回" class="width100" /></a>
			</div>
			<div class="title f36 fl">成功案例</div>
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
			<div class="case_t"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/images/cases_t.jpg" class="width100" alt="网站案例展示" /></div>
			<div class="case_list">
				<div id="case_list_html">
					<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tableModel']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
					<dl><dt><a href="/index.php?c=page&id=<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['c']->value['suolutu'];?>
" alt='<?php echo $_smarty_tpl->tpl_vars['c']->value['biaoti'];?>
' class="width100" /></a></dt>
						<dd>
							<a href="/index.php?c=page&id=<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
"  class="f24"><?php echo $_smarty_tpl->tpl_vars['c']->value['biaoti'];?>
</a>
						</dd>
					</dl>
					<?php } ?>	 
				</div>
				<div class="c"></div>
				<div class="btn_more">
					<div class="page">
			         <?php echo $_smarty_tpl->tpl_vars['pageinfo']->value;?>

			        </div>
				</div>
				
		   </div>
		</section>
		  <!-- footer -->
			<?php echo $_smarty_tpl->getSubTemplate ('m/foot.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<!-- footer -->
	</body>

</html><?php }} ?>
