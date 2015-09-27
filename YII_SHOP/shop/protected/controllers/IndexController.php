<?php

// 2015年8月21日07:34:00
class IndexController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{

	}

   
	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		// $this->render('index');
		 // echo "i want to login!";
		$this->render('index');
		
		// var_dump(Yii::app()->db);
		
	}


}