<?php /* Smarty version Smarty-3.1.16, created on 2017-01-30 12:19:48
         compiled from "/Users/gonghuayao/Sites/ghyCMS/application/views/home/templates/defualt/head.html" */ ?>
<?php /*%%SmartyHeaderCode:1453074022588ebabfb8c665-57172563%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd927677cbb2e9032d2d8129587b3fb9817d85a59' => 
    array (
      0 => '/Users/gonghuayao/Sites/ghyCMS/application/views/home/templates/defualt/head.html',
      1 => 1485749968,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1453074022588ebabfb8c665-57172563',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_588ebabfbbcda0_52394616',
  'variables' => 
  array (
    'CUR_VIEW_PATH' => 0,
    'WEB_INFO' => 0,
    'sortHead' => 0,
    'k' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588ebabfbbcda0_52394616')) {function content_588ebabfbbcda0_52394616($_smarty_tpl) {?><header class="header">
				<div class="wrap">
					<h1 class="fl"><a href="/" class="fl logo"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
defualt/img/logo.jpg" alt="网站建设" width="154" height="76"></a></h1>
					<div class="fl logo_text"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
defualt/img/logo_text.jpg" alt="懂你所需，做你所想" width="163" height="49"></div>
					<div class="fr">
						<div class="top"><span class="call"></span><span class="call_tel"><?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['MOBILE'];?>
</span>
							<a><span class="email"></span><?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['EMAIL'];?>
</a>
							<a class="ewm"><span class="weixin"></span><?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['COMPANYNAME'];?>
 <img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
defualt/img/contact_weixin.jpg" width="258" height="258" alt="<?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['COMPANYNAME'];?>
微信"></a>
						</div>
						<nav class="nav">
							<ul class="fix">
							<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sortHead']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
				  
				                <li id="menu<?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
">
									<a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['u1'];?>
</a>
								</li>
			            	<?php } ?>	
							
							</ul><span class="nav_icon" style="left: 232.017px; width: 56px;"></span></nav>
					</div>
				</div>
			</header>
			<?php }} ?>
