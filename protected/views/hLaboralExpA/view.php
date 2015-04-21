<?php
/* @var $this HLaboralExpAController */
/* @var $model HLaboralExpA */

$this->breadcrumbs=array(
	'Hlaboral Exp As'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List HLaboralExpA', 'url'=>array('index')),
	array('label'=>'Create HLaboralExpA', 'url'=>array('create')),
	array('label'=>'Update HLaboralExpA', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete HLaboralExpA', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage HLaboralExpA', 'url'=>array('admin')),
);
?>

<h1>View HLaboralExpA #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'fecha',
		'base',
		'seguimiento',
		'confirmacion',
		't_ser_empresa',
		'sec_trabajo',
		'exp_ruido',
		't_servicio',
		't_diar_trabajo',
		'e_prot_auditiva',
		'utilizacion',
		'tipo_protector',
		'tr_anterior_ruido',
		'tr_ruido',
	),
)); ?>
