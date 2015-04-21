<?php
/* @var $this ExpLabOtotoxicosController */
/* @var $model ExpLabOtotoxicos */

$this->breadcrumbs=array(
	'Exp Lab Ototoxicoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ExpLabOtotoxicos', 'url'=>array('index')),
	array('label'=>'Manage ExpLabOtotoxicos', 'url'=>array('admin')),
);
?>

<h1>Create ExpLabOtotoxicos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>