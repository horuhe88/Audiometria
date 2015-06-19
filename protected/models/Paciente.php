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

	public static $filterEmpresa;
	
	
	function __construct() {
       parent::__construct();
       self::$filterEmpresa = new PacienteEmpresa();
   }

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



public function getFilterByEmpresa(){
		return self::$filterEmpresa;
	}
	
	public function setFilterEmpresa($filter){
		self::$filterEmpresa = $filter;
	}

	public function searchByEmpresa(){
		
		$sql = "SELECT paciente.*,ident_empresa.Nombre_E FROM paciente,ident_empresa";
		$where = "";
		$cont =0;
		
		if(self::$filterEmpresa->cedula != null && self::$filterEmpresa->cedula != "" ){
			$where = " paciente.Cedula='".self::$filterEmpresa->cedula."'";
			$cont++;
		}
		
		if(self::$filterEmpresa->nombre != null && self::$filterEmpresa->nombre != "" ){
			if($cont>0)
				$where = $where." AND";
			$where = $where." paciente.Nombre_Apellido LIKE '%".self::$filterEmpresa->nombre."%'";
			$cont++;
		}
		
		if(self::$filterEmpresa->telefono != null && self::$filterEmpresa->telefono != "" ){
			if($cont>0)
				$where= $where." AND";
			$where = $where." paciente.Telefono='".self::$filterEmpresa->telefono."'";
			$cont++;
		}
		
		if(self::$filterEmpresa->empresa != null && self::$filterEmpresa->empresa != "" ){
			if($cont>0)
				$where = $where." AND";
			$where = $where." ident_empresa.Nombre_E LIKE '%".self::$filterEmpresa->empresa."%'";
			$cont++;
		}
		
		if($cont>0)
			$sql = $sql." WHERE".$where;
		
		$sql = $sql." GROUP BY paciente.id ORDER BY paciente.Nombre_Apellido";
		
		
		
		$dataT = Yii::app()->db
			->createCommand($sql)
			->queryAll();
		
		$data = array();
		
		foreach($dataT as $row){
			$r = new PacienteEmpresa();
			$r->id = $row["id"];
			$r->cedula = $row["Cedula"];
			$r->nombre = $row["Nombre_Apellido"];
			$r->telefono = $row["Telefono"];
			$r->empresa = $row["Nombre_E"];
			$data[] = $r;
		}
		
		/*$dataT = array();
		
		$r1 = new PacienteEmpresa();
		$r1->id = 1;
		$r1->cedula = "asd";
		$r1->nombre = "dario";
		$r1->telefono = "uju" ;
		$r1->empresa = "sipi";
		
		
		$dataT[] = $r1;

		$r2 = new PacienteEmpresa();
		$r2->id = 1;
		$r2->cedula = "asd";
		$r2->nombre = "dario";
		$r2->telefono = "uju" ;
		$r2->empresa = "sipi";

		$dataT[] = $r2;*/

		return new CArrayDataProvider($data,
    array(
        'sort' => array( //optional and sortring
            'attributes' => array(
				'id',
                'cedula', 
                'nombre',
                'telefono',
				'empresa'
            ),
        ),
        'pagination' => array('pageSize' => 10) //optional add a pagination
    )
);		

	}



	
}
