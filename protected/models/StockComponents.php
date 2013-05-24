<?php

/**
 * This is the model class for table "stock_components".
 *
 * The followings are the available columns in table 'stock_components':
 * @property integer $id
 * @property integer $component_id
 * @property integer $warehouse_id
 * @property integer $warehouse_out
 * @property integer $stock
 *
 * The followings are the available model relations:
 * @property TComponentsOut $warehouseOut
 * @property TComponentsIn $component
 * @property TComponentsIn $warehouse
 */
class StockComponents extends CActiveRecord
{
    /**
     * Returns the static model of the specified AR class.
     * @return StockComponents the static model class
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
        return 'stock_components';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('component_id, warehouse_id, stock', 'required'),
            array('component_id, warehouse_id, stock', 'numerical', 'integerOnly'=>true),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, component_id, warehouse_id, warehouse_out, stock', 'safe', 'on'=>'search'),
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
            'component' => array(self::BELONGS_TO, 'TComponentsIn', 'component_id'),
            'component' => array(self::BELONGS_TO, 'TComponentsIn', 'component_id'),
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
            'warehouse_out' => 'Warehouse Out',
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
        $criteria->compare('component_id',$this->component_id);
        $criteria->compare('warehouse_id',$this->warehouse_id);
        $criteria->compare('stock',$this->stock);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }
}