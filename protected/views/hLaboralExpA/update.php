<?php
/* @var $this HLaboralExpAController */
/* @var $model HLaboralExpA */

$this->breadcrumbs=array(
	'Hlaboral Exp As'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List HLaboralExpA', 'url'=>array('index')),
	array('label'=>'Create HLaboralExpA', 'url'=>array('create')),
	array('label'=>'View HLaboralExpA', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage HLaboralExpA', 'url'=>array('admin')),
);
?>

<h1>Update HLaboralExpA <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>