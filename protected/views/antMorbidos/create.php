<?php
/* @var $this AntMorbidosController */
/* @var $model AntMorbidos */

$this->breadcrumbs=array(
	'Ant Morbidoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AntMorbidos', 'url'=>array('index')),
	array('label'=>'Manage AntMorbidos', 'url'=>array('admin')),
);
?>

<h1>Create AntMorbidos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>