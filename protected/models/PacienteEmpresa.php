<?php

/**
 * PacienteEmpresa class.
 * PacienteEmpresa is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class PacienteEmpresa extends CFormModel
{
	public $id;
	public $cedula;
	public $nombre;
	public $telefono;
	public $empresa;

	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			// username and password are required
			array('id, cedula, nombre, telefono, empresa', 'required'),
			
		);
	}

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'cedula'=>'Cedula',
			'nombre'=>'Nombre',
			'telefono'=>'Telefono',
			'empresa'=>'Empresa',
		);
	}

}
