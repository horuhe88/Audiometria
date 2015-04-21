<?php
/* @var $this AntOtologicosController */
/* @var $model AntOtologicos */

$this->breadcrumbs=array(
	'Ant Otologicoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AntOtologicos', 'url'=>array('index')),
	array('label'=>'Manage AntOtologicos', 'url'=>array('admin')),
);
?>

<h1>Create AntOtologicos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>