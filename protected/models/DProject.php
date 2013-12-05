<?php

/**
 * This is the model class for table "d_project".
 *
 * The followings are the available columns in table 'd_project':
 * @property integer $id
 * @property string $number
 * @property string $name
 * @property integer $promoter
 * @property integer $personCount
 * @property string $demand
 * @property string $startdate
 * @property string $lastdate
 * @property string $content
 * @property string $email
 * @property string $state
 * @property string $promoterType
 * @property string $updatetime
 */
class DProject extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'd_project';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			
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
			'number' => 'Number',
			'name' => 'Name',
			'promoter' => 'Promoter',
			'personCount' => 'Person Count',
			'demand' => 'Demand',
			'startdate' => 'Startdate',
			'lastdate' => 'Lastdate',
			'content' => 'Content',
			'email' => 'Email',
			'state' => 'State',
			'promoterType' => 'Promoter Type',
			'updatetime' => 'Updatetime',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('number',$this->number,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('promoter',$this->promoter);
		$criteria->compare('personCount',$this->personCount);
		$criteria->compare('demand',$this->demand,true);
		$criteria->compare('startdate',$this->startdate,true);
		$criteria->compare('lastdate',$this->lastdate,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('promoterType',$this->promoterType,true);
		$criteria->compare('updatetime',$this->updatetime,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	private $basesql="select
		 d_project.*,d_user.username as promoterName,d_dict.dname as  promoterTypeName
		 from d_project
		 left join d_user on d_project.promoter=d_user.id
		  left join d_dict on d_project.promoterType=d_dict.dcode and d_dict.dtype='orgtype' ";
	public function pageFind($tj="1=1"){
		$sql=$this->basesql." where $tj";
		return Yii::app()->db->createCommand($sql)->queryAll();
	}
	/*
	分页查询   第一页为0
	*/
	public function pageingFind($tj,$currentPage,$pageSize){
		$start=($currentPage)*$pageSize;
		$limit_sql=" limit $start,$pageSize ";
		$sql=$this->basesql." where $tj";
		$result=array();
		//总数		
		$count=Yii::app()->db->createCommand("select count(1) from ($sql) x")->queryScalar();		
		$result['data']=Yii::app()->db->createCommand($sql.$limit_sql)->queryAll();

		Yii::import('application.vendor.*');
		require_once('pageHelper.php');
		$mypage=new PageHelper(5,$count,$currentPage,$pageSize);
		$result['page']=$mypage->createPageButtons();

		return $result;
	}
	public function FindByid($id){
		$sql=$this->basesql."where d_project.id=:id";
		$command= Yii::app()->db->createCommand($sql);
		$command->bindParam(":id",$id,PDO::PARAM_STR);
		return $command->queryAll();
	}
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DProject the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
}
