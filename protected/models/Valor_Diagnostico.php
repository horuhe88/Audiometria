<?php

/**
 * This is the model class for table "val_diagn".
 *
 * The followings are the available columns in table 'val_diagn':
 * @property integer $id
 * @property integer $id_diagnostico
 * @property string $oido
 * @property integer $frecuecia
 * @property integer $H_T_L
 * @property string $via_aerea
 * @property string $via_osea
 *
 * The followings are the available model relations:
 * @property Diagnostico $idDiagnostico
 */
class Valor_Diagnostico extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'val_diagn';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_diagnostico', 'required'),
			array('id_diagnostico, frecuecia, H_T_L', 'numerical', 'integerOnly'=>true),
			array('oido, via_aerea, via_osea', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_diagnostico, oido, frecuecia, H_T_L, via_aerea, via_osea', 'safe', 'on'=>'search'),
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
			'idDiagnostico' => array(self::BELONGS_TO, 'Diagnostico', 'id_diagnostico'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_diagnostico' => 'Id Diagnostico',
			'oido' => 'Oido',
			'frecuecia' => 'Frecuecia',
			'H_T_L' => 'H T L',
			'via_aerea' => 'Via Aerea',
			'via_osea' => 'Via Osea',
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
		$criteria->compare('id_diagnostico',$this->id_diagnostico);
		$criteria->compare('oido',$this->oido,true);
		$criteria->compare('frecuecia',$this->frecuecia);
		$criteria->compare('H_T_L',$this->H_T_L);
		$criteria->compare('via_aerea',$this->via_aerea,true);
		$criteria->compare('via_osea',$this->via_osea,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Valor_Diagnostico the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
