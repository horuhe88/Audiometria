<?php
/* @var $this IdentEmpresaController */
/* @var $model IdentEmpresa */

$this->breadcrumbs=array(
	'Ident Empresas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List IdentEmpresa', 'url'=>array('index')),
	array('label'=>'Create IdentEmpresa', 'url'=>array('create')),
	array('label'=>'Update IdentEmpresa', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete IdentEmpresa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage IdentEmpresa', 'url'=>array('admin')),
);
?>

<h1>View IdentEmpresa #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'idf_empresa',
		'Fecha',
		'Nombre_E',
		'RUT',
		'Direccion',
	),
)); ?>
