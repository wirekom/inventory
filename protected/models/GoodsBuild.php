<?php

/**
 * This is the model class for table "goods_build".
 *
 * The followings are the available columns in table 'goods_build':
 * @property integer $id
 * @property integer $goods_id
 * @property integer $components_id
 * @property string $component_qty
 *
 * The followings are the available model relations:
 * @property Components $component
 * @property Goods $goods
 */
class GoodsBuild extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return GoodsBuild the static model class
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
		return 'goods_build';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('goods_id, components_id, component_qty', 'required'),
			array('goods_id, components_id', 'numerical', 'integerOnly'=>true),
			array('component_qty', 'numerical'),
			array('component_qty', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, goods_id,components_id, component_qty', 'safe', 'on'=>'search'),
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
			'component_qty' => 'Component Qty',
			'components_id' => 'Component',
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
		$criteria->compare('component_qty',$this->component_qty,true);
		$criteria->compare('components_id',$this->components_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}