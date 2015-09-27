<?php
// 2015年8月23日22:34:56
class ManagerController extends Controller
{
	public function actionLogin()
	{

		$manager_login_model=new LoginForm;
		if (isset($_POST['LoginForm']))
		{
			
          $manager_login_model->attributes=$_POST['LoginForm'];

		  if ($manager_login_model->validate()&&$manager_login_model->login())
		    {
				# code...
				// echo 'login is ok';
				// 信息验证并且持久化
				$this->redirect('./index.php?r=houtai/index/index');
			}
        }		
		$this->renderPartial('login',array('manager_login_model_view'=>$manager_login_model));
	 //此处需要注意传递数组时候需要注意命名问题 '$manager_login_model_view'不好
	}
	/**
	 * 2015年9月12日23:50:40
	 */
	
	public function actionLogout()
	{
		yii::app()->session->clear();
		//删除内存
		yii::app()->session->destroy();
		// 删除服务器信息
		$this->redirect('./index.php?r=index/index');

	}
}

?>