<?php

/**
 * This is the model class for table "ant_morbidos".
 *
 * The followings are the available columns in table 'ant_morbidos':
 * @property integer $id
 * @property string $hip_arterial
 * @property string $hip_colesterolemia
 * @property string $hipotiroidismo
 * @property string $barotrauma
 * @property string $diab_mellitus
 * @property string $enf_renal
 * @property string $trauma_ac_agudo
 * @property string $vibraciones
 *
 * The followings are the available model relations:
 * @property Paciente $id0
 */
class AntMorbidos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ant_morbidos';
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
			array('id', 'numerical', 'integerOnly'=>true),
			array('hip_arterial, hip_colesterolemia, hipotiroidismo, barotrauma, diab_mellitus, enf_renal, trauma_ac_agudo, vibraciones', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, hip_arterial, hip_colesterolemia, hipotiroidismo, barotrauma, diab_mellitus, enf_renal, trauma_ac_agudo, vibraciones', 'safe', 'on'=>'search'),
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
			'id0' => array(self::BELONGS_TO, 'Paciente', 'id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'hip_arterial' => 'Hip Arterial',
			'hip_colesterolemia' => 'Hip Colesterolemia',
			'hipotiroidismo' => 'Hipotiroidismo',
			'barotrauma' => 'Barotrauma',
			'diab_mellitus' => 'Diab Mellitus',
			'enf_renal' => 'Enf Renal',
			'trauma_ac_agudo' => 'Trauma Ac Agudo',
			'vibraciones' => 'Vibraciones',
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
		$criteria->compare('hip_arterial',$this->hip_arterial,true);
		$criteria->compare('hip_colesterolemia',$this->hip_colesterolemia,true);
		$criteria->compare('hipotiroidismo',$this->hipotiroidismo,true);
		$criteria->compare('barotrauma',$this->barotrauma,true);
		$criteria->compare('diab_mellitus',$this->diab_mellitus,true);
		$criteria->compare('enf_renal',$this->enf_renal,true);
		$criteria->compare('trauma_ac_agudo',$this->trauma_ac_agudo,true);
		$criteria->compare('vibraciones',$this->vibraciones,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return AntMorbidos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
