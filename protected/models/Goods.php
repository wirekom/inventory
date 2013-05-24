<?php

/**
 * This is the model class for table "goods".
 *
 * The followings are the available columns in table 'goods':
 * @property integer $id
 * @property string $goods_name
 * @property double $rate_price
 * @property string $min_stock
 * @property string $stock
 *
 * The followings are the available model relations:
 * @property GoodsBuild[] $goodsBuilds
 * @property GoodsTransaction[] $goodsTransactions
 * @property TComponentsOut[] $tComponentsOuts
 */
class Goods extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Goods the static model class
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
		return 'goods';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('goods_name, rate_price, min_stock, stock', 'required'),
			array('rate_price', 'numerical'),
			array('goods_name', 'length', 'max'=>255),
			array('min_stock, stock', 'length', 'max'=>20),
			array('image', 'file', 'allowEmpty'=>false, 'types'=>'jpg, gif, png, pdf'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, goods_name, rate_price, min_stock, stock, image', 'safe', 'on'=>'search'),
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
			'goodsBuilds' => array(self::HAS_MANY, 'GoodsBuild', 'goods_id'),
			'goodsTransactions' => array(self::HAS_MANY, 'GoodsTransaction', 'goods_id'),
			'tComponentsOuts' => array(self::HAS_MANY, 'TComponentsOut', 'goods_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'goods_name' => 'Goods Name',
			'rate_price' => 'Rate Price',
			'min_stock' => 'Min Stock',
			'stock' => 'Stock',
			'image' => 'Image',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('goods_name',$this->goods_name,true);
		$criteria->compare('rate_price',$this->rate_price);
		$criteria->compare('min_stock',$this->min_stock,true);
		$criteria->compare('stock',$this->stock,true);
		$criteria->compare('image',$this->image,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}