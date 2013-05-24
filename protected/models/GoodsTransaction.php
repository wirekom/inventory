<?php

/**
 * This is the model class for table "goods_transaction".
 *
 * The followings are the available columns in table 'goods_transaction':
 * @property integer $id
 * @property integer $qty
 * @property string $date_time
 * @property string $decsription
 * @property integer $goods_id
 * @property string $in
 * @property string $out
 * @property string $balance_history
 * @property integer $user_id
 * @property integer $type_order
 * @property integer $shipping_id
 *
 * The followings are the available model relations:
 * @property Goods $goods
 * @property OrderType $typeOrder
 * @property ShippingZone $shipping
 * @property TComponentsOut[] $tComponentsOuts
 */
class GoodsTransaction extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return GoodsTransaction the static model class
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
		return 'goods_transaction';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('qty, date_time, decsription, goods_id, in, out, balance_history, user_id, type_order, warehouse_to', 'required'),
			array('qty, goods_id, user_id, type_order, shipping_id, warehouse_from, warehouse_to', 'numerical', 'integerOnly'=>true),
			array('in, out, balance_history', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, qty, date_time, decsription, goods_id, in, out, balance_history, user_id, type_order, shipping_id, warehouse_from, warehouse_to', 'safe', 'on'=>'search'),
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
            'typeOrder' => array(self::BELONGS_TO, 'OrderType', 'type_order'),
            'shipping' => array(self::BELONGS_TO, 'ShippingZone', 'shipping_id'),
            'goods' => array(self::BELONGS_TO, 'Goods', 'goods_id'),
            'warehouseFrom' => array(self::BELONGS_TO, 'Warehouse', 'warehouse_from'),
            'warehouseTo' => array(self::BELONGS_TO, 'Warehouse', 'warehouse_to'),
            'stockGoods' => array(self::HAS_MANY, 'StockGoods', 'goods_id'),
            'stockGoods1' => array(self::HAS_MANY, 'StockGoods', 'warehouse_id'),
            'tComponentsOuts' => array(self::HAS_MANY, 'TComponentsOut', 'goods_t_id'),
        );
    } 
	
	public function afterSave(){
		Goods::model()->updateByPk($this->goods_id,array('stock'=>$this->balance_history));
		StockComponents::model()->updateByPk($this->goods_id,array('stock'=>$this->balance_history));
	}
	
	public function beforeSave()
	{
		$in = intval($this->getAttribute('in'));
		$out = intval($this->getAttribute('out')); 
		$goods_id = $this->getAttribute('goods_id');
		$stock = intval(Goods::model()->findByPk($goods_id)->stock);
				//echo $stock;
			if($stock >= 0){
					//echo '1';
				if($this->isNewRecord)
					$balance_history = $stock + $in - $out;
				else{ 
					$model = $this->findByPk($this->id);
					$ms = intval($model->in);
					$mk = intval($model->out);
				//echo "$stok - $ms + $mk + $in - $out =";
				//echo 
					$balance_history = $stock - $ms + $mk + $in - $out;
				}
				if($balance_history < 0){ 
					$this->addError('out',"Proses gagal, sisa stok tidak boleh kurang dari 0"); 
					$return = false;
				}else{
					$this->setAttribute('balance_history', $balance_history);
					$return = true;
				}
			}else{ 
				echo '1';
				$return = false; 
			}
		return $return;
	}
	
	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	
	{
		return array(
			'id' => 'ID',
			'qty' => 'Qty',
			'date_time' => 'Date Time',
			'decsription' => 'Decsription',
			'goods_id' => 'Goods',
			'in' => 'In',
			'out' => 'Out',
			'balance_history' => 'Balance History',
			'user_id' => 'User',
			'type_order' => 'Type Order',
			'shipping_id' => 'Shipping',
			'warehouse_from' => 'Warehouse From',
			'warehouse_to' => 'Warehouse to',
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
		$criteria->compare('qty',$this->qty);
		$criteria->compare('date_time',$this->date_time,true);
		$criteria->compare('decsription',$this->decsription,true);
		$criteria->compare('goods_id',$this->goods_id);
		$criteria->compare('in',$this->in,true);
		$criteria->compare('out',$this->out,true);
		$criteria->compare('balance_history',$this->balance_history,true);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('type_order',$this->type_order);
		$criteria->compare('shipping_id',$this->shipping_id);
		$criteria->compare('warehouse_from',$this->warehouse_from);
		$criteria->compare('warehouse_to',$this->warehouse_to);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}