<?php

/**
 * 2015年9月12日23:51:55
 */
class Manager extends CActiveRecord
{

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
		return '{{manager}}';
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

		);

	
	}



	public function attributeLabels()
	{
		return array(
		
			'username' =>用户名,
			'password' =>密码,
		
		);
	}


	
}