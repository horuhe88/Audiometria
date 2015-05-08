<?php

/**
 * This is the model class for table "diagnostico".
 *
 * The followings are the available columns in table 'diagnostico':
 * @property integer $id
 * @property string $idf_diag_evaluador
 * @property string $id_paciente
 * @property string $id_usuario
 * @property string $fecha
 * @property integer $ADer250
 * @property integer $ODer250
 * @property integer $AIzq250
 * @property integer $OIzq250
 * @property integer $ADer500
 * @property integer $ODer500
 * @property integer $AIzq500
 * @property integer $OIzq500
 * @property integer $ADer1000
 * @property integer $ODer1000
 * @property integer $AIzq1000
 * @property integer $OIzq1000
 * @property integer $ADer2000
 * @property integer $ODer2000
 * @property integer $AIzq2000
 * @property integer $OIzq2000
 * @property integer $ADer3000
 * @property integer $ODer3000
 * @property integer $AIzq3000
 * @property integer $OIzq3000
 * @property integer $ADer4000
 * @property integer $ODer4000
 * @property integer $AIzq4000
 * @property integer $OIzq4000
 * @property integer $ADer6000
 * @property integer $ODer6000
 * @property integer $AIzq6000
 * @property integer $OIzq6000
 * @property integer $ADer8000
 * @property integer $ODer8000
 * @property integer $AIzq8000
 * @property integer $OIzq8000
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
			array('ADer250, ODer250, AIzq250, OIzq250, ADer500, ODer500, AIzq500, OIzq500, ADer1000, ODer1000, AIzq1000, OIzq1000, ADer2000, ODer2000, AIzq2000, OIzq2000, ADer3000, ODer3000, AIzq3000, OIzq3000, ADer4000, ODer4000, AIzq4000, OIzq4000, ADer6000, ODer6000, AIzq6000, OIzq6000, ADer8000, ODer8000, AIzq8000, OIzq8000', 'numerical', 'integerOnly'=>true),
			array('idf_diag_evaluador, id_paciente, id_usuario', 'length', 'max'=>45),
			array('fecha', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, idf_diag_evaluador, id_paciente, id_usuario, fecha, ADer250, ODer250, AIzq250, OIzq250, ADer500, ODer500, AIzq500, OIzq500, ADer1000, ODer1000, AIzq1000, OIzq1000, ADer2000, ODer2000, AIzq2000, OIzq2000, ADer3000, ODer3000, AIzq3000, OIzq3000, ADer4000, ODer4000, AIzq4000, OIzq4000, ADer6000, ODer6000, AIzq6000, OIzq6000, ADer8000, ODer8000, AIzq8000, OIzq8000', 'safe', 'on'=>'search'),
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
			'idf_diag_evaluador' => 'Idf Diag Evaluador',
			'id_paciente' => 'Id Paciente',
			'id_usuario' => 'Id Usuario',
			'fecha' => 'Fecha',
			'ADer250' => 'Frecuencia 250',
			'ODer250' => 'Frecuencia 250',
			'AIzq250' => 'Frecuencia 250',
			'OIzq250' => 'Frecuencia 250',
			'ADer500' => 'Frecuencia 500',
			'ODer500' => 'Frecuencia 500',
			'AIzq500' => 'Frecuencia 500',
			'OIzq500' => 'Frecuencia 500',
			'ADer1000' => 'Frecuencia 1000',
			'ODer1000' => 'Frecuencia 1000',
			'AIzq1000' => 'Frecuencia 1000',
			'OIzq1000' => 'Frecuencia 1000',
			'ADer2000' => 'Frecuencia 2000',
			'ODer2000' => 'Frecuencia 2000',
			'AIzq2000' => 'Frecuencia 2000',
			'OIzq2000' => 'Frecuencia 2000',
			'ADer3000' => 'Frecuencia 3000',
			'ODer3000' => 'Frecuencia 3000',
			'AIzq3000' => 'Frecuencia 3000',
			'OIzq3000' => 'Frecuencia 3000',
			'ADer4000' => 'Frecuencia 4000',
			'ODer4000' => 'Frecuencia 4000',
			'AIzq4000' => 'Frecuencia 4000',
			'OIzq4000' => 'Frecuencia 4000',
			'ADer6000' => 'Frecuencia 6000',
			'ODer6000' => 'Frecuencia 6000',
			'AIzq6000' => 'Frecuencia 6000',
			'OIzq6000' => 'Frecuencia 6000',
			'ADer8000' => 'Frecuencia 8000',
			'ODer8000' => 'Frecuencia 8000',
			'AIzq8000' => 'Frecuencia 8000',
			'OIzq8000' => 'Frecuencia 8000',
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
		$criteria->compare('idf_diag_evaluador',$this->idf_diag_evaluador,true);
		$criteria->compare('id_paciente',$this->id_paciente,true);
		$criteria->compare('id_usuario',$this->id_usuario,true);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('ADer250',$this->ADer250);
		$criteria->compare('ODer250',$this->ODer250);
		$criteria->compare('AIzq250',$this->AIzq250);
		$criteria->compare('OIzq250',$this->OIzq250);
		$criteria->compare('ADer500',$this->ADer500);
		$criteria->compare('ODer500',$this->ODer500);
		$criteria->compare('AIzq500',$this->AIzq500);
		$criteria->compare('OIzq500',$this->OIzq500);
		$criteria->compare('ADer1000',$this->ADer1000);
		$criteria->compare('ODer1000',$this->ODer1000);
		$criteria->compare('AIzq1000',$this->AIzq1000);
		$criteria->compare('OIzq1000',$this->OIzq1000);
		$criteria->compare('ADer2000',$this->ADer2000);
		$criteria->compare('ODer2000',$this->ODer2000);
		$criteria->compare('AIzq2000',$this->AIzq2000);
		$criteria->compare('OIzq2000',$this->OIzq2000);
		$criteria->compare('ADer3000',$this->ADer3000);
		$criteria->compare('ODer3000',$this->ODer3000);
		$criteria->compare('AIzq3000',$this->AIzq3000);
		$criteria->compare('OIzq3000',$this->OIzq3000);
		$criteria->compare('ADer4000',$this->ADer4000);
		$criteria->compare('ODer4000',$this->ODer4000);
		$criteria->compare('AIzq4000',$this->AIzq4000);
		$criteria->compare('OIzq4000',$this->OIzq4000);
		$criteria->compare('ADer6000',$this->ADer6000);
		$criteria->compare('ODer6000',$this->ODer6000);
		$criteria->compare('AIzq6000',$this->AIzq6000);
		$criteria->compare('OIzq6000',$this->OIzq6000);
		$criteria->compare('ADer8000',$this->ADer8000);
		$criteria->compare('ODer8000',$this->ODer8000);
		$criteria->compare('AIzq8000',$this->AIzq8000);
		$criteria->compare('OIzq8000',$this->OIzq8000);

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
