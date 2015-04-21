<?php
/* @var $this ExRuidoELaboralController */
/* @var $model ExRuidoELaboral */

$this->breadcrumbs=array(
	'Ex Ruido Elaborals'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ExRuidoELaboral', 'url'=>array('index')),
	array('label'=>'Create ExRuidoELaboral', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#ex-ruido-elaboral-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Ex Ruido Elaborals</h1>

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
	'id'=>'ex-ruido-elaboral-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'tipo',
		'discoteca',
		'casa',
		'motociclismo',
		'rep_musica',
		/*
		'arma_fuego',
		'otro',
		'frec_exposicion',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
