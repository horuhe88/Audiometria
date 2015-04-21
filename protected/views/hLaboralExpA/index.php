<?php
/* @var $this HLaboralExpAController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Hlaboral Exp As',
);

$this->menu=array(
	array('label'=>'Create HLaboralExpA', 'url'=>array('create')),
	array('label'=>'Manage HLaboralExpA', 'url'=>array('admin')),
);
?>

<h1>Hlaboral Exp As</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
