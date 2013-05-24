<?php

/**
 * This is the model class for table "procurement".
 *
 * The followings are the available columns in table 'procurement':
 * @property integer $id
 * @property string $date_time
 * @property integer $suplier_id
 * @property string $description
 * @property integer $type_order
 * @property integer $shipping_id
 *
 * The followings are the available model relations:
 * @property ShippingZone $shipping
 * @property Suplier $suplier
 * @property OrderType $typeOrder
 */
class Procurement extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Procurement the static model class
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
		return 'procurement';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('date_time, suplier_id, description, type_order', 'required'),
			array('suplier_id, type_order, shipping_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, date_time, suplier_id, description, type_order, shipping_id', 'safe', 'on'=>'search'),
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
			'shipping' => array(self::BELONGS_TO, 'ShippingZone', 'shipping_id'),
			'suplier' => array(self::BELONGS_TO, 'Suplier', 'suplier_id'),
			'typeOrder' => array(self::BELONGS_TO, 'OrderType', 'type_order'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'date_time' => 'Date Time',
			'suplier_id' => 'Suplier',
			'description' => 'Description',
			'type_order' => 'Type Order',
			'shipping_id' => 'Shipping',
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
		$criteria->compare('date_time',$this->date_time,true);
		$criteria->compare('suplier_id',$this->suplier_id);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('type_order',$this->type_order);
		$criteria->compare('shipping_id',$this->shipping_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}