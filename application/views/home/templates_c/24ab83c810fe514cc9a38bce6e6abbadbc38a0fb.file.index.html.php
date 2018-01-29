<?php /* Smarty version Smarty-3.1.16, created on 2017-06-14 17:51:23
         compiled from "/Users/gonghuayao/Sites/ghyCMS/application/views/home/templates/m/index.html" */ ?>
<?php /*%%SmartyHeaderCode:933257157588ebedf925c52-30918123%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24ab83c810fe514cc9a38bce6e6abbadbc38a0fb' => 
    array (
      0 => '/Users/gonghuayao/Sites/ghyCMS/application/views/home/templates/m/index.html',
      1 => 1485848470,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '933257157588ebedf925c52-30918123',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_588ebedf97e826_83865721',
  'variables' => 
  array (
    'WEB_INFO' => 0,
    'CUR_VIEW_PATH' => 0,
    'bannerList' => 0,
    'banner' => 0,
    'i' => 0,
    'sort1' => 0,
    'v' => 0,
    'case' => 0,
    'news' => 0,
    'n' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588ebedf97e826_83865721')) {function content_588ebedf97e826_83865721($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/gonghuayao/Sites/ghyCMS/application/third_party/smarty/plugins/modifier.truncate.php';
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
		<link href="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/css/basic.css" type="text/css" rel="stylesheet" />
		<script src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/js/jquery.min.js" type="text/javascript"></script>
		<script src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/js/TouchSlide.1.0.js" type="text/javascript"></script>
		<script src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/js/basic.js" type="text/javascript"></script>
	</head>

	<body>
		

            <!-- header -->
			<?php echo $_smarty_tpl->getSubTemplate ('m/head.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<!-- header -->

		<section class="banner width100">
			<div id="focus" class="focus" style="overflow:hidden;">
				<div class="hd">
					<ul></ul>
				</div>
				<div class="bd">
					<ul>
					<?php $_smarty_tpl->tpl_vars["i"] = new Smarty_variable(0, null, 0);?>
					<?php  $_smarty_tpl->tpl_vars['banner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['banner']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bannerList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['banner']->key => $_smarty_tpl->tpl_vars['banner']->value) {
$_smarty_tpl->tpl_vars['banner']->_loop = true;
?>
					 <?php if ($_smarty_tpl->tpl_vars['banner']->value['type']=="微信端") {?>
					 
						<li <?php if ($_smarty_tpl->tpl_vars['i']->value!=0) {?>style="display:none;" <?php }?>>
							<a title="<?php echo $_smarty_tpl->tpl_vars['banner']->value['name'];?>
" target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['banner']->value['url'];?>
"><img _src="<?php echo $_smarty_tpl->tpl_vars['banner']->value['picture'];?>
"   /></a>
						</li>
						
						<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
				     <?php }?>
					<?php } ?>
						 
					</ul>
				</div>
			</div>
		</section>
		<script type="text/javascript">
			//index news show_more
			function show_more(i) {
				$(".news_list dl:not(.dl" + i + ")").each(function() {
					$(this).find('dt').show();
					$(this).find('.t').hide();
					$(this).find('.spec').hide();
				});
				$(".dl" + i).find('dt').hide();
				$(".dl" + i).find('.t').show();
				$(".dl" + i).find('.spec').show();
			}
			TouchSlide({
				slideCell: "#focus",
				titCell: ".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
				mainCell: ".bd ul",
				effect: "left",
				autoPlay: true, //自动播放
				autoPage: true, //自动分页
				switchLoad: "_src" //切换加载，真实图片路径为"_src"
			});

			// $('.preloader').fadeOut('300', function() {
			//     $('.body').css('opacity', 1);
			// });
		</script>
		<section class="width100">
			<div class="service_t">
				<a href="/index.php?c=single&m=service"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/images/index_t_service.jpg" class="width100" alt="品牌官网设计" /></a>
			</div>
			<div class="service_list">
			<?php $_smarty_tpl->tpl_vars["i"] = new Smarty_variable(1, null, 0);?>
			<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sort1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
				<dl <?php if ($_smarty_tpl->tpl_vars['i']->value%2==1) {?> class="f" <?php }?>><dt><a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['u5'];?>
" class="width100" /></a></dt>
					<dd class="t">
						<a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
" class="f28"><em class="f28">0<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</em><?php echo $_smarty_tpl->tpl_vars['v']->value['u1'];?>
</a>
					</dd>
					<dd class="spec">
						<a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
x" class="f24"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['v']->value['u6'],27,"...",true);?>

						</a>
					</dd>
					<dd class="btn">
						<a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/images/index_btn_service.jpg" alt="点击查看" class="width100" /></a>
					</dd>
				</dl>
				<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
				<?php } ?>	 
				<div class="c"></div>
			</div>
		</section>
		<section class="width100">
			<div class="case_t">
				<a href="/index.php?c=list&sort_id=27"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/images/index_t_case.jpg" class="width100" alt="成功案例" /></a>
			</div>
			<div class="case_list">
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['case']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
				<dl><dt><a href="/index.php?c=page&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['suolutu'];?>
" alt='<?php echo $_smarty_tpl->tpl_vars['v']->value['biaoti'];?>
' class="width100"  style="height:110px"/></a></dt>
					<dd>
						<a href="/index.php?c=page&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="f24"><?php echo $_smarty_tpl->tpl_vars['v']->value['biaoti'];?>
</a>
					</dd>
				</dl>
				<?php } ?>	
				 
				<div class="c"></div>
			</div>
		</section>
		<section class="width100">
			<div class="news_t">
				<a href="/index.php?c=list&sort_id=17"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/images/index_t_news.jpg" class="width100" /></a>
			</div>
			 
			<div class="news_list">
			<?php $_smarty_tpl->tpl_vars["i"] = new Smarty_variable(1, null, 0);?>
			<?php  $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['n']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['news']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['n']->key => $_smarty_tpl->tpl_vars['n']->value) {
$_smarty_tpl->tpl_vars['n']->_loop = true;
?>
				<dl class="dl<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><dt onClick="show_more('<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
')"><a href="javascript:void(0)" class="f24"><span class="f28">+</span><?php echo $_smarty_tpl->tpl_vars['n']->value['biaoti'];?>
</a></dt>
				<dt class="t"><a href="/index.php?c=page&id=<?php echo $_smarty_tpl->tpl_vars['n']->value['id'];?>
" class="f24"><span class="f28">-</span><?php echo $_smarty_tpl->tpl_vars['n']->value['biaoti'];?>
</a></dt>
					<dd class="spec">
						<a href="/index.php?c=page&id=<?php echo $_smarty_tpl->tpl_vars['n']->value['id'];?>
" class="f20"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['n']->value['description'],130,"...",true);?>
</a>
					</dd>
				</dl>
				<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
			<?php } ?>	
								 
				<div class="btn_more">
					<a class="f24" href="/index.php?c=list&sort_id=17">查看更多>></a>
				</div>
			</div>
		</section>
		<!-- footer -->
			<?php echo $_smarty_tpl->getSubTemplate ('m/foot.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<!-- footer -->
	</body>

</html><?php }} ?>
