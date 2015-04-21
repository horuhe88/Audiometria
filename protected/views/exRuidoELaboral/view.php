<?php
/* @var $this ExRuidoELaboralController */
/* @var $model ExRuidoELaboral */

$this->breadcrumbs=array(
	'Ex Ruido Elaborals'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ExRuidoELaboral', 'url'=>array('index')),
	array('label'=>'Create ExRuidoELaboral', 'url'=>array('create')),
	array('label'=>'Update ExRuidoELaboral', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ExRuidoELaboral', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ExRuidoELaboral', 'url'=>array('admin')),
);
?>

<h1>View ExRuidoELaboral #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'tipo',
		'discoteca',
		'casa',
		'motociclismo',
		'rep_musica',
		'arma_fuego',
		'otro',
		'frec_exposicion',
	),
)); ?>
