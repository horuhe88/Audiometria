<?php
/* @var $this PromAlarmaController */
/* @var $model PromAlarma */

$this->breadcrumbs=array(
	'Prom Alarmas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PromAlarma', 'url'=>array('index')),
	array('label'=>'Create PromAlarma', 'url'=>array('create')),
	array('label'=>'View PromAlarma', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PromAlarma', 'url'=>array('admin')),
);
?>

<h1>Update PromAlarma <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>