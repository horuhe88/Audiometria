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
		'id_paciente',
		'id_usuario',
		'fecha',
	),
)); ?>
