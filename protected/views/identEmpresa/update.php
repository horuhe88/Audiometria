<?php
/* @var $this IdentEmpresaController */
/* @var $model IdentEmpresa */

$this->breadcrumbs=array(
	'Ident Empresas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List IdentEmpresa', 'url'=>array('index')),
	array('label'=>'Create IdentEmpresa', 'url'=>array('create')),
	array('label'=>'View IdentEmpresa', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage IdentEmpresa', 'url'=>array('admin')),
);
?>

<h1>Update IdentEmpresa <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>