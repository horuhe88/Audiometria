<?php

/**
 * This is the model class for table "diagnostico".
 *
 * The followings are the available columns in table 'diagnostico':
 * @property integer $id
 * @property string $id_paciente
 * @property string $id_usuario
 * @property string $fecha
 *
 * The followings are the available model relations:
 * @property ValDiagnostico $valDiagnostico
 */
class Diagnostico extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'diagnostico';
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
			array('id_paciente, id_usuario', 'length', 'max'=>45),
			array('fecha', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_paciente, id_usuario, fecha', 'safe', 'on'=>'search'),
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
			'valDiagnostico' => array(self::HAS_ONE, 'ValDiagnostico', 'id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_paciente' => 'Id Paciente',
			'id_usuario' => 'Id Usuario',
			'fecha' => 'Fecha',
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
		$criteria->compare('id_paciente',$this->id_paciente,true);
		$criteria->compare('id_usuario',$this->id_usuario,true);
		$criteria->compare('fecha',$this->fecha,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Diagnostico the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
