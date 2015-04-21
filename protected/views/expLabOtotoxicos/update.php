<?php
/* @var $this ExpLabOtotoxicosController */
/* @var $model ExpLabOtotoxicos */

$this->breadcrumbs=array(
	'Exp Lab Ototoxicoses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ExpLabOtotoxicos', 'url'=>array('index')),
	array('label'=>'Create ExpLabOtotoxicos', 'url'=>array('create')),
	array('label'=>'View ExpLabOtotoxicos', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ExpLabOtotoxicos', 'url'=>array('admin')),
);
?>

<h1>Update ExpLabOtotoxicos <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>