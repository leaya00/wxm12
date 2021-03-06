<?php

/**
 * This is the model class for table "d_applyproject".
 *
 * The followings are the available columns in table 'd_applyproject':
 * @property string $id
 * @property string $projectid
 * @property string $name
 * @property string $telphone
 * @property string $email
 * @property string $describe
 * @property string $userid
 * @property string $starttime
 */
class DApplyproject extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'd_applyproject';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id', 'required'),
			array('id, projectid', 'length', 'max'=>36),
			array('name, telphone, email', 'length', 'max'=>50),
			array('describe', 'length', 'max'=>1000),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, projectid, name, telphone, email, describe', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'projectid' => 'Projectid',
			'name' => 'Name',
			'telphone' => 'Telphone',
			'email' => 'Email',
			'describe' => 'Describe',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('projectid',$this->projectid,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('telphone',$this->telphone,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('describe',$this->describe,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	public function checkApplyToCount($userid,$projectid){
		return Yii::app()->db->createCommand("select count(1) from d_applyproject where userid='$userid' and projectid='$projectid'")->queryScalar();	
	}
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DApplyproject the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
