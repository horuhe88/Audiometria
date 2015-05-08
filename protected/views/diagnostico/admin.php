<?php
/* @var $this DiagnosticoController */
/* @var $model Diagnostico */

$this->breadcrumbs=array(
	'Diagnosticos',
);

$this->menu=array(
	array('label'=>'List Diagnostico', 'url'=>array('index')),
	array('label'=>'Create Diagnostico', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#diagnostico-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");

/*Yii::app()->clientScript->registerScript('create', "
$('.create-button').click(function(){
	$('.addDi-form').toggle();
	return false;
});
$('.addDi-form form').submit(function(){
	$('#diagnostico-grid').yiiGridView('create', {
		data: $(this).serialize()
	});
	return false;
});
");*/
?>

<?php
	$ruta1 = Yii::app()->createUrl("diagnostico/create",array('id'=>$id));
?>

<h1>Diagnosticos  <?php echo CHtml::link('Agregar',$ruta1,array('class'=>'add-button')); ?></h1>

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

<div class="addDi-form" style="display:none">
<?php $this->renderPartial('create',array(
	'model'=>$model,
)); ?>
</div><!-- addDi-form -->


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'diagnostico-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'idf_diag_evaluador',
		'id_paciente',
		'id_usuario',
		'fecha',
		/*'ADer250',
		
		'ODe250',
		'AIzq250',
		'OIzq250',
		'ADe500',
		'ODe500',
		'AIzq500',
		'OIzq500',
		'ADe1000',
		'ODe1000',
		'AIzq1000',
		'OIzq1000',
		'ADer2000',
		'ODer2000',
		'AIzq2000',
		'OIzq2000',
		'ADer3000',
		'ODer3000',
		'AIzq3000',
		'OIzq3000',
		'ADer4000',
		'ODer4000',
		'AIzq4000',
		'OIzq4000',
		'ADer6000',
		'ODer6000',
		'AIzq6000',
		'OIzq6000',
		'ADer8000',
		'ODer8000',
		'AIzq8000',
		'OIzq8000',
		*/
		array(
			'class'=>'CButtonColumn',
			//Para agregar el icono de adicionar diagnostico
			//'template'=>'{view}{update}{delete}{adddiagnostico}',
			'template'=>'{view}{update}{delete}',
			'buttons'=>array(
					'view' => array(
						'url'=>'Yii::app()->createUrl("diagnostico/results",array("id"=>$data->id))',
					),	
					'update' => array(
						'url'=>'Yii::app()->createUrl("diagnostico/update",array("id"=>$data->id))',
					),		
					//Para agregar la funcion y el icono de crear diagnostico
/*					'adddiagnostico' => array(
						'label'=>"Agregar Diagnostico",
						'imageUrl'=>Yii::app()->request->baseUrl.'/images/nuevodiagnostico.png',
						'url'=>'Yii::app()->createUrl("diagnostico/create",array("id"=>$data->id))',

					),	*/				
			),
		),
	),
)); ?>
