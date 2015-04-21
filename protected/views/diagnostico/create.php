<?php
/* @var $this DiagnosticoController */
/* @var $model Diagnostico */

$this->breadcrumbs=array(
	'Diagnosticos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Diagnostico', 'url'=>array('index')),
	array('label'=>'Manage Diagnostico', 'url'=>array('admin')),
);
?>

<h1>Create Diagnostico</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>