<?php

/**
 * This is the model class for table "ant_otologicos".
 *
 * The followings are the available columns in table 'ant_otologicos':
 * @property integer $id
 * @property integer $id_Paciente
 * @property string $aculenos_tinilus
 * @property string $tipo_acu_tin
 * @property string $vertigo
 * @property string $af_pos_cabeza
 * @property string $hora_aparicion
 * @property string $otalgia
 * @property string $oido
 * @property string $dolor
 * @property string $otorrea
 * @property string $otorragia
 * @property string $otros
 * @property string $otr_sint_otologicos
 *
 * The followings are the available model relations:
 * @property Paciente $id0
 */
class AntOtologicos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ant_otologicos';
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
			array('id, id_Paciente', 'numerical', 'integerOnly'=>true),
			array('aculenos_tinilus, tipo_acu_tin, vertigo, af_pos_cabeza, hora_aparicion, otalgia, oido, dolor, otorrea, otorragia, otros, otr_sint_otologicos', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_Paciente, aculenos_tinilus, tipo_acu_tin, vertigo, af_pos_cabeza, hora_aparicion, otalgia, oido, dolor, otorrea, otorragia, otros, otr_sint_otologicos', 'safe', 'on'=>'search'),
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
			'id_Paciente' => 'Id Paciente',
			'aculenos_tinilus' => 'Aculenos o Tinilus',
			'tipo_acu_tin' => 'Tipo de Ruido',
			'vertigo' => 'Vertigo',
			'af_pos_cabeza' => 'Afecta con cambios de posicion de cabeza',
			'hora_aparicion' => 'Hora de Aparicion',
			'otalgia' => 'Otalgia',
			'oido' => 'Cual Oido',
			'dolor' => 'Dolor',
			'otorrea' => 'Otorrea',
			'otorragia' => 'Otorragia',
			'otros' => 'Otros',
			'otr_sint_otologicos' => 'Otros sintomas otologicos',
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
		$criteria->compare('id_Paciente',$this->id_Paciente);
		$criteria->compare('aculenos_tinilus',$this->aculenos_tinilus,true);
		$criteria->compare('tipo_acu_tin',$this->tipo_acu_tin,true);
		$criteria->compare('vertigo',$this->vertigo,true);
		$criteria->compare('af_pos_cabeza',$this->af_pos_cabeza,true);
		$criteria->compare('hora_aparicion',$this->hora_aparicion,true);
		$criteria->compare('otalgia',$this->otalgia,true);
		$criteria->compare('oido',$this->oido,true);
		$criteria->compare('dolor',$this->dolor,true);
		$criteria->compare('otorrea',$this->otorrea,true);
		$criteria->compare('otorragia',$this->otorragia,true);
		$criteria->compare('otros',$this->otros,true);
		$criteria->compare('otr_sint_otologicos',$this->otr_sint_otologicos,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return AntOtologicos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
