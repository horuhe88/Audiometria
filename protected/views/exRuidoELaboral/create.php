<?php
/* @var $this ExRuidoELaboralController */
/* @var $model ExRuidoELaboral */

$this->breadcrumbs=array(
	'Ex Ruido Elaborals'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ExRuidoELaboral', 'url'=>array('index')),
	array('label'=>'Manage ExRuidoELaboral', 'url'=>array('admin')),
);
?>

<h1>Create ExRuidoELaboral</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>