<?php /* Smarty version Smarty-3.1.16, created on 2017-01-30 12:28:28
         compiled from "/Users/gonghuayao/Sites/ghyCMS/application/views/home/templates/defualt/solutions.html" */ ?>
<?php /*%%SmartyHeaderCode:699518087588ec0ec1058d6-17895481%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49d13c3015b543d9d10879e742dbcbc2d1071499' => 
    array (
      0 => '/Users/gonghuayao/Sites/ghyCMS/application/views/home/templates/defualt/solutions.html',
      1 => 1485750231,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '699518087588ec0ec1058d6-17895481',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'WEB_INFO' => 0,
    'CUR_VIEW_PATH' => 0,
    'tableModel' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_588ec0ec1adb96_53231375',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588ec0ec1adb96_53231375')) {function content_588ec0ec1adb96_53231375($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/gonghuayao/Sites/ghyCMS/application/third_party/smarty/plugins/modifier.truncate.php';
?><!DOCTYPE html>
<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title><?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['SEOTITLE'];?>
</title>
		<meta name="Keywords" content="<?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['SEOKEYWORDS'];?>
">
		<meta name="Description" content="<?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['SEODESCRIPTION'];?>
">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<link href="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
defualt/css/style.css" type="text/css" rel="stylesheet" />
		<meta http-equiv="Cache-Control" content="no-transform" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
		</head>

	<body>
		   <!-- header -->
	   		<?php echo $_smarty_tpl->getSubTemplate ('defualt/head.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<!-- header -->
		<script type="text/javascript">
			document.getElementById("menu6").className = "on";
		</script>
		<!--banner-->
		<div class="inside_banner_solution"></div>
		<div class="solution">
			<div class="home_title"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
defualt/img/sl01.jpg" width="182" height="54" alt="网站建设解决方案"></div>
			<div class="solution_list">
				<ul class="fix">
					
					<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tableModel']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
					<li>
						<div class="solu_img">
							<a href="/index.php?c=page&id=<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
" target="_blank" class="shade"></a>
							<div class="img_icon">
								<a href="/index.php?c=page&id=<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
defualt/img/sl_icon.png" alt="查看<?php echo $_smarty_tpl->tpl_vars['c']->value['biaoti'];?>
" width="40" height="40"></a>
							</div><img src="<?php echo $_smarty_tpl->tpl_vars['c']->value['suolutu'];?>
" width="370" height="120" alt="<?php echo $_smarty_tpl->tpl_vars['c']->value['biaoti'];?>
"></div>
						<h2><a href="/index.php?c=page&id=<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['c']->value['biaoti'];?>
</a></h2>
						<p class="intro">
							<a href="/index.php?c=page&id=<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
" target="_blank"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['c']->value['description'],150,"...",true);?>
</a>
						</p>
					</li>
					 <?php } ?>	
				</ul>
			</div>
		</div>
		 <!-- footer -->
			<?php echo $_smarty_tpl->getSubTemplate ('defualt/foot.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<!-- footer -->

            <!-- right -->
			<?php echo $_smarty_tpl->getSubTemplate ('defualt/right_tip.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<!-- right -->

	</body>

</html>

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
</script><?php }} ?>
