<?php

/**
 * This is the model class for table "tbl_currencys".
 *
 * The followings are the available columns in table 'tbl_currencys':
 * @property string $currency_id
 * @property string $currency_pair
 * @property string $decimals
 */
class Currency extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Currency the static model class
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
		return 'tbl_currencys';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('decimals', 'required'),
			array('currency_pair', 'length', 'max'=>128),
			array('decimals', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('currency_id, currency_pair, decimals', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'currency_id' => 'Currency',
			'currency_pair' => 'Currency Pair',
			'decimals' => 'Decimals',
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

		$criteria->compare('currency_id',$this->currency_id,true);
		$criteria->compare('currency_pair',$this->currency_pair,true);
		$criteria->compare('decimals',$this->decimals,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}