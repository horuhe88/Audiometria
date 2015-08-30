<?php

/**
 * This is the model class for table "prom_alarma".
 *
 * The followings are the available columns in table 'prom_alarma':
 * @property integer $id
 * @property string $id_Paciente
 * @property string $id_Diagnoctico
 * @property string $val_der
 * @property string $val_izq
 */
class PromAlarma extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'prom_alarma';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_Paciente, id_Diagnoctico, val_der, val_izq', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_Paciente, id_Diagnoctico, val_der, val_izq', 'safe', 'on'=>'search'),
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
			'id_Diagnoctico' => 'Id Diagnoctico',
			'val_der' => 'Val Der',
			'val_izq' => 'Val Izq',
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
		$criteria->compare('id_Paciente',$this->id_Paciente,true);
		$criteria->compare('id_Diagnoctico',$this->id_Diagnoctico,true);
		$criteria->compare('val_der',$this->val_der,true);
		$criteria->compare('val_izq',$this->val_izq,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PromAlarma the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
