<?php /* Smarty version Smarty-3.1.16, created on 2017-01-30 13:16:27
         compiled from "/Users/gonghuayao/Sites/ghyCMS/application/views/home/templates/m/foot.html" */ ?>
<?php /*%%SmartyHeaderCode:159435272588eca2a35cf71-98376599%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8c5e0d22b67aec0c187753b51015e0a254dd833' => 
    array (
      0 => '/Users/gonghuayao/Sites/ghyCMS/application/views/home/templates/m/foot.html',
      1 => 1485753383,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '159435272588eca2a35cf71-98376599',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_588eca2a390a01_89301963',
  'variables' => 
  array (
    'sortFooter' => 0,
    's' => 0,
    'CUR_VIEW_PATH' => 0,
    'WEB_INFO' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588eca2a390a01_89301963')) {function content_588eca2a390a01_89301963($_smarty_tpl) {?><footer>
	<div class="foot_service">
		<div class="foot_service_t">
			<a class="f30" href="/Service/index">服务范围</a>
		</div>
		<div class="foot_service_list">
			<ul class="fix">
			<?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sortFooter']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['s']->value['url'];?>
" class="f24"><?php echo $_smarty_tpl->tpl_vars['s']->value['u1'];?>
</a></li>
		    <?php } ?>
			</ul>
		</div>
	</div>
	<div class="foot_contact">
		<div class="foot_contact_t">
			<a class="f30" href="/Contact/index">联系我们</a>
		</div>
		<div class="foot_contact_list">
			<ul class="fix">
				<li class="f24">
					<div>
						<img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/images/foot_ico_home.png"
							class="width100" />
					</div>地址： <a href="/Contact/map"><?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['COMPANYADDRESS'];?>
</a>
				</li>
				<li class="f24">
					<div>
						<img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/images/foot_ico_qq.png"
							class="width100" />
					</div>Q Q： <a rel="nofollow"
					href="#"><?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['QQ2'];?>
</a>
				</li>
				<li class="f24">
					<div>
						<img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/images/foot_ico_email.png"
							class="width100" />
					</div>邮箱： <a rel="nofollow" href="mailto:<?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['EMAIL'];?>
"><?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['EMAIL'];?>
</a>
				</li>
				<li class="f24">
					<div>
						<img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/images/foot_ico_tel.png"
							class="width100" />
					</div>电话： <a rel="nofollow" href="tel:<?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['MOBILE'];?>
"><?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['MOBILE'];?>
</a>
				</li>
				 
			</ul>
		</div>
	</div>
	<div class="copyright f20">
		@2015-2025 版权所有 <?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['COMPANYNAME'];?>
  <br> 
	</div>
</footer>
<nav>
	<ul>
		<li><a href="/"><img id="menu_1"
				src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/images/nav_1_2.jpg" alt="网站建设"
				class="width100" /></a></li>
		<li><a href="tel:<?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['MOBILE'];?>
"><img
				src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/images/nav_2.jpg" class="width100"
				alt="网站建设咨询电话" /></a></li>
		<li><a href="/index.php?c=list&sort_id=27"><img id="menu_3"
				src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/images/nav_3.jpg" class="width100"
				alt="网站建设案例" /></a></li>
		<li><a href="/index.php?c=list&sort_id=17"><img id="menu_4"
				src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/images/nav_4.jpg" class="width100"
				alt="网站建设资讯" /></a></li>
	</ul>
</nav>
<div style="display: none">
	<script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';        
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>
</div><?php }} ?>
