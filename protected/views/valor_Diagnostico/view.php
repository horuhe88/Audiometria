<?php
/* @var $this Valor_DiagnosticoController */
/* @var $model ValDiagnostico */

$this->breadcrumbs=array(
	'Val Diagnosticos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ValDiagnostico', 'url'=>array('index')),
	array('label'=>'Create ValDiagnostico', 'url'=>array('create')),
	array('label'=>'Update ValDiagnostico', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ValDiagnostico', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ValDiagnostico', 'url'=>array('admin')),
);
?>

<h1>View ValDiagnostico #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'oido',
		'frecuencia',
		'via_aerea',
		'via_osea',
	),
)); ?>
