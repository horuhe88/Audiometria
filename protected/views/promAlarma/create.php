<?php
/* @var $this PromAlarmaController */
/* @var $model PromAlarma */

$this->breadcrumbs=array(
	'Prom Alarmas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PromAlarma', 'url'=>array('index')),
	array('label'=>'Manage PromAlarma', 'url'=>array('admin')),
);
?>

<h1>Create PromAlarma</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>