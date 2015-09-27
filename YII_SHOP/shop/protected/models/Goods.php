<?php

/**
 * This is the model class for table "sw_goods".
 * 2015年8月30日20:10:36
 * The followings are the available columns in table 'sw_goods':
 * @property integer $goods_id
 * @property string $goods_name
 * @property integer $goods_weight
 * @property string $goods_price
 * @property integer $goods_number
 * @property integer $goods_category_id
 * @property integer $goods_brand_id
 * @property string $goods_introduce
 * @property string $goods_big_img
 * @property string $goods_small_img
 * @property integer $goods_create_time
 */
class Goods extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Goods the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 *设置与具体数据表关联
	 */
	public function tableName()
	{
		// return 'sw_goods';
		return "{{goods}}";
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('goods_weight, goods_number, goods_category_id, goods_brand_id, goods_create_time', 'numerical', 'integerOnly'=>true),
			array('goods_name, goods_big_img, goods_small_img', 'length', 'max'=>128),
			array('goods_price', 'length', 'max'=>10),
			array('goods_introduce', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('goods_id, goods_name, goods_weight, goods_price, goods_number, goods_category_id, goods_brand_id, goods_introduce, goods_big_img, goods_small_img, goods_create_time', 'safe', 'on'=>'search'),
		);
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
			'goods_id' => 'Goods',
			'goods_name' => '商品名称',
			'goods_weight' => '商品重量',
			'goods_price' => '商品价格',
			'goods_number' => '商品数量',
			'goods_category_id' => '商品分类',
			'goods_brand_id' => '商品品牌',
			'goods_introduce' => '商品介绍',
			'goods_big_img' => '商品大图片',
			'goods_small_img' => '商品小图片',
			'goods_create_time' => '创建时间',
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

		$criteria->compare('goods_id',$this->goods_id);
		$criteria->compare('goods_name',$this->goods_name,true);
		$criteria->compare('goods_weight',$this->goods_weight);
		$criteria->compare('goods_price',$this->goods_price,true);
		$criteria->compare('goods_number',$this->goods_number);
		$criteria->compare('goods_category_id',$this->goods_category_id);
		$criteria->compare('goods_brand_id',$this->goods_brand_id);
		$criteria->compare('goods_introduce',$this->goods_introduce,true);
		$criteria->compare('goods_big_img',$this->goods_big_img,true);
		$criteria->compare('goods_small_img',$this->goods_small_img,true);
		$criteria->compare('goods_create_time',$this->goods_create_time);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	/**
	 * [getGoodsinfoByPk description]
	 * 2015年9月27日22:17:32
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
    function getGoodsinfoByPk($id)
   {

   	$goods_info_id=Yii::app()->cache->get('goods_info'.$id);
   	if (!empty($goods_info_id)) 
   	{
   		return $goods_info_id;
   	}
   	
   	
   	$sql="select * from {{goods}} where goods_id='$id'";
   	$goods_info=$this->findBySql($sql);
    Yii::app()->cache->set('goods_info',$goods_info,3600);
   
   	return $good_info;

   }




}