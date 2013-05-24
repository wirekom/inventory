<?php

/**
 * This is the model class for table "stock_goods".
 *
 * The followings are the available columns in table 'stock_goods':
 * @property integer $id
 * @property integer $goods_id
 * @property integer $warehouse_id
 * @property integer $stock
 */
class StockGoods extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return StockGoods the static model class
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
		return 'stock_goods';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('goods_id, warehouse_id, stock', 'required'),
			array('goods_id, warehouse_id, stock', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, goods_id, warehouse_id, stock', 'safe', 'on'=>'search'),
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
			'goods' => array(self::BELONGS_TO, 'GoodsTransaction', 'goods_id'),
			'warehouse' => array(self::BELONGS_TO, 'GoodsTransaction', 'warehouse_from'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'goods_id' => 'Goods',
			'warehouse_id' => 'Warehouse',
			'stock' => 'Stock',
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
		$criteria->compare('goods_id',$this->goods_id);
		$criteria->compare('warehouse_id',$this->warehouse_id);
		$criteria->compare('stock',$this->stock);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}