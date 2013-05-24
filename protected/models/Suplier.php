<?php

/**
 * This is the model class for table "suplier".
 *
 * The followings are the available columns in table 'suplier':
 * @property integer $id
 * @property string $suplier_name
 * @property string $address
 * @property string $email
 * @property string $city
 * @property string $post_code
 * @property string $phone
 * @property string $web
 * @property double $cost_order
 *
 * The followings are the available model relations:
 * @property ComponentSuplier[] $componentSupliers
 * @property Procurement[] $procurements
 */
class Suplier extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Suplier the static model class
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
		return 'suplier';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('suplier_name, address, email, city, post_code, phone, web, cost_order', 'required'),
			array('cost_order', 'numerical'),
			array('suplier_name, email, city', 'length', 'max'=>255),
			array('post_code', 'length', 'max'=>10),
			array('phone', 'length', 'max'=>50),
			array('web', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, suplier_name, address, email, city, post_code, phone, web, cost_order', 'safe', 'on'=>'search'),
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
			'componentSupliers' => array(self::HAS_MANY, 'ComponentSuplier', 'suplier_id'),
			'procurements' => array(self::HAS_MANY, 'Procurement', 'suplier_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'suplier_name' => 'Suplier Name',
			'address' => 'Address',
			'email' => 'Email',
			'city' => 'City',
			'post_code' => 'Post Code',
			'phone' => 'Phone',
			'web' => 'Web',
			'cost_order' => 'Cost Order',
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
		$criteria->compare('suplier_name',$this->suplier_name,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('post_code',$this->post_code,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('web',$this->web,true);
		$criteria->compare('cost_order',$this->cost_order);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}