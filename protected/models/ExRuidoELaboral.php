<?php

/**
 * This is the model class for table "ex_ruido_e_laboral".
 *
 * The followings are the available columns in table 'ex_ruido_e_laboral':
 * @property integer $id
 * @property string $tipo
 * @property string $discoteca
 * @property string $casa
 * @property string $motociclismo
 * @property string $rep_musica
 * @property string $arma_fuego
 * @property string $otro
 * @property string $frec_exposicion
 *
 * The followings are the available model relations:
 * @property Paciente $id0
 */
class ExRuidoELaboral extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ex_ruido_e_laboral';
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
			array('tipo, discoteca, casa, motociclismo, rep_musica, arma_fuego, otro, frec_exposicion', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, tipo, discoteca, casa, motociclismo, rep_musica, arma_fuego, otro, frec_exposicion', 'safe', 'on'=>'search'),
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
			'tipo' => 'Tipo',
			'discoteca' => 'Discoteca',
			'casa' => 'Casa',
			'motociclismo' => 'Motociclismo',
			'rep_musica' => 'Rep Musica',
			'arma_fuego' => 'Arma Fuego',
			'otro' => 'Otro',
			'frec_exposicion' => 'Frec Exposicion',
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
		$criteria->compare('tipo',$this->tipo,true);
		$criteria->compare('discoteca',$this->discoteca,true);
		$criteria->compare('casa',$this->casa,true);
		$criteria->compare('motociclismo',$this->motociclismo,true);
		$criteria->compare('rep_musica',$this->rep_musica,true);
		$criteria->compare('arma_fuego',$this->arma_fuego,true);
		$criteria->compare('otro',$this->otro,true);
		$criteria->compare('frec_exposicion',$this->frec_exposicion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ExRuidoELaboral the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
