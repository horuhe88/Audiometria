<?php
/* @var $this ExRuidoELaboralController */
/* @var $model ExRuidoELaboral */

$this->breadcrumbs=array(
	'Ex Ruido Elaborals'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ExRuidoELaboral', 'url'=>array('index')),
	array('label'=>'Create ExRuidoELaboral', 'url'=>array('create')),
	array('label'=>'View ExRuidoELaboral', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ExRuidoELaboral', 'url'=>array('admin')),
);
?>

<h1>Update ExRuidoELaboral <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>