<?php
/* @var $this ExRuidoELaboralController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ex Ruido Elaborals',
);

$this->menu=array(
	array('label'=>'Create ExRuidoELaboral', 'url'=>array('create')),
	array('label'=>'Manage ExRuidoELaboral', 'url'=>array('admin')),
);
?>

<h1>Ex Ruido Elaborals</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
