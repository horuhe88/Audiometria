<?php
/* @var $this HLaboralExpAController */
/* @var $model HLaboralExpA */

$this->breadcrumbs=array(
	'Hlaboral Exp As'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List HLaboralExpA', 'url'=>array('index')),
	array('label'=>'Manage HLaboralExpA', 'url'=>array('admin')),
);
?>

<h1>Create HLaboralExpA</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>