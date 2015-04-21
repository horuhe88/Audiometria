<?php
/* @var $this Valor_DiagnosticoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Val Diagnosticos',
);

$this->menu=array(
	array('label'=>'Create ValDiagnostico', 'url'=>array('create')),
	array('label'=>'Manage ValDiagnostico', 'url'=>array('admin')),
);
?>

<h1>Val Diagnosticos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
