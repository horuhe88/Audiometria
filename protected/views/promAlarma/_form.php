<?php
/* @var $this PromAlarmaController */
/* @var $model PromAlarma */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'prom-alarma-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_Paciente'); ?>
		<?php echo $form->textField($model,'id_Paciente',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'id_Paciente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_Diagnoctico'); ?>
		<?php echo $form->textField($model,'id_Diagnoctico',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'id_Diagnoctico'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'val_der'); ?>
		<?php echo $form->textField($model,'val_der',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'val_der'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'val_izq'); ?>
		<?php echo $form->textField($model,'val_izq',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'val_izq'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->