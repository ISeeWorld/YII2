<?php 
// 2015年8月24日21:10:09 
// 利用框架创建
class IndexController extends Controller
{

		/**
		 * 2015年9月19日19:21:43
		 * @return [type] [description]
		 */
		
		function filters()
	{
	   return array(
	      'accessControl'
	   	);

	}


	/**
	 * [accessRules description]
	 * 2015年9月19日19:21:58
	 * @return [type] [description]
	 */
	function accessRules()
{
	return array(
     array(
      'allow',
      'actions'=>array('left','right','head','index'),
      'users'=>array('@'),
     	),
     array(
		'deny',
		'users'=>array('*'),
     	),
	);
	# code...
}
	/**
	 * [actionIndex description]
	 * @return [type] [description]
	 */
	public function actionIndex()
	{
		$this->renderPartial('index');
	}
	/**
	 * [actionLeft description]
	 * @return [type] [description]
	 */
	public function actionLeft()
	{
		$this->renderPartial('left');
	}
	/**
	 * [actionRight description]
	 * @return [type] [description]
	 */
	public function actionRight()
	{
		$this->renderPartial('right');
	}
	/**
	 * [actionHead description]
	 * @return [type] [description]
	 */
	public function actionHead()
	{
		$this->renderPartial('head');
	}
}



 ?>