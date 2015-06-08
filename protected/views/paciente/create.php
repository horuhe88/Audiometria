<?php
/* @var $this PacienteController */
/* @var $model Paciente */

$this->breadcrumbs=array(
	'Pacientes'=>array('admin'),
	'Agregar Historia Clinica',
);

$this->menu=array(
	array('label'=>'List Paciente', 'url'=>array('index')),
	array('label'=>'Manage Paciente', 'url'=>array('admin')),
);
?>

<h1>Agregar Historia Clinica</h1>

<?php $this->renderPartial('_formcreate', array(
			'model'=>$model,
			'empresa'=>$empresa,
			'exposicionLaboral'=>$exposicionLaboral,
			'exposicionActual'=>$exposicionActual,
			'exposicionRuidoExtra'=>$exposicionRuidoExtra,
			'antecedentes'=>$antecedentes,
			'antecedentesMorbidos'=>$antecedentesMorbidos,
			'antecedentesOtologicos'=>$antecedentesOtologicos,
			'antAudioAnter'=>$antAudioAnter
		)); ?>