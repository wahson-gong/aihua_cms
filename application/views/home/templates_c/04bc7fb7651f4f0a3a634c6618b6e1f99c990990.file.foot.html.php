<?php /* Smarty version Smarty-3.1.16, created on 2017-01-30 13:16:29
         compiled from "/Users/gonghuayao/Sites/ghyCMS/application/views/home/templates/defualt/foot.html" */ ?>
<?php /*%%SmartyHeaderCode:29859029588ebabfbc3589-18332182%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04bc7fb7651f4f0a3a634c6618b6e1f99c990990' => 
    array (
      0 => '/Users/gonghuayao/Sites/ghyCMS/application/views/home/templates/defualt/foot.html',
      1 => 1485753006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29859029588ebabfbc3589-18332182',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_588ebabfc35cf1_92346154',
  'variables' => 
  array (
    'aboutusFoot' => 0,
    'caseFooter' => 0,
    'n' => 0,
    'sortFooter' => 0,
    's' => 0,
    'WEB_INFO' => 0,
    'lianjie' => 0,
    'l' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588ebabfc35cf1_92346154')) {function content_588ebabfc35cf1_92346154($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/gonghuayao/Sites/ghyCMS/application/third_party/smarty/plugins/modifier.truncate.php';
?><footer class="footer">
				<div class="contact">
					<div class="wrap">
						<div class="home_about fl">
							<dl><dt><a href="#">关于我们</a></dt>
								<dd>
								<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['aboutusFoot']->value[0]['description'],200,"...",true);?>

                                </dd>
								<dd>
									<a href="/index.php?c=about" class="more">查看更多 &gt;&gt;</a>
								</dd>
							</dl>
						</div>
						<div class="home_case fl">
							<h2><a href="/index.php?c=case">最新案例</a></h2>
							<ul>
							<?php  $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['n']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['caseFooter']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['n']->key => $_smarty_tpl->tpl_vars['n']->value) {
$_smarty_tpl->tpl_vars['n']->_loop = true;
?>
								<li>
									<a href="/index.php?c=page&id=<?php echo $_smarty_tpl->tpl_vars['n']->value['id'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['n']->value['suolutu'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['n']->value['biaoti'];?>
" width="80" height="52"  onerror="javascript:this.src='application/views/admin/images/nopic.jpg';></a>
									<h5><a href="/index.php?c=page&id=<?php echo $_smarty_tpl->tpl_vars['n']->value['id'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['n']->value['biaoti'];?>
</a></h5>
									<p class="text">
										<a href="/index.php?c=page&id=<?php echo $_smarty_tpl->tpl_vars['n']->value['id'];?>
" target="_blank"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['n']->value['description'],30,"...",true);?>
</a>
									</p>
								</li>
							<?php } ?>
							</ul>
						</div>
						<div class="home_service fl">
							<h2><a href="/index.php?c=single&m=service">服务范围</a></h2>
							<?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sortFooter']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
							<a class="sub" href="<?php echo $_smarty_tpl->tpl_vars['s']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['s']->value['u1'];?>
</a>
							<?php } ?>

						</div>
						<div class="home_contact fl">
							<h2><a href="#">联系我们</a></h2>
							<ul>
								<li><i class="addres"></i>地 址：<?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['COMPANYADDRESS'];?>
</li>
								<li><i class="weibo"></i>Q Q：
									<a target="_blank" rel="nofollow" href="#"><?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['QQ2'];?>
 </a>
								</li>
								<li><i class="email"></i>邮 箱：
									<a target="_blank" rel="nofollow" href="#"><?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['EMAIL'];?>
</a>
								</li>
								<li><i class="call"></i>电 话：<?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['MOBILE'];?>
  <?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['TELPHONE'];?>
</li>
								
							</ul>
						</div>
					</div>
				</div>
				<div class="blogroll">
					<div class="wrap">
						友情链接：
						<?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lianjie']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->_loop = true;
?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['l']->value['lianjie'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['l']->value['biaoti'];?>
</a>&nbsp;
						<?php } ?>
						<p class="copyright">@2015-2025  版权所有 <?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['COMPANYNAME'];?>
  </p>
						<p class="copyright"> <?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['COMPANYADDRESS'];?>
   </p>
					</div>
				</div>
			</footer><?php }} ?>
