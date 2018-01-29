<?php /* Smarty version Smarty-3.1.16, created on 2017-01-30 12:28:14
         compiled from "/Users/gonghuayao/Sites/ghyCMS/application/views/home/templates/defualt/cases.html" */ ?>
<?php /*%%SmartyHeaderCode:937458010588ec0de890178-89325143%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4ce92f6b9ab93ecb1d4950b22e170f9e8e24c6a' => 
    array (
      0 => '/Users/gonghuayao/Sites/ghyCMS/application/views/home/templates/defualt/cases.html',
      1 => 1485750309,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '937458010588ec0de890178-89325143',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'WEB_INFO' => 0,
    'CUR_VIEW_PATH' => 0,
    'sort_id' => 0,
    'sort' => 0,
    's' => 0,
    'tableModel' => 0,
    'c' => 0,
    'pageinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_588ec0de943ec4_86348812',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588ec0de943ec4_86348812')) {function content_588ec0de943ec4_86348812($_smarty_tpl) {?><!DOCTYPE html>
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
defualt/css/style.css" type="text/css" rel="stylesheet">
		<script src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
defualt/js/base.js" type="text/javascript"></script>
		<script src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
defualt/js/case2016.js" type="text/javascript"></script>
		<meta http-equiv="Cache-Control" content="no-transform" />
        <meta http-equiv="Cache-Control" content="no-siteapp" />
	</head>

	<body>
	        <!-- header -->
	   		<?php echo $_smarty_tpl->getSubTemplate ('defualt/head.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<!-- header -->
	    <script type="text/javascript">
			document.getElementById("menu3").className = "on";
		</script>
		<!--banner-->
		<div class="inside_banner" style="background: url(<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
defualt/img/banner_case.jpg) no-repeat center;height: 400px;"></div>
		
		<div class="case_t wrap">
			<div class="case_t_img"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
defualt/img/case_t.jpg" width="156" height="39" alt="CASE"></div>
			<div class="case_t_title">案例</div>
			<div class="case_t_line"></div>
		</div>
		
		<div class="case_type201601 wrap">
			<ul class="fix">
				<li id="all" <?php if ($_smarty_tpl->tpl_vars['sort_id']->value=="27") {?>  class="sel" <?php }?>>
					<a href="/index.php?c=list&sort_id=27">ALL</a>
				</li>
				
				<?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sort']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
				<li id="sort<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['sort_id']->value==$_smarty_tpl->tpl_vars['s']->value['id']) {?>  class="sel" <?php }?>>
					<a href="/index.php?c=list&sort_id=<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['s']->value['u1'];?>
</a>
				</li>
				<?php } ?>	
				
			</ul>
			
			
			<div class="case_search">
				<div class="case_seek"><input type="text" value="" name="searchkey" id="searchkey" class="text"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
defualt/img/c03.jpg" onclick="search_cases()" alt="搜索网站案例" width="16" height="16"></div>
			</div>
		</div>
		<!---->
		<div class="case_list_201601">
			<ul class="portfolio-grid fix">
				<!-- Thumbnail -->
				<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tableModel']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
				<li class="thumbnail" style="display:block;opacity:1;">
					<a class="thumbnail_a" href="/index.php?c=page&id=<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['c']->value['suolutu'];?>
" class="cases_img" width="385" height="250" alt="<?php echo $_smarty_tpl->tpl_vars['c']->value['biaoti'];?>
"  onerror="javascript:this.src='application/views/admin/images/nopic.jpg';">
						<div class="projectinfo" style="display: none;"></div>
					</a>
					<div class="meta">
						<h4 class="fl"><a href="/index.php?c=page&id=<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['c']->value['biaoti'];?>
</a></h4>
						
						<div class="c"></div>
					</div>
				</li>
				<?php } ?>	
				
			</ul>
		</div>
		<div class="px20"></div>
		<div class="page">
		
			<?php echo $_smarty_tpl->tpl_vars['pageinfo']->value;?>

			
		</div>
		<div class="px20"></div>
		
            <!-- footer -->
			<?php echo $_smarty_tpl->getSubTemplate ('defualt/foot.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<!-- footer -->

            <!-- right -->
			<?php echo $_smarty_tpl->getSubTemplate ('defualt/right_tip.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<!-- right -->
		
	</body>

</html><?php }} ?>
