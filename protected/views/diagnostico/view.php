<?php
/* @var $this DiagnosticoController */
/* @var $model Diagnostico */

$this->breadcrumbs=array(
	'Diagnosticos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Diagnostico', 'url'=>array('index')),
	array('label'=>'Create Diagnostico', 'url'=>array('create')),
	array('label'=>'Update Diagnostico', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Diagnostico', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Diagnostico', 'url'=>array('admin')),
);
?>

<h1>View Diagnostico #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'idf_diag_evaluador',
		'id_paciente',
		'id_usuario',
		'fecha',
		'ADe250',
		'ODe250',
		'AIzq250',
		'OIzq250',
		'ADe500',
		'ODe500',
		'AIzq500',
		'OIzq500',
		'ADe1000',
		'ODe1000',
		'AIzq1000',
		'OIzq1000',
		'ADer2000',
		'ODer2000',
		'AIzq2000',
		'OIzq2000',
		'ADer3000',
		'ODer3000',
		'AIzq3000',
		'OIzq3000',
		'ADer4000',
		'ODer4000',
		'AIzq4000',
		'OIzq4000',
		'ADer6000',
		'ODer6000',
		'AIzq6000',
		'OIzq6000',
		'ADer8000',
		'ODer8000',
		'AIzq8000',
		'OIzq8000',
	),
)); ?>
