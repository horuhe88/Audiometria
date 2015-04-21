<?php
/* @var $this Valor_DiagnosticoController */
/* @var $model ValDiagnostico */

$this->breadcrumbs=array(
	'Val Diagnosticos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ValDiagnostico', 'url'=>array('index')),
	array('label'=>'Manage ValDiagnostico', 'url'=>array('admin')),
);
?>

<h1>Create ValDiagnostico</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>