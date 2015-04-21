<?php
/* @var $this IdentEmpresaController */
/* @var $model IdentEmpresa */

$this->breadcrumbs=array(
	'Ident Empresas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List IdentEmpresa', 'url'=>array('index')),
	array('label'=>'Manage IdentEmpresa', 'url'=>array('admin')),
);
?>

<h1>Create IdentEmpresa</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>