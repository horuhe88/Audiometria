<?php
/* @var $this AntMorbidosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ant Morbidoses',
);

$this->menu=array(
	array('label'=>'Create AntMorbidos', 'url'=>array('create')),
	array('label'=>'Manage AntMorbidos', 'url'=>array('admin')),
);
?>

<h1>Ant Morbidoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
