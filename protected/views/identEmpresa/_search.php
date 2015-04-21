<?php
/* @var $this IdentEmpresaController */
/* @var $model IdentEmpresa */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idf_empresa'); ?>
		<?php echo $form->textField($model,'idf_empresa',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Fecha'); ?>
		<?php echo $form->textField($model,'Fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nombre_E'); ?>
		<?php echo $form->textField($model,'Nombre_E',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RUT'); ?>
		<?php echo $form->textField($model,'RUT',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Direccion'); ?>
		<?php echo $form->textField($model,'Direccion',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->