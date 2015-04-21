<?php
/* @var $this AntMorbidosController */
/* @var $model AntMorbidos */

$this->breadcrumbs=array(
	'Ant Morbidoses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AntMorbidos', 'url'=>array('index')),
	array('label'=>'Create AntMorbidos', 'url'=>array('create')),
	array('label'=>'View AntMorbidos', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AntMorbidos', 'url'=>array('admin')),
);
?>

<h1>Update AntMorbidos <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>