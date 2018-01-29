<?php /* Smarty version Smarty-3.1.16, created on 2017-06-14 14:47:24
         compiled from "/Users/gonghuayao/Sites/ghyCMS/application/views/home/templates/defualt/news.html" */ ?>
<?php /*%%SmartyHeaderCode:1849354885588ec0efdfc069-73031685%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61936009d16090617ebe609c688874baa3d7237f' => 
    array (
      0 => '/Users/gonghuayao/Sites/ghyCMS/application/views/home/templates/defualt/news.html',
      1 => 1485924232,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1849354885588ec0efdfc069-73031685',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_588ec0efedf702_57412728',
  'variables' => 
  array (
    'WEB_INFO' => 0,
    'CUR_VIEW_PATH' => 0,
    'sort' => 0,
    's' => 0,
    'tableModel' => 0,
    'c' => 0,
    'pageinfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588ec0efedf702_57412728')) {function content_588ec0efedf702_57412728($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Users/gonghuayao/Sites/ghyCMS/application/third_party/smarty/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) include '/Users/gonghuayao/Sites/ghyCMS/application/third_party/smarty/plugins/modifier.truncate.php';
?><!DOCTYPE html>
<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="Cache-Control" "no-transform" /> 
		<title><?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['SEOTITLE'];?>
</title>
		<meta name="Keywords" content="<?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['SEOKEYWORDS'];?>
">
		<meta name="Description" content="<?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['SEODESCRIPTION'];?>
">
		<meta name="applicable-device" content="pc" >
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<link href="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
defualt/css/style.css" type="text/css" rel="stylesheet">
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
		<script src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
defualt/js/news.js" type="text/javascript"></script>
	</head>

	<body>
		<!-- header -->
		<?php echo $_smarty_tpl->getSubTemplate ('defualt/head.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<!-- header -->
		<script type="text/javascript">
			document.getElementById("menu7").className = "on";
		</script>
		<!--banner-->
		<div class="inside_banner_news">
			<div class="wrap posr">
				<div class="news_seek"><input type="text" id="searchkey" name="searchkey" value="" class="text"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
defualt/img/btn_search.png" alt="网站建设资讯搜索" onclick="search_news()" width="16" height="16"></div>
			</div>
		</div>
		<div class="news_tab">
			<ul class="fix">
                 <li class="color1">
					<a href="/index.php?c=list&sort_id=17">
						<h2>全部资讯</h2>
					</a>
				</li>
                <?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sort']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['s']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
 $_smarty_tpl->tpl_vars['s']->index++;
?>
                <li class="color<?php echo $_smarty_tpl->tpl_vars['s']->index+2%10;?>
">
					<a href="/index.php?c=list&sort_id=<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
">
						<h2><?php echo $_smarty_tpl->tpl_vars['s']->value['u1'];?>
</h2>
					</a>
				</li>
				
				<?php } ?>	
				

			</ul>
		</div>
		<div class="news_list">
			<ul>
            
            
             <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tableModel']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
				<li>
					<div class="news_time fl"><span class="day"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['c']->value['dtime'],'%d ');?>
</span><span class="year"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['c']->value['dtime'],'%Y-%m');?>
</span><span class="author"><?php echo $_smarty_tpl->tpl_vars['c']->value['laiyuan'];?>
</span></div>
					<div class="news_cont fr">
						<h2><a href="/index.php?c=page&id=<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['c']->value['biaoti'];?>
</a></h2>
						<p class="demo">
							<a href="/index.php?c=page&id=<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
" target="_blank"> 
							<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['c']->value['description'],240,"...",true);?>

							</a>
						</p>
						<p class="vis">
							<a href="/index.php?c=page&id=<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
" target="_blank" class="more btn">查看更多 &gt;&gt;</a>浏览次数：<?php echo $_smarty_tpl->tpl_vars['c']->value['renqi'];?>
 &nbsp;&nbsp;
							
					</div>
				</li>
             <?php } ?>	
             
             
			</ul>
		</div>
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

</html>
<?php }} ?>
