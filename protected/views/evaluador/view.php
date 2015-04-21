<?php
/* @var $this EvaluadorController */
/* @var $model Evaluador */

$this->breadcrumbs=array(
	'Evaluadors'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Evaluador', 'url'=>array('index')),
	array('label'=>'Create Evaluador', 'url'=>array('create')),
	array('label'=>'Update Evaluador', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Evaluador', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Evaluador', 'url'=>array('admin')),
);
?>

<h1>View Evaluador #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'usuario',
		'password',
	),
)); ?>
