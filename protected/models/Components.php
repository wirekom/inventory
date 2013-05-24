<?php

/**
 * This is the model class for table "components".
 *
 * The followings are the available columns in table 'components':
 * @property integer $id
 * @property string $component_name
 * @property integer $piece_id
 * @property double $rate_price
 * @property integer $min_stock
 * @property integer $stock
 *
 * The followings are the available model relations:
 * @property ComponentSuplier[] $componentSupliers
 * @property Piece $piece
 * @property GoodsBuild[] $goodsBuilds
 * @property TComponentsIn[] $tComponentsIns
 * @property TComponentsOut[] $tComponentsOuts
 */
class Components extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Components the static model class
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
		return 'components';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('component_name, piece_id, rate_price, min_stock, stock', 'required'),
			array('piece_id, min_stock, stock', 'numerical', 'integerOnly'=>true),
			array('rate_price', 'numerical'),
			array('component_name', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, component_name, piece_id, rate_price, min_stock, stock', 'safe', 'on'=>'search'),
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
			'componentSupliers' => array(self::HAS_MANY, 'ComponentSuplier', 'component_id'),
			'piece' => array(self::BELONGS_TO, 'Piece', 'piece_id'),
			'goodsBuilds' => array(self::HAS_MANY, 'GoodsBuild', 'component_id'),
			'tComponentsIns' => array(self::HAS_MANY, 'TComponentsIn', 'component_id'),
			'tComponentsOuts' => array(self::HAS_MANY, 'TComponentsOut', 'component_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'component_name' => 'Component Name',
			'piece_id' => 'Piece',
			'rate_price' => 'Rate Price',
			'min_stock' => 'Min Stock',
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
		$criteria->compare('component_name',$this->component_name,true);
		$criteria->compare('piece_id',$this->piece_id);
		$criteria->compare('rate_price',$this->rate_price);
		$criteria->compare('min_stock',$this->min_stock);
		$criteria->compare('stock',$this->stock);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}