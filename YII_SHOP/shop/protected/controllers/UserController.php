<?php

// 2015年8月21日07:34:00
class UserController extends Controller
{
    /*
     * 验证码生成
     * 以下代码的意思：在当前控制器里边，以方法的形式访问其他类
     * 我们访问./index.php?r=user/captcha就会访问到以方法的CCaptchaAction
     *          会走CCaptchaAction类里边的run()方法
     * 
     * 谁会过来使用 user/captcha 这个路由
     * 答：是视图表单间接过来调用($this->widget('CCaptcha'))
     * 2015年9月11日22:49:24
     * 这段代码很奇怪 暂时无法理解 需要后期慢慢学习
     */
    function actions(){
        return array(
            'captcha'=>array(
                'class'=>'system.web.widgets.captcha.CCaptchaAction',
                'width'=>75,
                'height'=>30,
                'maxLength'=>5,
                'minLength'=>5,
                // 'buttonLabel'=>'获取验证码',
            ),
          // 'captcha2'=>array(
          //       'class'=>'system.web.widgets.captcha',
          //        'buttonLabel'=>'获取验证码',
          //   ),
          //   2015年9月20日09:46:21

            
            //我们在外边随便定义一个类，都可以通过这种方式访问
            // user/co 就会访问Computer.php里边的run()方法
            'co'=>array(
                'class'=>'application.controllers.Computer',
            ),
        );
    }
    

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionLogin()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		// $this->render('index');
		// echo "i want to login!";
    //
    // yii::beginProfile('LOGINTIME'); 
		$userlogin_model=new LoginForm;

		if (isset($_POST['LoginForm'])) {
			# code...
			$userlogin_model->attributes=$_POST['LoginForm'];

			if ($userlogin_model->validate()&&$userlogin_model->login())
		    {
				# code...
				// echo 'login is ok';
				// 信息验证并且持久化
				$this->redirect('./index.php?r=index/index');
			}
		}
		
		// }
    // yii::endProfile('LOGINTIME'); 

		$this->render('login',array('userlogin_model_view'=>$userlogin_model));
	}
	
		public function actionRegister()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		// $this->render('index');
		// echo "i want to login!";
		// 
		$user_model=new User;
        $sex[1]="男";
        $sex[2]="女";
        $sex[3]="保密";

        $xl[1]="请选择";
        $xl[2]="小学";
        $xl[3]="中学";
        $xl[4]="大学";

        $hobby[1]="篮球";
        $hobby[2]="足球";
        $hobby[3]="排球";
        $hobby[4]="乒乓球";

  if (isset($_POST['User'])) 
  {
  	// foreach ($_POST['User'] as $user_info => $_v) 
  	// {
  	// 	# code...
  	// 	$user_model->$user_info=$_v;
  	// }
  	// 代码优化
  	// 2015年9月7日20:22:49
  
  	//字符串重新拼接
  	if (is_array($_POST['User']['user_hobby']))
  	 {
        $_POST['User']['user_hobby']=implode(',',$_POST['User']['user_hobby']);
  		# code...
  	}
    
     $_POST['User']['password']=md5($_POST['User']['password']);
     $_POST['User']['password2']=md5($_POST['User']['password2']);
                                     // MD5加密
    
    $user_model->attributes=$_POST['User'];
   if ($user_model->save())
   {

   	$this->redirect('./index.php?r=index/index'); 
   }


  }

$this->render('register',array('user_model_view'=>$user_model,'sex_view'=>$sex,'xl_view'=>$xl,'hobby_view'=>$hobby));
}
    
/**
 * [actionLogout description]
 * @return [type] [description]
 * 2015年9月9日22:52:41
 */
public function actionLogout()

{

	// yii::app()->session->clear();
	// //删除内存
	// yii::app()->session->destroy();
	// // 删除服务器信息
  Yii::app()->user->logout();
  //2015年9月20日09:30:21 
	$this->redirect('./index.php?r=index/index');


}





}