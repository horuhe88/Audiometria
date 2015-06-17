<?php

/**
 * This is the model class for table "ant_otologicos".
 *
 * The followings are the available columns in table 'ant_otologicos':
 * @property integer $id
 * @property integer $id_Paciente
 * @property string $aculenos_tinilus
 * @property string $tipo_acu_tin
 * @property string $unilateral
 * @property string $bilateral
 * @property string $tipoRu
 * @property string $vertigo
 * @property string $af_pos_cabeza
 * @property string $acostado
 * @property string $lev_rapido
 * @property string $dir_caerse
 * @property string $m_vertical
 * @property string $m_horizontal
 * @property string $m_circulos
 * @property string $hora_aparicion
 * @property string $continuo
 * @property string $episodico
 * @property string $incapacitante
 * @property string $otalgia
 * @property string $oido
 * @property string $d_continuo
 * @property string $d_permanente
 * @property string $d_superficial
 * @property string $d_profundo
 * @property string $d_trac_pabellon
 * @property string $d_pres_trago
 * @property string $otorrea
 * @property string $otorragia
 * @property string $otros
 * @property string $otr_sint_otologicos
 * @property string $ant_otologicoscol
 * @property string $perf_timpanica
 * @property string $cirugias
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
			array('id_Paciente', 'numerical', 'integerOnly'=>true),
			array('aculenos_tinilus, tipo_acu_tin, unilateral, bilateral, tipoRu, vertigo, af_pos_cabeza, acostado, lev_rapido, dir_caerse, m_vertical, m_horizontal, m_circulos, hora_aparicion, continuo, episodico, incapacitante, otalgia, oido, d_continuo, d_permanente, d_superficial, d_profundo, d_trac_pabellon, d_pres_trago, otorrea, otorragia, otros, otr_sint_otologicos, ant_otologicoscol, perf_timpanica, cirugias', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_Paciente, aculenos_tinilus, tipo_acu_tin, unilateral, bilateral, tipoRu, vertigo, af_pos_cabeza, acostado, lev_rapido, dir_caerse, m_vertical, m_horizontal, m_circulos, hora_aparicion, continuo, episodico, incapacitante, otalgia, oido, d_continuo, d_permanente, d_superficial, d_profundo, d_trac_pabellon, d_pres_trago, otorrea, otorragia, otros, otr_sint_otologicos, ant_otologicoscol, perf_timpanica, cirugias', 'safe', 'on'=>'search'),
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
			'id_Paciente' => 'Id Paciente',
			'aculenos_tinilus' => 'Aculenos Tinilus',
			'tipo_acu_tin' => 'Tipo Acu Tin',
			'unilateral' => 'Unilateral',
			'bilateral' => 'Bilateral',
			'tipoRu' => 'Tipo Ru',
			'vertigo' => 'Vertigo',
			'af_pos_cabeza' => 'Af Pos Cabeza',
			'acostado' => 'Acostado',
			'lev_rapido' => 'Lev Rapido',
			'dir_caerse' => 'Dir Caerse',
			'm_vertical' => 'M Vertical',
			'm_horizontal' => 'M Horizontal',
			'm_circulos' => 'M Circulos',
			'hora_aparicion' => 'Hora Aparicion',
			'continuo' => 'Continuo',
			'episodico' => 'Episodico',
			'incapacitante' => 'Incapacitante',
			'otalgia' => 'Otalgia',
			'oido' => 'Oido',
			'd_continuo' => 'D Continuo',
			'd_permanente' => 'D Permanente',
			'd_superficial' => 'D Superficial',
			'd_profundo' => 'D Profundo',
			'd_trac_pabellon' => 'D Trac Pabellon',
			'd_pres_trago' => 'D Pres Trago',
			'otorrea' => 'Otorrea',
			'otorragia' => 'Otorragia',
			'otros' => 'Otros',
			'otr_sint_otologicos' => 'Otr Sint Otologicos',
			'ant_otologicoscol' => 'Ant Otologicoscol',
			'perf_timpanica' => 'Perf Timpanica',
			'cirugias' => 'Cirugias',
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
		$criteria->compare('unilateral',$this->unilateral,true);
		$criteria->compare('bilateral',$this->bilateral,true);
		$criteria->compare('tipoRu',$this->tipoRu,true);
		$criteria->compare('vertigo',$this->vertigo,true);
		$criteria->compare('af_pos_cabeza',$this->af_pos_cabeza,true);
		$criteria->compare('acostado',$this->acostado,true);
		$criteria->compare('lev_rapido',$this->lev_rapido,true);
		$criteria->compare('dir_caerse',$this->dir_caerse,true);
		$criteria->compare('m_vertical',$this->m_vertical,true);
		$criteria->compare('m_horizontal',$this->m_horizontal,true);
		$criteria->compare('m_circulos',$this->m_circulos,true);
		$criteria->compare('hora_aparicion',$this->hora_aparicion,true);
		$criteria->compare('continuo',$this->continuo,true);
		$criteria->compare('episodico',$this->episodico,true);
		$criteria->compare('incapacitante',$this->incapacitante,true);
		$criteria->compare('otalgia',$this->otalgia,true);
		$criteria->compare('oido',$this->oido,true);
		$criteria->compare('d_continuo',$this->d_continuo,true);
		$criteria->compare('d_permanente',$this->d_permanente,true);
		$criteria->compare('d_superficial',$this->d_superficial,true);
		$criteria->compare('d_profundo',$this->d_profundo,true);
		$criteria->compare('d_trac_pabellon',$this->d_trac_pabellon,true);
		$criteria->compare('d_pres_trago',$this->d_pres_trago,true);
		$criteria->compare('otorrea',$this->otorrea,true);
		$criteria->compare('otorragia',$this->otorragia,true);
		$criteria->compare('otros',$this->otros,true);
		$criteria->compare('otr_sint_otologicos',$this->otr_sint_otologicos,true);
		$criteria->compare('ant_otologicoscol',$this->ant_otologicoscol,true);
		$criteria->compare('perf_timpanica',$this->perf_timpanica,true);
		$criteria->compare('cirugias',$this->cirugias,true);

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
