<?php

/**
 * This is the model class for table "h_laboral_exp_a".
 *
 * The followings are the available columns in table 'h_laboral_exp_a':
 * @property integer $id
 * @property integer $id_empresa
 * @property string $fecha
 * @property string $base
 * @property string $seguimiento
 * @property string $confirmacion
 * @property string $t_ser_empresa
 * @property string $sec_trabajo
 * @property string $exp_ruido
 * @property string $t_servicio
 * @property string $t_diar_trabajo
 * @property string $e_prot_auditiva
 * @property string $utilizacion
 * @property string $tipo_protector
 * @property string $tr_anterior_ruido
 * @property string $tr_ruido
 */
class HLaboralExpA extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'h_laboral_exp_a';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_empresa', 'numerical', 'integerOnly'=>true),
			array('base, seguimiento, confirmacion, t_ser_empresa, sec_trabajo, exp_ruido, t_servicio, t_diar_trabajo, e_prot_auditiva, utilizacion, tipo_protector, tr_anterior_ruido, tr_ruido', 'length', 'max'=>45),
			array('fecha', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_empresa, fecha, base, seguimiento, confirmacion, t_ser_empresa, sec_trabajo, exp_ruido, t_servicio, t_diar_trabajo, e_prot_auditiva, utilizacion, tipo_protector, tr_anterior_ruido, tr_ruido', 'safe', 'on'=>'search'),
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
			'id_empresa' => 'Id Empresa',
			'fecha' => 'Fecha',
			'base' => 'Base',
			'seguimiento' => 'Seguimiento',
			'confirmacion' => 'Confirmacion',
			't_ser_empresa' => 'T Ser Empresa',
			'sec_trabajo' => 'Sec Trabajo',
			'exp_ruido' => 'Exp Ruido',
			't_servicio' => 'T Servicio',
			't_diar_trabajo' => 'T Diar Trabajo',
			'e_prot_auditiva' => 'E Prot Auditiva',
			'utilizacion' => 'Utilizacion',
			'tipo_protector' => 'Tipo Protector',
			'tr_anterior_ruido' => 'Tr Anterior Ruido',
			'tr_ruido' => 'Tr Ruido',
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
		$criteria->compare('id_empresa',$this->id_empresa);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('base',$this->base,true);
		$criteria->compare('seguimiento',$this->seguimiento,true);
		$criteria->compare('confirmacion',$this->confirmacion,true);
		$criteria->compare('t_ser_empresa',$this->t_ser_empresa,true);
		$criteria->compare('sec_trabajo',$this->sec_trabajo,true);
		$criteria->compare('exp_ruido',$this->exp_ruido,true);
		$criteria->compare('t_servicio',$this->t_servicio,true);
		$criteria->compare('t_diar_trabajo',$this->t_diar_trabajo,true);
		$criteria->compare('e_prot_auditiva',$this->e_prot_auditiva,true);
		$criteria->compare('utilizacion',$this->utilizacion,true);
		$criteria->compare('tipo_protector',$this->tipo_protector,true);
		$criteria->compare('tr_anterior_ruido',$this->tr_anterior_ruido,true);
		$criteria->compare('tr_ruido',$this->tr_ruido,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return HLaboralExpA the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
