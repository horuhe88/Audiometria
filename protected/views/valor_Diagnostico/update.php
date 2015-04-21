<?php
/* @var $this Valor_DiagnosticoController */
/* @var $model ValDiagnostico */

$this->breadcrumbs=array(
	'Val Diagnosticos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ValDiagnostico', 'url'=>array('index')),
	array('label'=>'Create ValDiagnostico', 'url'=>array('create')),
	array('label'=>'View ValDiagnostico', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ValDiagnostico', 'url'=>array('admin')),
);
?>

<h1>Update ValDiagnostico <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>