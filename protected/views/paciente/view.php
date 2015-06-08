<?php
/* @var $this PacienteController */
/* @var $model Paciente */

$this->breadcrumbs=array(
	'Pacientes'=>array('admin'),
	$model->$id,
);

$this->menu=array(
	array('label'=>'List Paciente', 'url'=>array('index')),
	array('label'=>'Create Paciente', 'url'=>array('create')),
	array('label'=>'Update Paciente', 'url'=>array('update', 'id'=>$model->$id)),
	array('label'=>'Delete Paciente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->$id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Paciente', 'url'=>array('admin')),
);
?>

<h1><?php echo $model->Nombre_Apellido; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Fecha_Realizacion',
		'Edad',
		'Sexo',
		'Fecha_de_nacimiento',
		'Direccion',
		'Barrio',
		'Telefono',
		'Ocupacion',
		'Procedencia',
	),
)); ?>



<h2> Identificación de Empresa</h2>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$empresa,
	'attributes'=>array(
		'Nombre_E',
		'RUT',
		'Direccion',
		
	),
)); ?>


<h2> Historia Laboral - Exposicion Actual</h2>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$exposicionActual,
	'attributes'=>array(
		'base',
		'seguimiento',
		'Confirmacion',
		't_ser_empresa',
		'sec_trabajo',
		't_servicio',
		't_diar_trabajo',
		'e_prot_auditiva',
		'utilizacion',
		'tipo_protector',
		'tr_anterior_ruido',
		'tr_ruido',
	),
)); ?>

