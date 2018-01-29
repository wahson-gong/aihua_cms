<?php /* Smarty version Smarty-3.1.16, created on 2017-01-30 19:00:03
         compiled from "/Users/gonghuayao/Sites/ghyCMS/application/views/home/templates/defualt/contact.html" */ ?>
<?php /*%%SmartyHeaderCode:1991883654588ec0f515c7b3-58549241%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f1fa0c973726386cec584166488f8302606e619' => 
    array (
      0 => '/Users/gonghuayao/Sites/ghyCMS/application/views/home/templates/defualt/contact.html',
      1 => 1485759505,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1991883654588ec0f515c7b3-58549241',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_588ec0f51e71f5_07464172',
  'variables' => 
  array (
    'WEB_INFO' => 0,
    'CUR_VIEW_PATH' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588ec0f51e71f5_07464172')) {function content_588ec0f51e71f5_07464172($_smarty_tpl) {?><!DOCTYPE html>
<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>联系我们_<?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['SEOTITLE'];?>
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
defualt/js/contact.js" type="text/javascript"></script>
		<meta http-equiv="Cache-Control" content="no-transform" />
        <meta http-equiv="Cache-Control" content="no-siteapp" />
	</head>

	<body>
		<!-- header -->
		<?php echo $_smarty_tpl->getSubTemplate ('defualt/head.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<!-- header -->
		<script type="text/javascript">
			document.getElementById("menu8").className = "on";
		</script>
		<!--banner-->
		<div class="inside_banner" style="background: url(<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
defualt/img/c_banner.jpg) no-repeat center;height: 400px;">
			<div class="wrap">
				<div class="form_msg">
					<div class="c_shade"></div>
					<form id="feefForm" method="post" action="/index.php?c=contact&a=insertFeedback" onsubmit="return sub_form()">
						<dl><dt>给我们留言</dt>
							<dd><input type="text" id="name" name="name" class="text" value="你的称呼（必填）" onfocus="if(this.value==你的称呼（必填）)this.value=" onblur="if(this.value==)this.value=你的称呼（必填）">
							<input type="text" id="tel" name="tel" class="text" value="你的电话（必填）" onfocus="if(this.value==你的电话（必填）)this.value=" onblur="if(this.value==)this.value=你的电话（必填）"></dd>
							<dd><input type="text" id="email" name="email" class="text" value="您的邮箱" onfocus="if(this.value==您的邮箱)this.value=" onblur="if(this.value==)this.value=您的邮箱">
							<input type="text" id="company" name="company" class="text" value="所在公司" onfocus="if(this.value==所在公司)this.value=" onblur="if(this.value==)this.value=所在公司"></dd>
							<dd><textarea name="content" id="content" class="textarea" onfocus="if(this.value==请输入留言内容)this.value=">请输入留言内容</textarea></dd>
							<dd><input type="submit" class="sub_btn" value="提交信息"></dd>
						</dl>
					</form>
				</div>
			</div>
			<script type="text/javascript">
			function sub_form(){
				if($("#name").val()=="" ||$("#name").val()=="你的称呼（必填）"  )
				{
					alert("你的称呼（必填）");
					return false;
				}
				if($("#tel").val()=="" ||$("#tel").val()=="你的电话（必填）"  )
				{
					alert("你的称呼（必填）");
					return false;
				}
				if($("#content").val()=="" ||$("#content").val()=="请输入留言内容"  )
				{
					alert("请输入留言内容");
					return false;
				}
				$("#feefForm").submit();
				
			}
			
			</script>
			
			
		</div>
		<div class="connect">
			<div class="wrap">
				<div class="home_title"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
defualt/img/cn02.png" alt="联系<?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['COMPANYNAME'];?>
" width="200" height="53"></div>
				<div class="connect_column">
					<ul class="fix">
						<li>
							<div class="s1"></div>
							<div class="info"><i class="i1"></i>
								<h2>公司地址</h2>
								<p class="text"><?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['COMPANYADDRESS'];?>
 邮编：<?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['QQ1'];?>

								</p>
							</div>
						</li>
						<li>
							<div class="s2"></div>
							<div class="info"><i class="i2"></i>
								<h2>联系方式</h2>
								<p class="text">联系电话：<?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['TELPHONE'];?>
</p>
							</div>
						</li>
						<li>
							<div class="s3"></div>
							<div class="info"><i class="i3"></i>
								<h2><?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['COMPANYNAME'];?>
邮箱</h2>
								<p class="text"><?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['EMAIL'];?>
</p>
							</div>
						</li>
						<li>
							<a href="#" target="_blank">
								<div class="s4"></div>
								<div class="info"><i class="i4"></i>
									<h2>联系QQ</h2>
									<p class="text">客服<?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['QQ2'];?>

									</p>
								</div>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="arrive">
			<div class="wrap">
				<div class="home_title"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
defualt/img/cn03.png" alt="如何到达<?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['COMPANYNAME'];?>
网络"></div>
				<div class="arrive_column_con">
					<div class="arrive_column fix">
						<dl class="bus"><dt><i class="icon"></i>公交车 </dt>
							<dd>
								<p class="text">站台：川师大成龙校区、龙城大道金茶路口、车城大道路口、凯德卓锦万黛、回龙寺<br> 线路：332a路、856a路、313路、332路、856路、899路、1014路、223路、1002路  等等
								</p>
							</dd>
						</dl>
						<dl class="taxi"><dt><i class="icon"></i>出租车/自驾 </dt>
							<dd>
								<p class="text">地点：龙泉驿区成龙大道<br> 具体地址：成都市龙泉驿区成龙大道二段1819号
								</p>
							</dd>
						</dl>
						<dl class="metro"><dt><i class="icon"></i>地铁</dt>
							<dd>
								<p class="text">站台：连山坡<br> 线路：2号线
									<br> 咨询电话：18782140263
								</p>
							</dd>
						</dl>
					</div>
				</div>
			</div>
		</div>
		<!-- footer -->
		<?php echo $_smarty_tpl->getSubTemplate ('defualt/foot.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<!-- footer -->

		<!-- right -->
		<?php echo $_smarty_tpl->getSubTemplate ('defualt/right_tip.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<!-- right -->
	</body>

</html><?php }} ?>
