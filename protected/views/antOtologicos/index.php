<?php
/* @var $this AntOtologicosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ant Otologicoses',
);

$this->menu=array(
	array('label'=>'Create AntOtologicos', 'url'=>array('create')),
	array('label'=>'Manage AntOtologicos', 'url'=>array('admin')),
);
?>

<h1>Ant Otologicoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
