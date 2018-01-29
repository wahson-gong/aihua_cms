<?php /* Smarty version Smarty-3.1.16, created on 2017-01-30 12:29:17
         compiled from "/Users/gonghuayao/Sites/ghyCMS/application/views/home/templates/defualt/articledetail.html" */ ?>
<?php /*%%SmartyHeaderCode:489850541588ec11dbb4c74-52034071%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6a442a7da27ee4c79fc272435a872c0df213640' => 
    array (
      0 => '/Users/gonghuayao/Sites/ghyCMS/application/views/home/templates/defualt/articledetail.html',
      1 => 1485750326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '489850541588ec11dbb4c74-52034071',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tableDetail' => 0,
    'WEB_INFO' => 0,
    'CUR_VIEW_PATH' => 0,
    'curSortNames' => 0,
    'tableFront' => 0,
    'tableNext' => 0,
    'tableList' => 0,
    't' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_588ec11dcb0764_10403308',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588ec11dcb0764_10403308')) {function content_588ec11dcb0764_10403308($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Users/gonghuayao/Sites/ghyCMS/application/third_party/smarty/plugins/modifier.date_format.php';
?><!DOCTYPE html>
<html>

	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta http-equiv="Cache-Control" "no-transform" /> 
		<title><?php echo $_smarty_tpl->tpl_vars['tableDetail']->value['biaoti'];?>
_<?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['SEOTITLE'];?>
</title>
		<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['SEOKEYWORDS'];?>
, <?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['seokeywords'];?>
" />
		<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['SEODESCRIPTION'];?>
,<?php echo $_smarty_tpl->tpl_vars['tableDetail']->value['seodescription'];?>
" />
		<link href="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
defualt/css/style.css" type="text/css" rel="stylesheet" />
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
		<script src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
defualt/js/base.js" type="text/javascript"></script>
		</head>

	<body>
		    <!-- header -->
	   		<?php echo $_smarty_tpl->getSubTemplate ('defualt/head.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<!-- header -->
			 
		<div style="background: url('<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
defualt/img/n_banner01.jpg') center no-repeat;height: 120px;"></div>
		<div class="crumbs">
			<div class="wrap"><i class="icon"></i>当前位置：
				<a href="/">首页</a>><?php echo $_smarty_tpl->tpl_vars['curSortNames']->value;?>

		   </div>
		</div>
		<div class="news_info fix">
			<div class="news_box fl">
				
				<div class="news_title">
					<div class="news_page fr">
					   
					   <?php if ($_smarty_tpl->tpl_vars['tableFront']->value[0]['biaoti']=='') {?>
						<?php } else { ?>
						<a title="<?php echo $_smarty_tpl->tpl_vars['tableFront']->value[0]['biaoti'];?>
" href="index.php?c=page&id=<?php echo $_smarty_tpl->tpl_vars['tableFront']->value[0]['id'];?>
" class="prev btn"><</a>
						<?php }?>
					   <?php if ($_smarty_tpl->tpl_vars['tableNext']->value[0]['biaoti']=='') {?>
						<?php } else { ?>
						<a title="<?php echo $_smarty_tpl->tpl_vars['tableNext']->value[0]['biaoti'];?>
" href="index.php?c=page&id=<?php echo $_smarty_tpl->tpl_vars['tableNext']->value[0]['id'];?>
" class="next btn">></a>
						<?php }?>
					   
						
					</div>
					<h2><?php echo $_smarty_tpl->tpl_vars['tableDetail']->value['biaoti'];?>
</h2>
					<p class="sign">
					<span class="mark">发表日期：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['tableDetail']->value['dtime'],'%Y-%m-%d ');?>
 </span><span class="mark">文章编辑：<?php echo $_smarty_tpl->tpl_vars['tableDetail']->value['laiyuan'];?>
 </span><span class="mark">浏览次数：<?php echo $_smarty_tpl->tpl_vars['tableDetail']->value['renqi'];?>
</span> 
                    </p>
				</div>
				
				<div class="demo">
					<div class="editor" id="editor">
					
					   <?php echo $_smarty_tpl->tpl_vars['tableDetail']->value['content'];?>

						</div>
				</div>
				
				<div class="page_list fix">
					<a href="index.php?c=list&sort_id=<?php echo $_smarty_tpl->tpl_vars['tableDetail']->value['sort_id'];?>
" class="return">返回列表</a>
					<ul>
						<li> 
						<?php if ($_smarty_tpl->tpl_vars['tableNext']->value[0]['biaoti']=='') {?>
						没有了哦
						<?php } else { ?>
						下一篇：
							<a href="index.php?c=page&id=<?php echo $_smarty_tpl->tpl_vars['tableNext']->value[0]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['tableNext']->value[0]['biaoti'];?>
</a>
							
						<?php }?>
						     
						</li>
						
						<li> 
						<?php if ($_smarty_tpl->tpl_vars['tableFront']->value[0]['biaoti']=='') {?>
						没有了哦
						<?php } else { ?>
						上一篇：
					   <a href="index.php?c=page&id=<?php echo $_smarty_tpl->tpl_vars['tableFront']->value[0]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['tableFront']->value[0]['biaoti'];?>
</a>
						<?php }?>
						</li>
						
						
					</ul>
				</div>
				
				
			</div>
			
			<div class="news_menu fr">
				<dl><dt>其他<?php echo $_smarty_tpl->tpl_vars['tableList']->value[0]['parent_sortname'];?>
</dt>
					<?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tableList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
?>
					<dd>
						<h3><a href="index.php?c=page&id=<?php echo $_smarty_tpl->tpl_vars['t']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['t']->value['biaoti'];?>
</a></h3>
						<p class="text">
							<a href="index.php?c=page&id=<?php echo $_smarty_tpl->tpl_vars['t']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['t']->value['description'];?>
</a>
						</p>
					</dd>
					<?php } ?>
				</dl>
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

<?php }} ?>
