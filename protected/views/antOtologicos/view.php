<?php
/* @var $this AntOtologicosController */
/* @var $model AntOtologicos */

$this->breadcrumbs=array(
	'Ant Otologicoses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List AntOtologicos', 'url'=>array('index')),
	array('label'=>'Create AntOtologicos', 'url'=>array('create')),
	array('label'=>'Update AntOtologicos', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete AntOtologicos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AntOtologicos', 'url'=>array('admin')),
);
?>

<h1>View AntOtologicos #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'aculenos_tinilus',
		'tipo_acu_tin',
		'vertigo',
		'af_pos_cabeza',
		'otalgia',
		'oido',
		'dolor',
		'otorrea',
		'otorragia',
		'otros',
		'otr_sint_otologicos',
	),
)); ?>
