<?php

/**
 * This is the model class for table "ant_personales".
 *
 * The followings are the available columns in table 'ant_personales':
 * @property integer $id
 * @property integer $id_Pacientes
 * @property string $trat_farmacologico
 * @property string $trat_atuberculosis
 * @property string $trat_aglucosidos
 * @property string $dosis
 * @property string $enf_ORL
 * @property string $detallar
 * @property string $fumador
 * @property string $num_cigarrillos_dia
 * @property string $alcohol
 * @property string $emf_afec_otica
 * @property string $trau_craneal
 * @property string $paperas
 * @property string $tuberc_pulmonar
 * @property string $sarampion
 * @property string $rubeola
 * @property string $fi_tifoidea
 * @property string $inter_quirurgica
 */
class AntPersonales extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ant_personales';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_Pacientes', 'numerical', 'integerOnly'=>true),
			array('trat_farmacologico, trat_atuberculosis, trat_aglucosidos, dosis, enf_ORL, detallar, fumador, num_cigarrillos_dia, alcohol, emf_afec_otica, trau_craneal, paperas, tuberc_pulmonar, sarampion, rubeola, fi_tifoidea, inter_quirurgica', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_Pacientes, trat_farmacologico, trat_atuberculosis, trat_aglucosidos, dosis, enf_ORL, detallar, fumador, num_cigarrillos_dia, alcohol, emf_afec_otica, trau_craneal, paperas, tuberc_pulmonar, sarampion, rubeola, fi_tifoidea, inter_quirurgica', 'safe', 'on'=>'search'),
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
			'id_Pacientes' => 'Id Pacientes',
			'trat_farmacologico' => 'Trat Farmacologico',
			'trat_atuberculosis' => 'Trat Atuberculosis',
			'trat_aglucosidos' => 'Trat Aglucosidos',
			'dosis' => 'Dosis',
			'enf_ORL' => 'Enf Orl',
			'detallar' => 'Detallar',
			'fumador' => 'Fumador',
			'num_cigarrillos_dia' => 'Num Cigarrillos Dia',
			'alcohol' => 'Alcohol',
			'emf_afec_otica' => 'Emf Afec Otica',
			'trau_craneal' => 'Trau Craneal',
			'paperas' => 'Paperas',
			'tuberc_pulmonar' => 'Tuberc Pulmonar',
			'sarampion' => 'Sarampion',
			'rubeola' => 'Rubeola',
			'fi_tifoidea' => 'Fi Tifoidea',
			'inter_quirurgica' => 'Inter Quirurgica',
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
		$criteria->compare('id_Pacientes',$this->id_Pacientes);
		$criteria->compare('trat_farmacologico',$this->trat_farmacologico,true);
		$criteria->compare('trat_atuberculosis',$this->trat_atuberculosis,true);
		$criteria->compare('trat_aglucosidos',$this->trat_aglucosidos,true);
		$criteria->compare('dosis',$this->dosis,true);
		$criteria->compare('enf_ORL',$this->enf_ORL,true);
		$criteria->compare('detallar',$this->detallar,true);
		$criteria->compare('fumador',$this->fumador,true);
		$criteria->compare('num_cigarrillos_dia',$this->num_cigarrillos_dia,true);
		$criteria->compare('alcohol',$this->alcohol,true);
		$criteria->compare('emf_afec_otica',$this->emf_afec_otica,true);
		$criteria->compare('trau_craneal',$this->trau_craneal,true);
		$criteria->compare('paperas',$this->paperas,true);
		$criteria->compare('tuberc_pulmonar',$this->tuberc_pulmonar,true);
		$criteria->compare('sarampion',$this->sarampion,true);
		$criteria->compare('rubeola',$this->rubeola,true);
		$criteria->compare('fi_tifoidea',$this->fi_tifoidea,true);
		$criteria->compare('inter_quirurgica',$this->inter_quirurgica,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return AntPersonales the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
