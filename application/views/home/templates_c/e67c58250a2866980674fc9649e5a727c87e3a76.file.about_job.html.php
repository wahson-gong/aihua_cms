<?php /* Smarty version Smarty-3.1.16, created on 2017-01-30 14:13:06
         compiled from "/Users/gonghuayao/Sites/ghyCMS/application/views/home/templates/m/about_job.html" */ ?>
<?php /*%%SmartyHeaderCode:346406795588ed701c538f8-37623335%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e67c58250a2866980674fc9649e5a727c87e3a76' => 
    array (
      0 => '/Users/gonghuayao/Sites/ghyCMS/application/views/home/templates/m/about_job.html',
      1 => 1485756775,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '346406795588ed701c538f8-37623335',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_588ed701cf0ea0_71736944',
  'variables' => 
  array (
    'WEB_INFO' => 0,
    'CUR_VIEW_PATH' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588ed701cf0ea0_71736944')) {function content_588ed701cf0ea0_71736944($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="zh-CN">

	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>关于我们_<?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['SEOTITLE'];?>
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
m/js/basic.js" type="text/javascript"></script>
	</head>

	<body>
		<header class="width100 header2">
			<div class="fl back">
				<a href="javascript:window.history.back()"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/images/back.jpg" alt="返回" class="width100" /></a>
			</div>
			<div class="title f36 fl">关于我们</div>
			<div class="fr nav"><img onClick="show_top_nav()" alt="成都网站建设" src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/images/menu.jpg" class="width100" /></div>
			<div class="c"></div>
			<div style="width:0px;height:0px;overflow:hidden"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/images/fangwei4.jpg" /></div>
			<div class="top_nav">
				<ul>
					 <!-- header -->
			              <?php echo $_smarty_tpl->getSubTemplate ('m/head_sub.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			          <!-- header --> 
				</ul>
			</div>
		</header>
		<section class="width100">
			<div class="sub_menu">
				<ul class="fix">
					<li>
						<a href="/index.php?c=about" class="f24"><?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['COMPANYNAME'];?>
概况</a>
					</li>
					<li>
						<a href="/index.php?c=single&m=about_culture" class="f24"><?php echo $_smarty_tpl->tpl_vars['WEB_INFO']->value['COMPANYNAME'];?>
文化</a>
					</li>
					 
					<li  class="sel last">
						<a href="/index.php?c=single&m=about_job" class="f24">加入我们</a>
					</li>
				</ul>
			</div>
			<div class="about_banner"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/images/about_banner.jpg" class="width100" /></div>
			<div><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/images/about_job_1.jpg" class="width100" /></div>
			<div><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_VIEW_PATH']->value;?>
m/images/about_job_2.jpg" class="width100" /></div>
			<div class="job_t">
				<dl class="sel job_t1" onClick="show_job(1)"><dt class="f72">销</dt>
					<dd class="f24">销售经理</dd>
				</dl>
				<dl class="job_t2" onClick="show_job(2)"><dt class="f72">设</dt>
					<dd class="f24">网页设计</dd>
				</dl>
				<dl class="job_t3" onClick="show_job(3)"><dt class="f72">前</dt>
					<dd class="f24">前端制作</dd>
				</dl>
				<dl class="job_t4" onClick="show_job(4)"><dt class="f72">程</dt>
					<dd class="f24">程序开发</dd>
				</dl>
				<div class="c"></div>
			</div>
			<div class="job_detail_1 job_detail">
				<h3 class="f36">职位要求</h3>
				<div class="f24">1. 热爱互联网，热爱销售工作；<br> 2. 优秀的表达、理解和沟通说服能力，以及良好的为客户服务意识；<br> 3. 激情，坚韧，充满干劲，勇于进取和挑战自我；<br> 4. 需具有很强的学习能力和接收新视野的能力；<br> 5. 对互联网行业一定认知，关注互联网的发展并了解基本互动行销的知识；<br> 6. 性格开朗，善于分析与总结市场规律；具有良好的团队合作精神；<br> 7. 对企业网站有比较深刻的了解，有网站建设、网络推广销售经验者优先；</div>
				<h3 class="f36">工作职责</h3>
				<div class="f24">1、拓展公司业务市场，落实销售计划。<br> 2、熟悉网络公司或广告公司的业务流程，有较强的管理能力及执行力；
					<br> 3、具有独立撰写、讲解、演示PPT的能力；
					<br> 4、良好的语言表达能力及写作能力，具备技术资料分析、整理、描述能力；
					<br> 5、有培训经验，能提升部门人员工作能力，能调动部门员工工作积极性；
					<br> 6、具有良好的沟通、表达能力，工作积极主动；
					<br> 7、具有良好的敬业精神与团队协作精神。
					<br> 8、维护客户关系，与客户进行紧密的业务联络和沟通。
					<br> 9、对外，与客户进行谈判、联络、提案、签约、回款等。
				</div>
			</div>
			<div class="job_detail_2 job_detail h">
				<h3 class="f36">职位要求</h3>
				<div class="f24">1、本科以上艺术设计专业毕业；<br> 2、拥有至少2年以上网站设计经验；
					<br> 3、有创新意识，较强的审美观和整体布局感；
					<br> 4、熟悉网站前端，能很好的设计出适合网站展示的作品；
					<br> 5、工作认真负责，有责任心，有较好的沟通能力；
				</div>
				<h3>工作职责</h3>
				<div>负责客户网站的设计工作</div>
			</div>
			<div class="job_detail_3 job_detail h">
				<h3 class="f36">职位要求</h3>
				<div class="f24">1、本科以上计算机相关专业毕业；<br> 2、拥有至少1年以上前端制作经验；
					<br> 3、熟练使用HTML、CSS、JAVASCRIPT、JQUERY、HTML5；
					<br> 4、有手机网站前端制作经验；
					<br> 5、工作认真负责，有责任心，代码规范；
				</div>
				<h3 class="f36">工作职责</h3>
				<div class="f24">负责将PSD设计图制作成网页HTML文件</div>
			</div>
			<div class="job_detail_4 job_detail h">
				<h3 class="f36">职位要求</h3>
				<div class="f24">1、大专以上计算机、数学等相关专业毕业；<br> 2、拥有至少2年以上网站程序开发经验，熟悉PHP或NET；
					<br> 3、熟悉网站前端，如HTML 、CSS、Javascript\JQuery等，能很好的解决浏览器兼容问题并能手写基本的效果；<br> 4、代码书写规范；
					<br> 5、工作认真负责，有责任心，服从公司项目安排；
					<br> 6、喜欢专研，有上进心；
					<br> 7、沟通能力强，有团队协作经验者优先
				</div>
				<h3 class="f36">工作职责</h3>
				<div class="f24">1、负责客户网站后台程序开发；<br> 2、公司相关产品系统的研发。
				</div>
			</div>
		</section>
		<script>
			function show_job(i) {
				$(".job_t dl").removeClass('sel');
				$(".job_detail").hide();
				$(".job_t" + i).addClass('sel');
				$(".job_detail_" + i).show();
			}
		</script>
		
		<!-- footer -->
			<?php echo $_smarty_tpl->getSubTemplate ('m/foot.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<!-- footer -->
	</body>

</html><?php }} ?>
