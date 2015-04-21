<?php
/* @var $this AntOtologicosController */
/* @var $model AntOtologicos */

$this->breadcrumbs=array(
	'Ant Otologicoses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AntOtologicos', 'url'=>array('index')),
	array('label'=>'Create AntOtologicos', 'url'=>array('create')),
	array('label'=>'View AntOtologicos', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AntOtologicos', 'url'=>array('admin')),
);
?>

<h1>Update AntOtologicos <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>