<?php
/* @var $this PacienteController */
/* @var $model Paciente */

$this->breadcrumbs=array(
	'Pacientes',
);

$this->menu=array(
	array('label'=>'List Paciente', 'url'=>array('index')),
	array('label'=>'Create Paciente', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#paciente-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php
	$ruta1 = Yii::app()->createUrl("paciente/create");
?>

<!-- <h1>Pacientes</h1> -->
<h1>Pacientes  <?php echo CHtml::link('Agregar',$ruta1,array('class'=>'add-button')); ?></h1>

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
	'id'=>'paciente-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'Cedula',
		'Nombre_Apellido',
		'Fecha_de_nacimiento',
		'Telefono',
		/*
		'Barrio',
		'Ocupacion',
		'Procedencia',
		'Fecha_Realizacion',*/
		
		array(
			'class'=>'CButtonColumn',
			//Se agrega el adddiagnostico al lado de los iconos de historia y diagnostico
			//'template'=>'{historia}{diagnostico}{adddiagnostico}',
			'template'=>'{historia}{diagnostico}{delete}',
			'buttons'=>array(
					'historia' => array(
						'label'=>"Historia Clinica",
						'imageUrl'=>Yii::app()->request->baseUrl.'/images/historia.png',	
						'url'=>'Yii::app()->createUrl("paciente/view",array("id"=>$data->id))',

					),
					'diagnostico' => array(
						'label'=>"Diagnosticos",
						'imageUrl'=>Yii::app()->request->baseUrl.'/images/diagnosticos.png',	
						'url'=>'Yii::app()->createUrl("diagnostico/adminPaciente",array("id"=>$data->id))',

					),
					'delete' => array(
						'label'=>"Eliminar",
						'url'=>'Yii::app()->createUrl("paciente/deletepaciente",array("id"=>$data->id))',

					)

					//Icono de oreja con + para agregar diagnostico
/*					'adddiagnostico' => array(
						'label'=>"Agregar Diagnostico",
						'imageUrl'=>Yii::app()->request->baseUrl.'/images/nuevodiagnostico.png',
						'url'=>'Yii::app()->createUrl("diagnostico/create",array("id"=>$data->id))',

					),	*/
			),
		),
	),
)); ?>


<?php/* $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider' => $model->searchByEmpresa(),
    'columns' => array('id', 'nombre','dato'),
)); */?>

