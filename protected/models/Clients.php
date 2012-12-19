<?php

/**
 * This is the model class for table "tbl_clients".
 *
 * The followings are the available columns in table 'tbl_clients':
 * @property string $client_id
 * @property string $name
 * @property string $account
 * @property string $address
 * @property string $telephone1
 * @property string $email
 * @property string $emp_id
 *
 * The followings are the available model relations:
 * @property TblUsers $emp
 */
class Clients extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Clients the static model class
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
		return 'tbl_clients';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('account', 'required'),
			array('name, address', 'length', 'max'=>30),
			array('account', 'length', 'max'=>120),
			array('telephone1', 'length', 'max'=>20),
			array('email', 'length', 'max'=>50),
			array('emp_id', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('client_id, name, account, address, telephone1, email, emp_id', 'safe', 'on'=>'search'),
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
			'emp' => array(self::BELONGS_TO, 'TblUsers', 'emp_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'client_id' => 'Client',
			'name' => 'Name',
			'account' => 'Account',
			'address' => 'Address',
			'telephone1' => 'Telephone1',
			'email' => 'Email',
			'emp_id' => 'Emp',
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

		$criteria->compare('client_id',$this->client_id,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('account',$this->account,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('telephone1',$this->telephone1,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('emp_id',$this->emp_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}