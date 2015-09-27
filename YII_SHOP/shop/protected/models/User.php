<?php

/**
 * This is the model class for table "{{user}}".
 *
 * The followings are the available columns in table '{{user}}':
 * @property integer $user_id
 * @property string $username
 * @property string $password
 * @property string $user_email
 * @property integer $user_sex
 * @property string $user_qq
 * @property string $user_tel
 * @property integer $user_xueli
 * @property string $user_hobby
 * @property string $user_introduce
 */
class User extends CActiveRecord
{

	public $password2;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{user}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			
			array('username', 'required', 'message'=>'请填写用户名'),
			array('username', 'unique', 'message'=>'用户名已经被占用'),
			array('password', 'required', 'message'=>'请填写密码'),
			array('password2','compare','compareAttribute'=>'password','message'=>'两次密码填写不一致'),
			// 密码校验检测方法
			array('user_email', 'email', 'allowEmpty'=>false,'message'=>'邮箱格式不正确'),
			array('user_qq', 'match','pattern'=>'/^[1-9]\d{4,11}$/','message'=>'QQ格式不正确'),
			array('user_tel', 'match','pattern'=>'/^1\d{10}$/','message'=>'电话格式不正确'),
			array('user_xueli', 'in','range'=>array(2,3,4,5),'message'=>'学历必须选择'),
			
            array('user_hobby','check_hobby'),

            // 为没有验证规则的属性添加验证规则，否则attribute无法验证
            array('user_sex,user_introduce','safe'),     
			
		);

	
	}
	/**
	 * [check_hobby description]
	 * 具体为某一个表单添加验证函数
	 * @return [type] [description]
	 * 2015年9月7日20:45:26
	 */
	function check_hobby()
{	
	// echo $this->user_hobby;
	$len=strlen($this->user_hobby);
	if ($len<3)
   {
	 $this->addError('user_hobby','兴趣选择不正确！');
   }

}



	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'user_id' =>用户编号,
			'username' =>用户名,
			'password' =>密码,
			'password2' =>确认密码,
			'user_email' =>邮箱,
			'user_sex' =>性别,
			'user_qq' =>QQ,
			'user_tel' => TEL,
			'user_xueli' =>学历,
			'user_hobby' =>兴趣,
			'user_introduce' =>用户介绍,
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('user_email',$this->user_email,true);
		$criteria->compare('user_sex',$this->user_sex);
		$criteria->compare('user_qq',$this->user_qq,true);
		$criteria->compare('user_tel',$this->user_tel,true);
		$criteria->compare('user_xueli',$this->user_xueli);
		$criteria->compare('user_hobby',$this->user_hobby,true);
		$criteria->compare('user_introduce',$this->user_introduce,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}