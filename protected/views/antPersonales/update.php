<?php
/* @var $this AntPersonalesController */
/* @var $model AntPersonales */

$this->breadcrumbs=array(
	'Ant Personales'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AntPersonales', 'url'=>array('index')),
	array('label'=>'Create AntPersonales', 'url'=>array('create')),
	array('label'=>'View AntPersonales', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AntPersonales', 'url'=>array('admin')),
);
?>

<h1>Update AntPersonales <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>