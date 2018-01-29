<?php /* Smarty version Smarty-3.1.16, created on 2017-01-30 12:28:10
         compiled from "/Users/gonghuayao/Sites/ghyCMS/application/views/home/templates/defualt/right_tip.html" */ ?>
<?php /*%%SmartyHeaderCode:1692451557588ec0da0218d7-86839506%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39a519aae9e8ede9175787dccd356d03c30eed0d' => 
    array (
      0 => '/Users/gonghuayao/Sites/ghyCMS/application/views/home/templates/defualt/right_tip.html',
      1 => 1485750133,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1692451557588ec0da0218d7-86839506',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'WEB_INFO' => 0,
    'CUR_VIEW_PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_588ec0da032008_20893545',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588ec0da032008_20893545')) {function content_588ec0da032008_20893545($_smarty_tpl) {?><div class="right_contact_201601" id="right_contact_201601">
			<ul>
				<li class="li_top" onclick="gotop_201601()"></li>
				<li class="li_tel">
					<div class="hover">
						<div class="text"><?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['TELPHONE'];?>
<br><?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['MOBILE'];?>
 </div>
					</div>
				</li>
				<li class="li_qq">
					<div class="text">
						<a target="_blank" rel="nofollow" href="#"><img border="0" src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
/defualtimg/qq.png" width="90px" height="20px" alt="<?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['QQ2'];?>
"></a><br>
						</div>
				</li>
				<li class="li_close" onclick="close_contact_201601()"></li>
			</ul>
		</div><?php }} ?>
