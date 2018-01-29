<?php /* Smarty version Smarty-3.1.16, created on 2017-01-30 13:53:47
         compiled from "/Users/gonghuayao/Sites/ghyCMS/application/views/home/templates/m/head_sub.html" */ ?>
<?php /*%%SmartyHeaderCode:577790319588ed4eba45128-00990184%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a25fd0e0758ea7e62173d68a86f29c24a16b589e' => 
    array (
      0 => '/Users/gonghuayao/Sites/ghyCMS/application/views/home/templates/m/head_sub.html',
      1 => 1485755425,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '577790319588ed4eba45128-00990184',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sortHead' => 0,
    'v' => 0,
    'CUR_VIEW_PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_588ed4eba5a819_57795879',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588ed4eba5a819_57795879')) {function content_588ed4eba5a819_57795879($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
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
				<?php } ?>		 <?php }} ?>
