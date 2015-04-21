<?php
/* @var $this AntecedentesAudioAnterioresController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ant Audio Anters',
);

$this->menu=array(
	array('label'=>'Create AntAudioAnter', 'url'=>array('create')),
	array('label'=>'Manage AntAudioAnter', 'url'=>array('admin')),
);
?>

<h1>Ant Audio Anters</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
