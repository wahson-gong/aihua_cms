<?php /* Smarty version Smarty-3.1.16, created on 2017-01-30 13:07:54
         compiled from "/Users/gonghuayao/Sites/ghyCMS/application/views/home/templates/m/head.html" */ ?>
<?php /*%%SmartyHeaderCode:259328598588ec8f7ece950-51331016%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9032f4844b50f54757dedcf51e321707b8ae72c' => 
    array (
      0 => '/Users/gonghuayao/Sites/ghyCMS/application/views/home/templates/m/head.html',
      1 => 1485752695,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '259328598588ec8f7ece950-51331016',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_588ec8f7ef78c6_42912056',
  'variables' => 
  array (
    'CUR_VIEW_PATH' => 0,
    'sortHead' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588ec8f7ef78c6_42912056')) {function content_588ec8f7ef78c6_42912056($_smarty_tpl) {?><header class="width100">
			<h1 class="fl" style="padding-left:10px;"><a href="/"><img alt="成都网站建设" src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/images/logo.jpg" class="width100" /></a></h1>
			<div class="fr nav"><img onClick="show_top_nav()" alt="成都网站设计" src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/images/menu.jpg" class="width100" /></div>
			<div class="c"></div>
			<div style="width:0px;height:0px;overflow:hidden"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/images/fangwei4.jpg" /></div>
			<div class="top_nav">
				<ul>
				 
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sortHead']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
					<li>
						<a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
" class="f28"><?php echo $_smarty_tpl->tpl_vars['v']->value['u1'];?>

							<div><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/images/ico_menu_jiantou.png" alt="官网首页" class="width100" /></div>
						</a>
					</li>
				<?php } ?>		 
				</ul>
			</div>
		</header><?php }} ?>
