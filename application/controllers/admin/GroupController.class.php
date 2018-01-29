<?php
//用户组控制器
class GroupController extends BaseController{
	
	//显示用户组列表
	public function indexAction(){
		//先获取用户组信息
		$groupModel = new Model("group");
		// $groups = $groupModel->getgroups();
		//载入分页类
		$where = ""; //查询条件
		$this->library("Page");
		//获取group总的记录数
		$total = $groupModel->total($where);
		//指定分页数，每一页显示的记录数
		$pagesize = 10;
		// $pagesize = $GLOBALS['config']['pagesize'];
		//获取当前页数，默认是1
		$current = isset($_GET['page']) ? $_GET['page'] : 1;
		$offset = ( $current - 1 ) * $pagesize;
		//使用模型完成数据的查询
		$groups= $groupModel->pageRows($offset, $pagesize, $where);
		foreach ($groups as $k=>$v)
		{
		    $adminModel = new Model("admin");
		    $groups[$k]["memberNum"]=$adminModel->select("select count(*) as count_id from sl_admin where group_id={$v[id]} ")[0][count_id];
		}
		//使用分页类获取分页信息
		$page = new Page($total,$pagesize,$current,"index.php",array("p"=>"admin","c"=>"group","a"=>"index"));
		$pageinfo = $page->showPage();
		include CUR_VIEW_PATH . "Sgroup".DS."group_list.html";
	}

	//载入添加用户组页面
	public function addAction(){
	    //记录单选框的数量
	    $che_list=0;
	    $LanmuModel = new LanmuModel('column');
	    $classidArray=$LanmuModel->getLanmuByclassid("");
	    $lanmu= $LanmuModel->child($classidArray);
	    //var_dump($lanmu);
	    include CUR_VIEW_PATH . "Sgroup".DS."group_add.html";
	}

	//载入编辑用户组页面
	public function editAction(){
	    //获取该用户组信息
	    $groupModel = new Model("group");
	    //条件
	    $group_id = $_GET['id'] + 0; //出于考虑
	    //使用模型获取
	    $group = $groupModel->selectByPk($group_id);
	    
	    $column_groupModel = new model("column_group");
	    //记录单选框的数量
	    $che_list=0;
	    $LanmuModel = new LanmuModel('column');
	    $classidArray=$LanmuModel->getLanmuByclassid("");
	   //查询栏目是否已经选择
	    foreach($classidArray as $k=>$v)
	    {
	        $classidArray[$k]["checked"]="false";
	        $data2["id"]=$v["id"];
	        $data2["group_id"]=$group_id;
	        if(count($column_groupModel->selectByArrayAnd( $data2))>0)
	        {
	            $classidArray[$k]["checked"]="true";
	        }
	        
	    }
	    $lanmu= $LanmuModel->child($classidArray);
// 	    foreach($lanmu as $k=>$v)
// 	    {
	       
// 	        foreach ($v["child"] as $k1=>$v1 )
// 	        {
// 	            $data2["id"]=$v1["id"];
// 	            $data2["group_id"]=$group_id;
	             
// 	            if(count($column_groupModel->selectByArrayAnd( $data2))>0)
// 	           {
// 	               $lanmu[$k]["child"][$k1]["checked"]="true";
// 	           }
	            
// 	        }
	        
	        
// 	    }
	    
		// var_dump($group);
		include CUR_VIEW_PATH . "Sgroup".DS."group_edit.html";
	}

	//定义insert方法，完成用户组的插入
	public function insertAction(){
	    //获取该用户组信息
	    $groupModel = new Model("group");
	    $Common = new Common();
	    $column_groupModel = new model("column_group");
		//接受表单提交过来的数据
		$col_id = $_REQUEST['colid'];
		$classid= $_POST['classid'];
		$u1= $_POST['u1'];
		$u2= $_POST['u2'];
		$u3= $_POST['u3'];
		$u4= $_POST['u4'];
		//$group_id=$_SESSION["admin"]["group_id"];

		// 1.收集表单数据
		$data = $groupModel->getFieldArray();
		$this->helper("input");
		$data = deepspecialchars($data); //实体转义处理
		//var_dump($data);die();
		$group_id=$groupModel->insert($data);
		if ($group_id){
		    //写入另外权限操作表
		    foreach ($col_id as $k=>$v ){
		        $controller=$Common->getUrlParams($u3[$k])["c"];
		        $data1["id"]=$col_id[$k];
		        $data1["classid"]=$classid[$k];
		        $data1["u1"]=$u1[$k];
		        $data1["u2"]=$u2[$k];
		        $data1["u3"]=$u3[$k];
		        $data1["u4"]=$u4[$k];
		        $data1["laiyuan"]=$_SESSION["admin"]["username"];
		        $data1["group_id"]=$group_id;
		        $data1["controller"]=$controller;
		        
		        $column_groupModel->insert($data1);
		        
		        //var_dump($controller);
		    }
		    //添加成功
		    $this->jump("index.php?p=admin&c=group&a=index","添加用户组成功",2);
		}else {//添加失败
		    $this->jump("index.php?p=admin&c=group&a=add","添加用户组失败",3);
		}

		
	}

	//定义update方法，完成用户组的更新
	public function updateAction(){
	    //获取该用户组信息
	    $groupModel = new Model("group");
	    $Common = new Common();
	    $column_groupModel = new model("column_group");
	    //接受表单提交过来的数据
	    $col_id = $_REQUEST['colid'];
	    $classid= $_POST['classid'];
	    $u1= $_POST['u1'];
	    $u2= $_POST['u2'];
	    $u3= $_POST['u3'];
	    $u4= $_POST['u4'];
	    $group_id=trim($_REQUEST['id']);
	    
	   // var_dump($col_id);die();
		//删除用户组原有数据
		$column_groupModel->select("delete from sl_column_group where group_id={$group_id} ");
	    foreach ($col_id as $k=>$v ){
	        $controller=$Common->getUrlParams($u3[$k])["c"];
	        $data1["id"]=$col_id[$k];
	        $data1["classid"]=$classid[$k];
	        $data1["u1"]=$u1[$k];
	        $data1["u2"]=$u2[$k];
	        $data1["u3"]=$u3[$k];
	        $data1["u4"]=$u4[$k];
	        $data1["laiyuan"]=$_SESSION["admin"]["username"];
	        $data1["group_id"]=$group_id;
	        $data1["controller"]=$controller;
	        
	        $column_groupModel->insert($data1);
	        
	       // var_dump($data1);
	    }
	    $data = $groupModel->getFieldArray();
	    //var_dump($data);die();
	    if ($groupModel->update($data)>0){//添加成功
	        $this->jump("index.php?p=admin&c=group&a=index","修改用户组成功",2);
	    }else {//添加失败  
	        $this->jump("index.php?p=admin&c=group&a=edit&id={$data["id"]}","修改用户组失败",3);
	    }
	    
	}

	//定义delete方法，完成用户组的删除
	public function deleteAction(){
		//获取group_id
		$group_id = $_GET['id'] + 0;
		$groupModel = new Model("group");
		$group = $groupModel->selectByPk($group_id);
		
		if ($groupModel->delete($group_id)){
		    $column_groupModel = new model("column_group");
		    $column_groupModel->select("delete from sl_column_group where group_id={$group_id} ");
			$this->jump("index.php?p=admin&c=group&a=index","删除成功",2);
		}else{
			$this->jump("index.php?p=admin&c=group&a=index","删除失败",3);
		}
	}
}