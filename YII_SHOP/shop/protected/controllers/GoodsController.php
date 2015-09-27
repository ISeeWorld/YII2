<?php

// 2015年8月21日07:34:00
class GoodsController extends Controller
{
   /**
    * 2015年9月27日21:44:37
    * 过滤器中添加缓存控制问题
    */

    function filters()
    {
        return array(
        array(
           'system.web.widgets.COutputCache +detail',
           'varyByParam'=>array('id'),
           'duration'=>3600,
        	),
       );


    }
    public function actionCategory()
	{

        $goods_model=Goods::model();
		//1从模型获得总数检录查询数据
		$cnt=$goods_model->count();
		// echo $cnt;
        $per=8;
        //2实例化类
		$page=new Pagination($cnt,$per);
		//3SQL语句拼装
        $sql="select * from {{goods}} $page->limit";  
        // 数据查询实现 
        $goods_infos=$goods_model->findAllBySql($sql);
       // 制作显示列表
        $page_list=$page->fpage();
		$this->render('category',array('goods_infos_view'=>$goods_infos,'page_list_view'=>$page_list));
    }	



	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionDetail($id)
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		// $this->render('index');
		// echo "i want to login!";
		// echo $id;
		
		// $goods_infos=Goods::model()->getGoodsinfoByPk($id);
   	    
		 $goods_infos=Goods::model()->findByPk($id);
		
		//变量缓存
		$this->render('detail',array('goods_infos_view'=>$goods_infos));

	}


}