<?php
/* @var $this IdentEmpresaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ident Empresas',
);

$this->menu=array(
	array('label'=>'Create IdentEmpresa', 'url'=>array('create')),
	array('label'=>'Manage IdentEmpresa', 'url'=>array('admin')),
);
?>

<h1>Ident Empresas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
