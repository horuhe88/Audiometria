<?php
/* @var $this DiagnosticoController */
/* @var $model Diagnostico */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'diagnostico-form',
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
		<?php echo $form->labelEx($model,'id_paciente'); ?>
		<?php echo $form->textField($model,'id_paciente',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'id_paciente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_usuario'); ?>
		<?php echo $form->textField($model,'id_usuario',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'id_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->