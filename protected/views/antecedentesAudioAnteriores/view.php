<?php
/* @var $this AntecedentesAudioAnterioresController */
/* @var $model AntAudioAnter */

$this->breadcrumbs=array(
	'Ant Audio Anters'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List AntAudioAnter', 'url'=>array('index')),
	array('label'=>'Create AntAudioAnter', 'url'=>array('create')),
	array('label'=>'Update AntAudioAnter', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete AntAudioAnter', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AntAudioAnter', 'url'=>array('admin')),
);
?>

<h1>View AntAudioAnter #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'fecha_examen',
		'resultado',
		'lugar_examen',
		'exa_audio_complemen',
		'observaciones',
	),
)); ?>
