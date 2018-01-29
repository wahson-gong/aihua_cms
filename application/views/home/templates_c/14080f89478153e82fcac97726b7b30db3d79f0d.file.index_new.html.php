<?php /* Smarty version Smarty-3.1.16, created on 2017-01-30 11:58:07
         compiled from "/Users/gonghuayao/Sites/ghyCMS/application/views/home/templates/defualt/index_new.html" */ ?>
<?php /*%%SmartyHeaderCode:421524325588eb9cf97ff48-77135634%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14080f89478153e82fcac97726b7b30db3d79f0d' => 
    array (
      0 => '/Users/gonghuayao/Sites/ghyCMS/application/views/home/templates/defualt/index_new.html',
      1 => 1485748379,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '421524325588eb9cf97ff48-77135634',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'WEB_INFO' => 0,
    'CUR_VIEW_PATH' => 0,
    'bannerList' => 0,
    'banner' => 0,
    'k' => 0,
    'sort1' => 0,
    'v' => 0,
    'case' => 0,
    'sort2' => 0,
    'news' => 0,
    'n' => 0,
    'kehu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_588eb9cfad8d10_41305016',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588eb9cfad8d10_41305016')) {function content_588eb9cfad8d10_41305016($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Users/gonghuayao/Sites/ghyCMS/application/third_party/smarty/plugins/modifier.date_format.php';
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
css/index2016.css" type="text/css" rel="stylesheet">
		<script src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
js/index2016.js" type="text/javascript"></script>
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
	</head>

	<body>
		<div style="width:0px;height:0px;overflow:hidden"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
img/logo2.jpg"></div>
		<div id="section1" init="true" class="section section1">
			<!-- header -->
			<?php echo $_smarty_tpl->getSubTemplate ('head.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<!-- header -->
			<script type="text/javascript">
			document.getElementById("menu1").className = "on";
		    </script>
			
			<!--banner-->
			<div class="banner">
				
				<ul class="pic" id="pic">	
					<?php  $_smarty_tpl->tpl_vars['banner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['banner']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bannerList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['banner']->key => $_smarty_tpl->tpl_vars['banner']->value) {
$_smarty_tpl->tpl_vars['banner']->_loop = true;
?>
					<li style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['banner']->value['picture'];?>
);">
						<a title="<?php echo $_smarty_tpl->tpl_vars['banner']->value['name'];?>
" target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['banner']->value['url'];?>
"></a>
					</li>
					<?php } ?>
					
				</ul>
				<ul class="list" id="list_pic">
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['bannerList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
				   <?php if ($_smarty_tpl->tpl_vars['k']->value==0) {?>
				      <li class="on"  ></li>
				   <?php } else { ?>
				     <li class=""  ></li>
				   <?php }?>
				    
				<?php } ?>	
				</ul>
			</div>
		</div>
		<!--main-->
		<div id="section2" init="true" class="section section2">
			<div class="wrap">
				<div class="home_title">
					<a href="/index.php?c=service" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
img/t_service.jpg" width="262" height="78" alt="<?php echo $_smarty_tpl->tpl_vars['sort1']->value[0]['parent_u1'];?>
"></a>
				</div>
				<div class="service_text" ><?php echo $_smarty_tpl->tpl_vars['sort1']->value[0]['parent_u6'];?>
</div>
				<div class="serve_column">
					<ul class="fix">
						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sort1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
						<li class="c<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
							<dl>
							<dt class="pic"><a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
" target="_blank" ><img  src="<?php echo $_smarty_tpl->tpl_vars['v']->value['u5'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['v']->value['u1'];?>
" width="270" height="200"  onerror="javascript:this.src='application/views/admin/images/nopic.jpg';"></a></dt>
							<dt class="t"><a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value['u1'];?>
</a></dt>
								<dd><?php echo $_smarty_tpl->tpl_vars['v']->value['u6'];?>
</dd>
							</dl>
						</li>
					<?php } ?>	
					</ul>
					<div class="c"></div>
				</div>
			</div>
			<div class="service_foot">站在用户的角度思考问题，与客户深入沟通，找到网站设计与推广的最佳解决方案</div>
		</div>
		<!--case-->
		<div id="section3" init="false" class="section section3">
			<div class="succeed">
				<div class="succeed_title" >
					<a href="/index.php?c=list&sort_id=27"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
img/t_cases.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['case']->value[0]['parent_u1'];?>
" width="296" height="74"></a>
				</div>
				<div class="success_text"  ><?php echo $_smarty_tpl->tpl_vars['case']->value[0]['parent_u6'];?>

				</div>
			</div>
			<ul class="portfolio-grid fix">
				<!-- Thumbnail -->
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['case']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
				<li class="thumbnail" style="display:block;opacity:1;">
					<a class="thumbnail_a" href="/index.php?c=page&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" target="_blank">
					<img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['suolutu'];?>
" class="cases_img" alt="<?php echo $_smarty_tpl->tpl_vars['v']->value['biaoti'];?>
" onerror="javascript:this.src='application/views/admin/images/nopic.jpg';">
						<div class="projectinfo" style="display: none;"></div>
					</a>
					<div class="meta">
						<h4 class="fl"><a href="/index.php?c=page&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value['biaoti'];?>
</a></h4>
						<div class="c"></div>
					</div>
				</li>
				<?php } ?>	
				
			</ul>
			<div class="btn_cases_more">
				<a href="/index.php?c=list&sort_id=27" title="成功案例" class="btn">查看更多</a>
			</div>
		</div>
		<!-- solutions -->
		<div id="section4" init="false" class="section section4">
			<div class="home_solutions">
				<div class="home_solutions_title" >
					<a href="/index.php?c=list&sort_id=29" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
img/t_solutions.png" alt="<?php echo $_smarty_tpl->tpl_vars['sort2']->value[0]['parent_u1'];?>
" width="311" height="82"  onerror="javascript:this.src='application/views/admin/images/nopic.jpg';"></a>
				</div>
				<div class="home_solutions_text" ><?php echo $_smarty_tpl->tpl_vars['sort2']->value[0]['parent_u6'];?>
</div>
				<div class="home_solutions_list wrap" >
					<div class="home_solutions_list_inner">
						
						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sort2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
						<dl class="solu_dl_<?php echo $_smarty_tpl->tpl_vars['v']->value['paixu'];?>
"><dt><a href="#" target="_blank"></a></dt>
							<dd class="t">
								<a href="/index.php?c=page&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value['u1'];?>
</a>
							</dd>
							<dd class="spec"><?php echo $_smarty_tpl->tpl_vars['v']->value['u6'];?>
</dd>
							<dd class="bg"></dd>
						</dl>
						<?php } ?>	
						
						<div class="c"></div>
					</div>
				</div>
				<div class="btn_solutions_more">
					<a href="/index.php?c=list&sort_id=29" title="解决方案" class="btn">查看更多</a>
				</div>
			</div>
		</div>
		<!--news-->
		<div id="section5" init="false" class="section section5">
			<div class="home_news">
				<div class="home_news_title" >
					<a href="/index.php?c=list&sort_id=17" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
img/t_news.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['news']->value[0]['parent_u1'];?>
" width="310" height="71"></a>
				</div>
				<div class="home_news_text" ><?php echo $_smarty_tpl->tpl_vars['news']->value[0]['parent_u6'];?>
</div>
				<div class="home_news_list" >
					<div class="wrap">
						<div class="home_news_list_inner">
							
							<?php  $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['n']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['news']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['n']->key => $_smarty_tpl->tpl_vars['n']->value) {
$_smarty_tpl->tpl_vars['n']->_loop = true;
?>
							<div class="home_news_item">
								<dl><dt><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['n']->value['dtime'],'%Y-%m-%d ');?>
</dt>
									<dd class="t">
										<a href="/index.php?c=page&id=<?php echo $_smarty_tpl->tpl_vars['n']->value['id'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['n']->value['biaoti'];?>
</a>
									</dd>
									<dd class="spec">
										<a href="/index.php?c=page&id=<?php echo $_smarty_tpl->tpl_vars['n']->value['id'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['n']->value['description'];?>

										</a>
									</dd>
								</dl>
							</div>
							<?php } ?>	
							
							
							<div class="c"></div>
						</div>
						<div class="btn_news_more">
							<a href="/index.php?c=list&sort_id=17" title="新闻资讯" class="btn">查看更多</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--partner-->
		<div id="section6" init="false" class="section section6">
			<div class="home_partner">
				<div class="home_partner_title"  >
					<a href="/index.php?c=list&sort_id=17" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
img/t_kehu.jpg" alt="新闻资讯" width="372" height="73"></a>
				</div>
				<div class="home_partner_text" >他们都选择了<?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['COMPANYNAME'];?>
网络，我们最大的使命就是让他们的选择变得坚定和正确，为客户创造最大的价值从而实现自己的价值。</div>
				<div class="home_partner_list wrap" >
					<table>
						<tbody>
							<tr>
								
								<?php  $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['n']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kehu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['n']->key => $_smarty_tpl->tpl_vars['n']->value) {
$_smarty_tpl->tpl_vars['n']->_loop = true;
?>
								<td>
									<div class="pic partner_box">
										<div class="cont1">
											<a  target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['n']->value['biaoti'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['n']->value['tupian'];?>
" width="150" height="100" alt="<?php echo $_smarty_tpl->tpl_vars['n']->value['biaoti'];?>
"></a>
										</div>
										<div class="cont2">
											<a  target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['n']->value['biaoti'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['n']->value['tupian'];?>
" width="150" height="100" alt="<?php echo $_smarty_tpl->tpl_vars['n']->value['biaoti'];?>
"></a>
										</div>
										</div>
									</div>
								</td>
								<?php } ?>	
								
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			
			<!-- footer -->
			<?php echo $_smarty_tpl->getSubTemplate ('foot.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<!-- footer -->
		</div>
		<div class="right" id="fp-nav">
			<ul>
				<li>
					<a class="active" index="0"><span></span></a>
				</li>
				<li>
					<a index="1"><span></span></a>
				</li>
				<li>
					<a index="2"><span></span></a>
				</li>
				<li>
					<a index="3"><span></span></a>
				</li>
				<li>
					<a index="4"><span></span></a>
				</li>
				<li>
					<a index="5"><span></span></a>
				</li>
			</ul>
		</div>
		
	</body>

</html><?php }} ?>
