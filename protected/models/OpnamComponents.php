<?php

/**
 * This is the model class for table "opnam_components".
 *
 * The followings are the available columns in table 'opnam_components':
 * @property integer $id
 * @property integer $component_id
 * @property integer $warehouse_id
 * @property integer $stock_component
 * @property string $office
 * @property string $date_time
 * @property string $decsription
 *
 * The followings are the available model relations:
 * @property StockComponents $component
 * @property Warehouse $warehouse
 */
class OpnamComponents extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return OpnamComponents the static model class
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
		return 'opnam_components';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('component_id, warehouse_id, stock_component, office, date_time, decsription', 'required'),
			array('component_id, warehouse_id, stock_component', 'numerical', 'integerOnly'=>true),
			array('office', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, component_id, warehouse_id, stock_component, office, date_time, decsription', 'safe', 'on'=>'search'),
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
			'warehouse' => array(self::BELONGS_TO, 'Warehouse', 'warehouse_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'component_id' => 'Component',
			'warehouse_id' => 'Warehouse',
			'stock_component' => 'Stock Component',
			'office' => 'Office',
			'date_time' => 'date_time',
			'decsription' => 'Decsription',
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
		$criteria->compare('component_id',$this->component_id);
		$criteria->compare('warehouse_id',$this->warehouse_id);
		$criteria->compare('stock_component',$this->stock_component);
		$criteria->compare('office',$this->office,true);
		$criteria->compare('date_time',$this->date_time,true);
		$criteria->compare('decsription',$this->decsription,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}