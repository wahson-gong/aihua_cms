<?php /* Smarty version Smarty-3.1.16, created on 2017-01-30 12:28:09
         compiled from "/Users/gonghuayao/Sites/ghyCMS/application/views/home/templates/defualt/about.html" */ ?>
<?php /*%%SmartyHeaderCode:643879167588ec0d9e3cd67-59533796%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1dadbcbe5e499b0e82e786fdd5996c8bf3916e81' => 
    array (
      0 => '/Users/gonghuayao/Sites/ghyCMS/application/views/home/templates/defualt/about.html',
      1 => 1485750441,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '643879167588ec0d9e3cd67-59533796',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'WEB_INFO' => 0,
    'CUR_VIEW_PATH' => 0,
    'aboutusDetail' => 0,
    'tableList' => 0,
    'k' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_588ec0da0110a9_32307340',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588ec0da0110a9_32307340')) {function content_588ec0da0110a9_32307340($_smarty_tpl) {?><!DOCTYPE html> 
<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>关于我们_<?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['SEOTITLE'];?>
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
defualt/js/about.js" type="text/javascript"></script>
		<meta http-equiv="Cache-Control" content="no-transform" />
        <meta http-equiv="Cache-Control" content="no-siteapp" />
	</head>

	<body>
		<!-- header -->
		<?php echo $_smarty_tpl->getSubTemplate ('defualt/head.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<!-- header -->
		<script type="text/javascript">
			document.getElementById("menu2").className = "on";
		</script>
		<!--banner-->
		<div class="inside_banner" style="background: url(<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
defualt/img/about_banner.jpg) no-repeat center;height:400px;">
			<div class="about_tab">
				<ul class="fix">
					<li class="blue on">
						<a href="#" style="line-height: 100px;"><?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['COMPANYNAME'];?>
概况</a>
					</li>
					<li class="green">
						<a href="#" style="line-height: 40px;"><?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['COMPANYNAME'];?>
文化</a>
					</li>
					
					<li class="orange">
						<a href="#" style="line-height: 40px;">加入我们</a>
					</li>
				</ul>
			</div>
		</div>
		<!---->
		<div class="about">
			<div class="about_title"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
defualt/img/a01.gif" alt="公司概况"></div>
			<div class="wrap points">
				<div class="about_main fl">
					<div class="about_cont about_cont1">
						<h2>我们是谁？</h2>
						<h4>懂您所需、做您所想</h4>
						<?php echo $_smarty_tpl->tpl_vars['aboutusDetail']->value['content'];?>


                   </div>
					<div class="about_cont about_cont2">
						<h2>我们能做什么？</h2>
						<h4>我们提供的网站解决方案 &gt;</h4>
						<ul>
						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tableList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
							<li><span><?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
</span>
								<a href="/index.php?c=solutions&a=detail&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value['biaoti'];?>
</a>
							</li>
						<?php } ?>
						</ul>
						<div class="c"></div>
					</div>
				</div>
				<div class="about_pic fly fr"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
defualt/img/f1.jpg" alt="公司环境1" width="80" height="80" style="opacity: 1; right: 0px; top: 0px; left: 243px;"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
defualt/img/f2.jpg" alt="公司环境2" width="80" height="80" style="opacity: 1; right: 0px; top: 81px; left: 0px;"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
defualt/img/f3.jpg" alt="公司环境3" width="80" height="80" style="opacity: 1; right: 0px; top: 81px; left: 81px;"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
defualt/img/f4.jpg" alt="公司环境4" width="80" height="80" style="opacity: 1; right: 0px; top: 81px; left: 162px;"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
defualt/img/f5.jpg" alt="公司环境5" width="80" height="80" style="opacity: 1; right: 0px; top: 81px; left: 243px;"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
defualt/img/f6.jpg" alt="公司环境6" width="80" height="80" style="opacity: 1; right: 0px; top: 81px; left: 324px;"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
defualt/img/f7.jpg" alt="公司环境7" width="80" height="80" style="opacity: 1; right: 0px; top: 81px; left: 405px;"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
defualt/img/f8.jpg" alt="公司环境8" width="80" height="80" style="opacity: 1; right: 0px; top: 162px; left: 242px;"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
defualt/img/f9.jpg" alt="公司环境9" width="80" height="80" style="opacity: 1; right: 0px; top: 243px; left: 162px;"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
defualt/img/f10.jpg" alt="公司环境10" width="80" height="80" style="opacity: 1; right: 0px; top: 243px; left: 324px;"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
defualt/img/f11.jpg" alt="公司环境11" width="80" height="80" style="opacity: 1; right: 0px; top: 324px; left: 81px;"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
defualt/img/f12.jpg" alt="公司环境12" width="80" height="80" style="opacity: 1; right: 0px; top: 324px; left: 324px;"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
defualt/img/f13.jpg" alt="公司环境13" width="80" height="80" style="opacity: 1; right: 0px; top: 403px; left: 0px;"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
defualt/img/f14.jpg" alt="公司环境14" width="80" height="80" style="opacity: 1; right: 0px; top: 404px; left: 240px;"></div>
			</div>
			<!--文化-->
			<div class="culture">
				<div class="about_title"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
defualt/img/a05.png" alt="<?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['COMPANYNAME'];?>
文化" width="182" height="52"></div>
				<div class="wrap">
					<div class="about_main fl" style="left: 1730px; top: -200px;">
						<div class="about_cont">
							<h2>先进的技术+远瞻的眼光</h2>
							<h4>互联网行业瞬息万变，谁能洞察未来，谁就能引领行业发展。</h4>
							<p class="text"><?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['COMPANYNAME'];?>
网络拥有一支朝气蓬勃的团队，我们执着、敏锐、追求更好；通过自己的专业眼光，为客户提供各类解决方案，始终为客户思考如何占领互联网。 一个人能走多远，取决于与谁同行，<?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['COMPANYNAME'];?>
网络团队是一个富有理想和激情的团队，也是一个技术专业化、管理人性化、创新性和学习型的优秀团队。</p>
						</div>
					</div>
					<div class="about_pic fr" style="left: -1730px; top: -200px;"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
defualt/img/a07.png" alt="<?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['COMPANYNAME'];?>
价值观" width="543" height="307"></div>
				</div>
			</div>
			<!--资质-->
			<!-- <div class="zhizi">
				<div class="about_title"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
defualt/img/a08.png" alt="<?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['COMPANYNAME'];?>
企业资质" width="392" height="121"></div>
				<ul class="fix">
					<li><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
defualt/img/a09.jpg" alt="企业资质1" width="280" height="205"></li>
					<li><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
defualt/img/a10.jpg" alt="企业资质2" width="280" height="205"></li>
					<li><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
defualt/img/a11.jpg" alt="企业资质3" width="280" height="205"></li>
					<li><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
defualt/img/a12.jpg" alt="企业资质4" width="280" height="205"></li>
				</ul>
			</div> -->
			<!--加入我们-->
			<div class="jion">
				<div class="wrap posr" style="height: 100%;">
					<div class="about_title"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
defualt/img/a13.png" alt="<?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['COMPANYNAME'];?>
招聘"></div>
					<div class="jion_img"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
defualt/img/a15.png" alt="<?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['COMPANYNAME'];?>
人才"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
defualt/img/a16.png" alt="加入<?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['COMPANYNAME'];?>
">
						<ul class="jion_tab fix">
							<li><span class="icon"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
defualt/img/a20.jpg" alt="商务代表"></span><span class="post">商务代表</span></li>
							<li class="on"><span class="icon"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
defualt/img/a21.jpg" alt="网页设计师"></span><span class="post">网页设计师</span></li>
							<li><span class="icon"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
defualt/img/a22.jpg" alt="网站程序员"></span><span class="post">程序员</span></li>
						</ul>
					</div>
					<div class="jion_info">
						<div class="job_tab" style="display: none;">
							<ul class="fix">
								<li class="on">职位要求</li>
								<li>工作职责</li>
							</ul>
							<p class="intro" style="display: block;">
								1. 热爱互联网，热爱销售工作；<br> 2. 优秀的表达、理解和沟通说服能力，以及良好的为客户服务意识； <br> 3. 激情，坚韧，充满干劲，勇于进取和挑战自我；<br> 4. 需具有很强的学习能力和接收新视野的能力；<br> 5. 对互联网行业一定认知，关注互联网的发展并了解基本互动行销的知识；<br> 6. 性格开朗，善于分析与总结市场规律；具有良好的团队合作精神；<br> 7. 对企业网站有比较深刻的了解，有网站建设、网络推广销售经验者优先；<br></p>
							<p class="intro" style="display: none;">
								1、拓展公司业务市场，落实销售计划。 <br> 2、熟悉网络公司或广告公司的业务流程，有较强的管理能力及执行力；
								<br> 3、具有独立撰写、讲解、演示PPT的能力；
								<br> 4、良好的语言表达能力及写作能力，具备技术资料分析、整理、描述能力；
								<br> 5、有培训经验，能提升部门人员工作能力，能调动部门员工工作积极性；
								<br> 6、具有良好的沟通、表达能力，工作积极主动；
								<br> 7、具有良好的敬业精神与团队协作精神。
								<br> 8、维护客户关系，与客户进行紧密的业务联络和沟通。
								<br> 9、对外，与客户进行谈判、联络、提案、签约、回款等。
							</p>
						</div>
						<div class="job_tab" style="display: block;">
							<ul class="fix">
								<li class="on">职位要求</li>
								<li>工作职责</li>
							</ul>
							<p class="intro" style="display: block;">
								1、本科以上艺术设计专业毕业；<br> 2、拥有至少2年以上网站设计经验；
								<br> 3、有创新意识，较强的审美观和整体布局感；
								<br> 4、熟悉网站前端，能很好的设计出适合网站展示的作品；
								<br> 5、工作认真负责，有责任心，有较好的沟通能力；
							</p>
							<p class="intro" style="display: none;">
								负责客户网站的设计
							</p>
						</div>
						<div class="job_tab" style="display: none;">
							<ul class="fix">
								<li class="on">职位要求</li>
								<li>工作职责</li>
							</ul>
							<p class="intro" style="display: block;">
								1、大专以上计算机、数学等相关专业毕业； <br> 2、拥有至少2年以上网站程序开发经验，熟悉PHP或NET；
								<br> 3、熟悉网站前端，如HTML 、CSS、Javascript\JQuery等，能很好的解决浏览器兼容问题并能手写基本的效果；<br> 4、代码书写规范；
								<br> 5、工作认真负责，有责任心，服从公司项目安排；
								<br> 6、喜欢专研，有上进心；
								<br> 7、沟通能力强，有团队协作经验者优先。
							</p>
							<p class="intro" style="display: none;">
								1、负责客户网站后台程序开发；<br> 2、公司相关产品系统的研发。
							</p>
						</div>
					</div>
					<a href="mailto:<?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['EMAIL'];?>
" class="send">投递工作简历</a>
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
