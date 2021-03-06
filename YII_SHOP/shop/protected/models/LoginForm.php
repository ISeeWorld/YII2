<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
// 2015年9月8日22:12:52
class LoginForm extends CFormModel
{
	public $username;
	public $password;
	public $rememberMe;
	public $verifyCode;

	private $_identity;

	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			// username and password are required
			// array('username, password', 'required'),
			// // rememberMe needs to be a boolean
			array('rememberMe', 'boolean'),
			// // password needs to be authenticated
			// array('password', 'authenticate'),
			array('username', 'required','message'=>'用户名必填'),
			array('password', 'required','message'=>'密码必填'),

			array('password','authenticate'),

			array('verifyCode','captcha','message'=>'请输入正确的验证码'),
			//奇怪的验证规则 需要学习
			
		);
	}

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
			'rememberMe'=>'记住登录信息',
			'password'=>'密码',
			'username'=>'用户名',
			'verifyCode'=>'验证码',

		);
	}

	/**
	 * Authenticates the password.
	 * This is the 'authenticate' validator as declared in rules().
	 */
	public function authenticate($attribute,$params)
	{
		if(!$this->hasErrors())
		{
			$this->_identity=new UserIdentity($this->username,$this->password);
			if(!$this->_identity->authenticate())
				$this->addError('password','用户名或密码错误');
		}
	}

	/**
	 * Logs in the user using the given username and password in the model.
	 * @return boolean whether login is successful
	 */
	public function login()
	{
		if($this->_identity===null)
		{
			$this->_identity=new UserIdentity($this->username,$this->password);
			$this->_identity->authenticate();
		}
		if($this->_identity->errorCode===UserIdentity::ERROR_NONE)
		{
			$duration=$this->rememberMe ? 3600*24*30 : 0; // 30 days
			Yii::app()->user->login($this->_identity,$duration);
			return true;
		}
		else
			return false;
	}
}
