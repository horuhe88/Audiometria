<?php
/* @var $this AntecedentesAudioAnterioresController */
/* @var $model AntAudioAnter */

$this->breadcrumbs=array(
	'Ant Audio Anters'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AntAudioAnter', 'url'=>array('index')),
	array('label'=>'Create AntAudioAnter', 'url'=>array('create')),
	array('label'=>'View AntAudioAnter', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AntAudioAnter', 'url'=>array('admin')),
);
?>

<h1>Update AntAudioAnter <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>