<?php
/* @var $this PromAlarmaController */
/* @var $model PromAlarma */

$this->breadcrumbs=array(
	'Prom Alarmas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List PromAlarma', 'url'=>array('index')),
	array('label'=>'Create PromAlarma', 'url'=>array('create')),
	array('label'=>'Update PromAlarma', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PromAlarma', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PromAlarma', 'url'=>array('admin')),
);
?>

<h1>View PromAlarma #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_Paciente',
		'id_Diagnoctico',
		'val_der',
		'val_izq',
	),
)); ?>
