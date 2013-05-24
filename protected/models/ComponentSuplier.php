<?php

/**
 * This is the model class for table "component_suplier".
 *
 * The followings are the available columns in table 'component_suplier':
 * @property integer $id
 * @property integer $suplier_id
 * @property integer $component_id
 * @property double $price
 *
 * The followings are the available model relations:
 * @property Components $component
 * @property Suplier $suplier
 */
class ComponentSuplier extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return ComponentSuplier the static model class
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
		return 'component_suplier';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('suplier_id, component_id, price', 'required'),
			array('suplier_id, component_id', 'numerical', 'integerOnly'=>true),
			array('price', 'numerical'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, suplier_id, component_id, price', 'safe', 'on'=>'search'),
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
			'component' => array(self::BELONGS_TO, 'Components', 'component_id'),
			'suplier' => array(self::BELONGS_TO, 'Suplier', 'suplier_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'suplier_id' => 'Suplier',
			'component_id' => 'Component',
			'price' => 'Price',
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
		$criteria->compare('suplier_id',$this->suplier_id);
		$criteria->compare('component_id',$this->component_id);
		$criteria->compare('price',$this->price);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}