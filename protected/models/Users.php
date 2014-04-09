<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $user_userid
 * @property string $user_username
 * @property string $user_password
 * @property string $user_firstname
 * @property string $user_lastname
 * @property string $user_email
 * @property string $user_phone
 * @property string $user_address
 */
class Users extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_username, user_password, user_firstname, user_lastname, user_email, user_phone, user_address', 'required'),
			array('user_username, user_firstname, user_lastname', 'length', 'max'=>50),
			array('user_password', 'length', 'max'=>25),
			array('user_email', 'length', 'max'=>75),
			array('user_phone', 'length', 'max'=>20),
			array('user_address', 'length', 'max'=>150),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('user_userid, user_username, user_password, user_firstname, user_lastname, user_email, user_phone, user_address', 'safe', 'on'=>'search'),
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
			'user_userid' => 'Userid',
			'user_username' => 'Username',
			'user_password' => 'Password',
			'user_firstname' => 'Firstname',
			'user_lastname' => 'Lastname',
			'user_email' => 'Email',
			'user_phone' => 'Phone',
			'user_address' => 'Address',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('user_userid',$this->user_userid);
		$criteria->compare('user_username',$this->user_username,true);
		$criteria->compare('user_password',$this->user_password,true);
		$criteria->compare('user_firstname',$this->user_firstname,true);
		$criteria->compare('user_lastname',$this->user_lastname,true);
		$criteria->compare('user_email',$this->user_email,true);
		$criteria->compare('user_phone',$this->user_phone,true);
		$criteria->compare('user_address',$this->user_address,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Users the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
