<?php
/* @var $this AntMorbidosController */
/* @var $model AntMorbidos */

$this->breadcrumbs=array(
	'Ant Morbidoses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List AntMorbidos', 'url'=>array('index')),
	array('label'=>'Create AntMorbidos', 'url'=>array('create')),
	array('label'=>'Update AntMorbidos', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete AntMorbidos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AntMorbidos', 'url'=>array('admin')),
);
?>

<h1>View AntMorbidos #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'hip_arterial',
		'hip_colesterolemia',
		'hipotiroidismo',
		'barotrauma',
		'diab_mellitus',
		'enf_renal',
		'trauma_ac_agudo',
		'vibraciones',
	),
)); ?>
