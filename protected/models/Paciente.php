<?php

/**
 * This is the model class for table "paciente".
 *
 * The followings are the available columns in table 'paciente':
 * @property integer $id
 * @property string $Nombre_Apellido
 * @property string $Edad
 * @property string $Cedula
 * @property string $Sexo
 * @property string $Fecha_de_nacimiento
 * @property string $Direccion
 * @property string $Barrio
 * @property string $Telefono
 * @property string $Ocupacion
 * @property string $Procedencia
 * @property string $Fecha_Realizacion
 */
class Paciente extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'paciente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Nombre_Apellido, Edad, Cedula, Sexo, Direccion, Barrio, Telefono, Ocupacion, Procedencia', 'length', 'max'=>45),
			array('Fecha_de_nacimiento, Fecha_Realizacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, Nombre_Apellido, Edad, Cedula, Sexo, Fecha_de_nacimiento, Direccion, Barrio, Telefono, Ocupacion, Procedencia, Fecha_Realizacion', 'safe', 'on'=>'search'),
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
			'Nombre_Apellido' => 'Nombre Apellido',
			'Edad' => 'Edad',
			'Cedula' => 'Cedula',
			'Sexo' => 'Sexo',
			'Fecha_de_nacimiento' => 'Fecha De Nacimiento',
			'Direccion' => 'Direccion',
			'Barrio' => 'Barrio',
			'Telefono' => 'Telefono',
			'Ocupacion' => 'Ocupacion',
			'Procedencia' => 'Procedencia',
			'Fecha_Realizacion' => 'Fecha Realizacion',
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
		$criteria->compare('Nombre_Apellido',$this->Nombre_Apellido,true);
		$criteria->compare('Edad',$this->Edad,true);
		$criteria->compare('Cedula',$this->Cedula,true);
		$criteria->compare('Sexo',$this->Sexo,true);
		$criteria->compare('Fecha_de_nacimiento',$this->Fecha_de_nacimiento,true);
		$criteria->compare('Direccion',$this->Direccion,true);
		$criteria->compare('Barrio',$this->Barrio,true);
		$criteria->compare('Telefono',$this->Telefono,true);
		$criteria->compare('Ocupacion',$this->Ocupacion,true);
		$criteria->compare('Procedencia',$this->Procedencia,true);
		$criteria->compare('Fecha_Realizacion',$this->Fecha_Realizacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Paciente the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function searchByEmpresa(){
		$data = array();
		$data["id"] ="2";
		$data["nombre"] = "dario";
		$data["dato"] = "Coso";

		$dataT = array();
		$dataT[] = $data;

		$data2 = array();
		$data2["id"] ="2";
		$data2["nombre"] = "dario";
		$data2["dato"] = "Coso";

		$dataT[] = $data2;

		return new CArrayDataProvider($dataT,
    array(
        'sort' => array( //optional and sortring
            'attributes' => array(
                'id', 
                'nombre',
                'dato'
            ),
        ),
        'pagination' => array('pageSize' => 10) //optional add a pagination
    )
);		

	}
}
