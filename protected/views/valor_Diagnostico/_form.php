<?php
/* @var $this Valor_DiagnosticoController */
/* @var $model ValDiagnostico */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'val-diagnostico-form',
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
		<?php echo $form->labelEx($model,'oido'); ?>
		<?php echo $form->textField($model,'oido',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'oido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'frecuencia'); ?>
		<?php echo $form->textField($model,'frecuencia'); ?>
		<?php echo $form->error($model,'frecuencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'via_aerea'); ?>
		<?php echo $form->textField($model,'via_aerea',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'via_aerea'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'via_osea'); ?>
		<?php echo $form->textField($model,'via_osea',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'via_osea'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->