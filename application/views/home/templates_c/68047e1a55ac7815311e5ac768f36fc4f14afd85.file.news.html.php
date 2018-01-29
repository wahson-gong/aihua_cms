<?php /* Smarty version Smarty-3.1.16, created on 2017-06-14 17:51:43
         compiled from "/Users/gonghuayao/Sites/ghyCMS/application/views/home/templates/m/news.html" */ ?>
<?php /*%%SmartyHeaderCode:2002715168588ecc326f78c6-66682907%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68047e1a55ac7815311e5ac768f36fc4f14afd85' => 
    array (
      0 => '/Users/gonghuayao/Sites/ghyCMS/application/views/home/templates/m/news.html',
      1 => 1485924294,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2002715168588ecc326f78c6-66682907',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_588ecc32750442_51609017',
  'variables' => 
  array (
    'WEB_INFO' => 0,
    'CUR_VIEW_PATH' => 0,
    'sort' => 0,
    'i' => 0,
    's' => 0,
    'tableModel' => 0,
    'c' => 0,
    'pageinfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588ecc32750442_51609017')) {function content_588ecc32750442_51609017($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Users/gonghuayao/Sites/ghyCMS/application/third_party/smarty/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) include '/Users/gonghuayao/Sites/ghyCMS/application/third_party/smarty/plugins/modifier.truncate.php';
?><!DOCTYPE HTML>
<html lang="zh-CN">

	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title><?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['SEOTITLE'];?>
</title>
		<meta name="Keywords" content="<?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['SEOKEYWORDS'];?>
">
		<meta name="Description" content="<?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['SEODESCRIPTION'];?>
">
		<meta name="applicable-device" content="mobile" >
		<link href="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/css/basic.css" type="text/css" rel="stylesheet" />
		<script src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/js/jquery.min.js" type="text/javascript"></script>
		<script src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/js/basic.js" type="text/javascript"></script>
	</head>

	<body>
		<header class="width100 header2">
			<div class="fl back">
				<a href="javascript:window.history.back()"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/images/back.jpg" alt="返回" class="width100" /></a>
			</div>
			<div class="title f36 fl">新闻资讯</div>
			<div class="fr nav"><img onClick="show_top_nav()" alt="深圳网站建设" src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/images/menu.jpg" class="width100" /></div>
			<div class="c"></div>
			<div style="width:0px;height:0px;overflow:hidden"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/images/fangwei4.jpg" /></div>
			<div class="top_nav">
				<ul>
					<!-- footer -->
			<?php echo $_smarty_tpl->getSubTemplate ('m/head_sub.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<!-- footer -->
				</ul>
			</div>
		</header>
		<section class="width100">
			<div class="case_t"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/images/news_t.jpg" class="width100" alt="网站建设资讯" /></div>
			<div class="news_type">
				<ul class="fix">
				<?php $_smarty_tpl->tpl_vars["i"] = new Smarty_variable(1, null, 0);?>
				<?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sort']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
				  <?php if ($_smarty_tpl->tpl_vars['i']->value<=3) {?>
					<li>
						<a href="/index.php?c=list&sort_id=<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
" class="f26 li1"><?php echo $_smarty_tpl->tpl_vars['s']->value['u1'];?>
</a>
					</li>
					<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
					<?php }?>
					
				<?php } ?>	
					<li class="more" onClick="show_more_type()">
						<a class="f26">更多<span><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/images/ico_d.png" class="width100" /></span></a>
					</li>
				</ul>
				<dl id="news_type_hid">
				<?php $_smarty_tpl->tpl_vars["i"] = new Smarty_variable(1, null, 0);?>
				<?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sort']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
				  <?php if ($_smarty_tpl->tpl_vars['i']->value>3) {?>
					<dd>
						<a href="/index.php?c=list&sort_id=<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
" class="f26"><span><?php echo $_smarty_tpl->tpl_vars['s']->value['u1'];?>
</span>
							<div><img alt="<?php echo $_smarty_tpl->tpl_vars['s']->value['u1'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/images/news_jiantou.png" class="width100" /></div>
						</a>
					</dd>
					<?php }?>
					<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
				<?php } ?>	 
				</dl>
			</div>
			<div class="news_list_inner">
				<div id="news_list_html">
				
				 <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tableModel']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
					<div class="news_item">
						<dl class="fl"><dt class="f60"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['c']->value['dtime'],'%d ');?>
</dt>
							<dd class="month f22"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['c']->value['dtime'],'%Y-%m');?>
</dd>
							<dd class="author f20"><?php echo $_smarty_tpl->tpl_vars['c']->value['laiyuan'];?>
</dd>
							<dd class="line"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/images/news_line.jpg" alt="line" class="width100" /></dd>
							 
						</dl>
						<dl class="fr"><dt><a href="/index.php?c=page&id=<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
" class="f26"><?php echo $_smarty_tpl->tpl_vars['c']->value['biaoti'];?>
</a></dt>
							<dd class="spec">
								<a href="/index.php?c=page&id=<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
" class="f20"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['c']->value['description'],80,"...",true);?>
</a>
							</dd>
							<dd class="more fix"><span class=" f20 hits_t">浏览次数：</span><span class="f20 hits_num"><?php echo $_smarty_tpl->tpl_vars['c']->value['renqi'];?>
</span>
								<a class="btn_a" href="/index.php?c=page&id=<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
">查看更多>></a>
							</dd>
						</dl>
						<div class="c"></div>
					</div>
					  <?php } ?>	
				</div>
				<div class="c"></div>
				<div class="btn_more">
					<div class="page">
			         <?php echo $_smarty_tpl->tpl_vars['pageinfo']->value;?>

			        </div>
                </div> 
            </div>
		</section>
	   <!-- footer -->
			<?php echo $_smarty_tpl->getSubTemplate ('m/foot.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<!-- footer -->
		<script>
			$(".news_item").each(function() {
				$(this).find('fl').height($(this).height());
			});

			function show_more_type() {
				if($("#news_type_hid").is(":visible")) {
					$("#news_type_hid").hide();
				} else {
					$("#news_type_hid").show();
				}
			}

			function get_more_news() {
				var page = $("#page").val();
				var class_id = $("#class_id").val();
				page++;
				$("#page").val(page);
				$.ajax({
					url: "/News/ajax_get_more?page=" + page + "&class_id=" + class_id,
					cache: false,
					success: function(val) {
						if(val == "") {
							$("#btn_get_more").html("已经没有了")
						} else {
							$("#news_list_html").append(val);
						}
					}
				})
			}
			$("#menu_1").attr('src', '<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/images/nav_1.jpg');
			$("#menu_4").attr('src', '<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/images/nav_4_2.jpg');
		</script>
	</body>

</html><?php }} ?>
