<?php
/* @var $this AntecedentesAudioAnterioresController */
/* @var $model AntAudioAnter */

$this->breadcrumbs=array(
	'Ant Audio Anters'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AntAudioAnter', 'url'=>array('index')),
	array('label'=>'Manage AntAudioAnter', 'url'=>array('admin')),
);
?>

<h1>Create AntAudioAnter</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>