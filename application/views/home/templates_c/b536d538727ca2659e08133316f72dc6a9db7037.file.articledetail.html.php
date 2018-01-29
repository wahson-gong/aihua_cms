<?php /* Smarty version Smarty-3.1.16, created on 2017-06-14 17:51:58
         compiled from "/Users/gonghuayao/Sites/ghyCMS/application/views/home/templates/m/articledetail.html" */ ?>
<?php /*%%SmartyHeaderCode:1797788259588ed19c15c5b8-26002008%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b536d538727ca2659e08133316f72dc6a9db7037' => 
    array (
      0 => '/Users/gonghuayao/Sites/ghyCMS/application/views/home/templates/m/articledetail.html',
      1 => 1485924300,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1797788259588ed19c15c5b8-26002008',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_588ed19c1a3398_09078267',
  'variables' => 
  array (
    'tableDetail' => 0,
    'WEB_INFO' => 0,
    'CUR_VIEW_PATH' => 0,
    'tableList' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588ed19c1a3398_09078267')) {function content_588ed19c1a3398_09078267($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Users/gonghuayao/Sites/ghyCMS/application/third_party/smarty/plugins/modifier.date_format.php';
?><!DOCTYPE HTML>
<html lang="zh-CN">

	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title><?php echo $_smarty_tpl->tpl_vars['tableDetail']->value['biaoti'];?>
_<?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['SEOTITLE'];?>
</title>
		<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['SEOKEYWORDS'];?>
, <?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['seokeywords'];?>
" />
		<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['SEODESCRIPTION'];?>
,<?php echo $_smarty_tpl->tpl_vars['tableDetail']->value['seodescription'];?>
" />
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
			<div class="title f36 fl"><?php echo $_smarty_tpl->tpl_vars['tableList']->value[0]['parent_sortname'];?>
</div>
			<div class="fr nav"><img onClick="show_top_nav()" alt="成都网站建设" src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
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
		<?php if ($_smarty_tpl->tpl_vars['tableList']->value[0]['parent_sortname']=='成功案例') {?>
		<div class="case_t"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/images/cases_t.jpg" class="width100"></div>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['tableList']->value[0]['parent_sortname']=='新闻资讯') {?>
		<div class="case_t"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/images/news_t.jpg" class="width100"></div>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['tableList']->value[0]['parent_sortname']=='解决方案') {?>
		<div class="case_t"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/images/solution_banner.jpg" class="width100"></div>
		<?php }?>
		
			<div class="news_info">
				<h1 class="f36"><?php echo $_smarty_tpl->tpl_vars['tableDetail']->value['biaoti'];?>
</h1>
				<div class="spec f24"><span>发表日期：</span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['tableDetail']->value['dtime'],'%Y-%m-%d ');?>
 &nbsp;&nbsp;&nbsp; <span>浏览次数：</span><?php echo $_smarty_tpl->tpl_vars['tableDetail']->value['renqi'];?>
</div>
				<div class="editor" id="editor">
                <?php echo $_smarty_tpl->tpl_vars['tableDetail']->value['content'];?>

                </div>
			</div>
		</section>
		 <script>
        var resizeContentID = "editor";
        var maxWidth = $("#editor").width();
        var images = document.getElementById(resizeContentID).getElementsByTagName("img");
        for (var i = 0; i < images.length; i++) {
            resizepic(images[i]);
        }
        function resizepic(thispic)
        {
            thispic.onload = function() {
                if (thispic.width > maxWidth) {
                    thispic.style.height = thispic.height * maxWidth / thispic.width + "px";
                    thispic.style.width = maxWidth + "px";
                }
            }
        }
        $("#menu_1").attr('src','<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/images/nav_1.jpg');
        $("#menu_4").attr('src','<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/images/nav_4_2.jpg');
    </script>
		 <!-- footer -->
			<?php echo $_smarty_tpl->getSubTemplate ('m/foot.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<!-- footer -->
	</body>

</html><?php }} ?>
