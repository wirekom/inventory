<?php

/**
 * This is the model class for table "production".
 *
 * The followings are the available columns in table 'production':
 * @property integer $id
 * @property integer $goods_id
 * @property integer $components_id
 * @property integer $warehouse_id
 *
 * The followings are the available model relations:
 * @property Warehouse $warehouse
 * @property Goods $goods
 * @property Components $components
 */
class Production extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Production the static model class
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
		return 'production';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('goods_id, components_qty, warehouse_id', 'required'),
			array('goods_id, components_qty, warehouse_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, goods_id, components_qty, warehouse_id', 'safe', 'on'=>'search'),
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
			'warehouse' => array(self::BELONGS_TO, 'Warehouse', 'warehouse_id'),
			'goods' => array(self::BELONGS_TO, 'Goods', 'goods_id'),
			'components' => array(self::BELONGS_TO, 'Components', 'components_id'),
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
			'components_qty' => 'Components Qty',
			'warehouse_id' => 'Warehouse',
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
		$criteria->compare('components_qty',$this->components_qty);
		$criteria->compare('warehouse_id',$this->warehouse_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}