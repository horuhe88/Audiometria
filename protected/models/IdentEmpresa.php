<?php

/**
 * This is the model class for table "ident_empresa".
 *
 * The followings are the available columns in table 'ident_empresa':
 * @property integer $id
 * @property string $idf_empresa
 * @property integer $id_Paciente
 * @property string $Fecha
 * @property string $Nombre_E
 * @property string $RUT
 * @property string $Direccion
 */
class IdentEmpresa extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ident_empresa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_Paciente', 'numerical', 'integerOnly'=>true),
			array('idf_empresa, Nombre_E, RUT, Direccion', 'length', 'max'=>45),
			array('Fecha', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, idf_empresa, id_Paciente, Fecha, Nombre_E, RUT, Direccion', 'safe', 'on'=>'search'),
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
			'idf_empresa' => 'Idf Empresa',
			'id_Paciente' => 'Id Paciente',
			'Fecha' => 'Fecha',
			'Nombre_E' => 'Nombre E',
			'RUT' => 'Rut',
			'Direccion' => 'Direccion',
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
		$criteria->compare('idf_empresa',$this->idf_empresa,true);
		$criteria->compare('id_Paciente',$this->id_Paciente);
		$criteria->compare('Fecha',$this->Fecha,true);
		$criteria->compare('Nombre_E',$this->Nombre_E,true);
		$criteria->compare('RUT',$this->RUT,true);
		$criteria->compare('Direccion',$this->Direccion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return IdentEmpresa the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
