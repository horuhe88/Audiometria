<?php
/* @var $this IdentEmpresaController */
/* @var $model IdentEmpresa */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ident-empresa-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idf_empresa'); ?>
		<?php echo $form->textField($model,'idf_empresa',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'idf_empresa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Fecha'); ?>
		<?php echo $form->textField($model,'Fecha'); ?>
		<?php echo $form->error($model,'Fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nombre_E'); ?>
		<?php echo $form->textField($model,'Nombre_E',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Nombre_E'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RUT'); ?>
		<?php echo $form->textField($model,'RUT',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'RUT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Direccion'); ?>
		<?php echo $form->textField($model,'Direccion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Direccion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->