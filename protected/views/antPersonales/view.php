<?php
/* @var $this AntPersonalesController */
/* @var $model AntPersonales */

$this->breadcrumbs=array(
	'Ant Personales'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List AntPersonales', 'url'=>array('index')),
	array('label'=>'Create AntPersonales', 'url'=>array('create')),
	array('label'=>'Update AntPersonales', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete AntPersonales', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AntPersonales', 'url'=>array('admin')),
);
?>

<h1>View AntPersonales #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'trat_farmacologico',
		'trat_atuberculosis',
		'trat_aglucosidos',
		'enf_ORL',
		'fumador',
		'num_cigarrillos_dia',
		'alcohol',
		'emf_afec_otica',
		'inter_quirurgica',
	),
)); ?>
