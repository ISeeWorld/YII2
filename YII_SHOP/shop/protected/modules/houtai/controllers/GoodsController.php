<?php 

class GoodsController extends Controller
{

	/**
	 * [filters description]
	 * 2015年9月19日12:08:07
	 * @return [type] [description]
	 */
       function filters()
    {
      return array(
      	'accessControl'
      	 );

    }

    function accessRules()
    {
      return array(


      	 // array(
        //     'allow',
        //     'actions'=>array(''),
        //     'users'=>array('?'),

      	 // 	),
      	  array(
            'allow',
            'actions'=>array('update','add','delete'),
            'users'=>array('admin'),
      	 	),
         array(
            'allow',
            'actions'=>array('show'),
            'users'=>array('@'),
         	),
         array(
            'deny',
            // 'actions'=>array('');
            'users'=>array('*'),
         	),
      	);
    }

	public function actionIndex()
	{
		$this->render('index');
	}


		public function actionAdd()
	{
		// 2015年8月31日22:29:49
		$goods_model=new Goods;
		if (isset($_POST['Goods']))
	{
	 //    echo "<pre>";
		// print_r($_POST['Goods']);
		// echo "</pre>";

        // foreach 用法回顾
       
		foreach ($_POST['Goods'] as  $goods_attri=>$_v) 
	{
		$goods_model->$goods_attri=$_v ;
		
	}
	   $goods_model->goods_create_time=time();

    
    
    if ($goods_model->save())
    {
       Yii::app()->user->setFlash('success','商品信息添加成功');
       $this->redirect('./index.php?r=houtai/goods/show');
    }

	}

		$this->renderPartial('add',array('goods_model_view'=>$goods_model));
		// 2015年9月1日21:39:10
	}


	public function actionUpdate($id)
	{
		// echo $id;
	    $goods_model=Goods::model();
	    $goods_infos=$goods_model->findByPk($id);
        //2015年9月2日21:34:17
        // 此处需要认真体会小物件的作用
	    // =============================================
        if (isset($_POST['Goods']))
	{
        // foreach 用法回顾
			foreach ($_POST['Goods'] as  $goods_attri=>$_v) 
		{
			$goods_infos->$goods_attri=$_v ;
			
		}
		      
	    if ($goods_infos->save())
	    {
	       $this->redirect('./index.php?r=houtai/goods/show');
	    }

	}

	    // ===============================================
	    $this->renderPartial('update',array('goods_model_view'=>$goods_infos));
	}

	public function actionDelete($id)
{
	$goods_model=Goods::model();
	$goods_infos=$goods_model->findByPk($id);

    if ($goods_infos->delete())
  {
	$this->redirect('./index.php?r=houtai/goods/show');
  }


}
/**
 * [actionShow description]
 * @return [type] [description]
 * 2015年9月3日22:51:50
 */
	public function actionShow()
	{
		$goods_model=Goods::model();
		
		$cnt=$goods_model->count();
		// echo $cnt;
        $per=6;
		$page=new Pagination($cnt,$per);
		//
        $sql="select * from {{goods}} $page->limit";   
        $goods_infos=$goods_model->findAllBySql($sql);
        // var_dump($goods_infos);
        // echo $goods_infos->goods_price;
        $page_list=$page->fpage();
		$this->renderPartial('show',array('goods_infos_view'=>$goods_infos,'page_list_view'=>$page_list));
	}
/**
 * 2015年9月4日20:13:05
 * [actionTest description]
 * @return [type] [description]
 */
	 public function actionTest()
	{
		$goods_model=Goods::model();

		$goods_infos=$goods_model->findallByPk(array(1,2,3));

		echo "<pre>";
        print_r($goods_infos);
		echo "</pre>";
        
        $this->renderPartial('show',array('goods_infos_view' =>$goods_infos));
	}

}

 ?>