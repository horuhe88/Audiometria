<?php
/* @var $this ExpLabOtotoxicosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Exp Lab Ototoxicoses',
);

$this->menu=array(
	array('label'=>'Create ExpLabOtotoxicos', 'url'=>array('create')),
	array('label'=>'Manage ExpLabOtotoxicos', 'url'=>array('admin')),
);
?>

<h1>Exp Lab Ototoxicoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
