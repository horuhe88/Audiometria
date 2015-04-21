<?php
/* @var $this ExpLabOtotoxicosController */
/* @var $model ExpLabOtotoxicos */

$this->breadcrumbs=array(
	'Exp Lab Ototoxicoses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ExpLabOtotoxicos', 'url'=>array('index')),
	array('label'=>'Create ExpLabOtotoxicos', 'url'=>array('create')),
	array('label'=>'Update ExpLabOtotoxicos', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ExpLabOtotoxicos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ExpLabOtotoxicos', 'url'=>array('admin')),
);
?>

<h1>View ExpLabOtotoxicos #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'sol_organicos',
		'quim_industriales',
	),
)); ?>
