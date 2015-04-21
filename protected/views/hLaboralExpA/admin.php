<?php
/* @var $this HLaboralExpAController */
/* @var $model HLaboralExpA */

$this->breadcrumbs=array(
	'Hlaboral Exp As'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List HLaboralExpA', 'url'=>array('index')),
	array('label'=>'Create HLaboralExpA', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#hlaboral-exp-a-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Hlaboral Exp As</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'hlaboral-exp-a-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'fecha',
		'base',
		'seguimiento',
		'confirmacion',
		't_ser_empresa',
		/*
		'sec_trabajo',
		'exp_ruido',
		't_servicio',
		't_diar_trabajo',
		'e_prot_auditiva',
		'utilizacion',
		'tipo_protector',
		'tr_anterior_ruido',
		'tr_ruido',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
