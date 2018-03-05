<?php
//品牌控制器
class TestController extends BaseController{
	
	//显示品牌列表
	public function indexAction(){
		
	   $model_test= new ModelNew();
 	   $model=	$model_test->M("system");
 	   
 	   //var_dump($model->all());

 	   //$data['id']="8792";
	   $data['u1']="u11111111111111111";
	    
	  //echo  $model->insert($data);
	  
	   
	   $data1['u1']="u11111111111111111";
	   $data1['u2']="u2222222222222222";
	   $data1['u3']="u333333333333333";
	   $data1['u4']="u444444444444444";
	  
	   $model->where($data)->delete();
	    //$model2 = $model_test->M("system")->findBySql("select * from sl_system ")->count();
	    //var_dump($model2);
	}

	 
}