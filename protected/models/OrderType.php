<?php

/**
 * This is the model class for table "order_type".
 *
 * The followings are the available columns in table 'order_type':
 * @property integer $id
 * @property string $order_name
 *
 * The followings are the available model relations:
 * @property GoodsTransaction[] $goodsTransactions
 * @property Procurement[] $procurements
 */
class OrderType extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return OrderType the static model class
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
		return 'order_type';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('order_name', 'required'),
			array('order_name', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, order_name', 'safe', 'on'=>'search'),
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
			'goodsTransactions' => array(self::HAS_MANY, 'GoodsTransaction', 'type_order'),
			'procurements' => array(self::HAS_MANY, 'Procurement', 'type_order'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'order_name' => 'Order Name',
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
		$criteria->compare('order_name',$this->order_name,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}