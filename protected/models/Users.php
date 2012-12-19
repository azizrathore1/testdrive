<?php

/**
 * This is the model class for table "tbl_users".
 *
 * The followings are the available columns in table 'tbl_users':
 * @property string $emp_id
 * @property string $employee_name
 * @property string $address
 * @property string $phone
 * @property string $email
 * @property string $status
 *
 * The followings are the available model relations:
 * @property TblClients[] $tblClients
 */
class Users extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Users the static model class
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
		return 'tbl_users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('employee_name, address, email, status', 'required'),
			array('employee_name, address, email, status', 'length', 'max'=>128),
			array('phone', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('emp_id, employee_name, address, phone, email, status', 'safe', 'on'=>'search'),
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
			'tblClients' => array(self::HAS_MANY, 'TblClients', 'emp_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'emp_id' => 'Emp',
			'employee_name' => 'Employee Name',
			'address' => 'Address',
			'phone' => 'Phone',
			'email' => 'Email',
			'status' => 'Status',
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

		$criteria->compare('emp_id',$this->emp_id,true);
		$criteria->compare('employee_name',$this->employee_name,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('status',$this->status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	public function read ($id = NULL) {
    	try {
        		//$guest = Guest::find('all', array('conditions' => "voucher_id = '$id'"));
    		$user_record = Users::find('all');
        	} catch (Exception $e) {
            //return FALSE;

        }
        return $user_record;
    }
}