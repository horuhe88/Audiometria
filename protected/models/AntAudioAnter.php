<?php

/**
 * This is the model class for table "ant_audio_anter".
 *
 * The followings are the available columns in table 'ant_audio_anter':
 * @property integer $id
 * @property string $fecha_examen
 * @property string $resultado
 * @property string $lugar_examen
 * @property string $exa_audio_complemen
 * @property string $observaciones
 *
 * The followings are the available model relations:
 * @property Paciente $id0
 */
class AntAudioAnter extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ant_audio_anter';
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
			array('resultado, lugar_examen, exa_audio_complemen, observaciones', 'length', 'max'=>45),
			array('fecha_examen', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, fecha_examen, resultado, lugar_examen, exa_audio_complemen, observaciones', 'safe', 'on'=>'search'),
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
			'fecha_examen' => 'Fecha Examen',
			'resultado' => 'Resultado',
			'lugar_examen' => 'Lugar Examen',
			'exa_audio_complemen' => 'Exa Audio Complemen',
			'observaciones' => 'Observaciones',
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
		$criteria->compare('fecha_examen',$this->fecha_examen,true);
		$criteria->compare('resultado',$this->resultado,true);
		$criteria->compare('lugar_examen',$this->lugar_examen,true);
		$criteria->compare('exa_audio_complemen',$this->exa_audio_complemen,true);
		$criteria->compare('observaciones',$this->observaciones,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return AntAudioAnter the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
